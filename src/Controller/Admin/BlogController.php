<?php

namespace App\Controller\Admin;

use App\Entity\Post;
use App\Entity\User;
use App\Entity\Comment;
use App\Form\PostType;
use App\Form\UserType;
use App\Repository\PostRepository;
use App\Security\PostVoter;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;
use Symfony\Component\Security\Http\Attribute\CurrentUser;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;

#[IsGranted(User::ROLE_ADMIN)]
final class BlogController extends AbstractController
{
    #[Route('/{_locale}/admin/post/', name: 'admin_post_index', requirements: ['_locale' => 'fr|en'], methods: ['GET'])]
    public function index(
        #[CurrentUser] User $user,
        Request $request,
        PostRepository $posts,
        PaginatorInterface $paginator
    ): Response {
        $query = $posts->createQueryBuilder('p')
            ->where('p.author = :author')
            ->setParameter('author', $user)
            ->orderBy('p.publishedAt', 'DESC');

        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10 // Nombre d’articles par page
        );

        return $this->render('admin/blog/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }

    #[Route('/{_locale}/admin/post/new', name: 'admin_post_new', requirements: ['_locale' => 'fr|en'], methods: ['GET', 'POST'])]
    public function new(#[CurrentUser] User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        $post = new Post();
        $post->setAuthor($user);

        $form = $this->createForm(PostType::class, $post)
            ->add('saveAndCreateNew', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                $post->setImageFile($imageFile);
            }

            $entityManager->persist($post);
            $entityManager->flush();

            $this->addFlash('success', 'Le post a été créé avec succès.');

            return $this->redirectToRoute('admin_post_index');
        }

        return $this->render('admin/blog/new.html.twig', [
            'post' => $post,
            'form' => $form,
        ]);
    }

    #[Route('/{_locale}/admin/post/{id}', name: 'admin_post_show', requirements: ['_locale' => 'fr|en', 'id' => Requirement::POSITIVE_INT], methods: ['GET'])]
    public function show(Post $post): Response
    {
        $this->denyAccessUnlessGranted(PostVoter::SHOW, $post);

        return $this->render('admin/blog/show.html.twig', [
            'post' => $post,
        ]);
    }

    #[Route('/{_locale}/admin/post/{id}/edit', name: 'admin_post_edit', requirements: ['_locale' => 'fr|en', 'id' => Requirement::POSITIVE_INT], methods: ['GET', 'POST'])]
    #[IsGranted('edit', subject: 'post')]
    public function edit(Request $request, Post $post, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                $post->setImageFile($imageFile);
            }

            $entityManager->flush();
            $this->addFlash('success', 'Le post a été mis à jour.');

            return $this->redirectToRoute('admin_post_show', ['id' => $post->getId()]);
        }

        return $this->render('admin/blog/edit.html.twig', [
            'post' => $post,
            'form' => $form,
        ]);
    }

    #[Route('/{_locale}/admin/post/{id}/delete', name: 'admin_post_delete', requirements: ['_locale' => 'fr|en', 'id' => Requirement::POSITIVE_INT], methods: ['POST'])]
    #[IsGranted('delete', subject: 'post')]
    public function delete(Request $request, Post $post, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isCsrfTokenValid('delete_post_' . $post->getId(), $request->get('token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('admin_post_index');
        }

        $post->getTags()->clear();
        $entityManager->remove($post);
        $entityManager->flush();

        $this->addFlash('success', 'Le post a été supprimé.');

        return $this->redirectToRoute('admin_post_index');
    }

    #[Route('/{_locale}/admin/post/comment/{commentId}/delete', name: 'admin_comment_delete', requirements: ['_locale' => 'fr|en', 'commentId' => Requirement::POSITIVE_INT], methods: ['POST'])]
    public function commentDelete(
        #[MapEntity(mapping: ['commentId' => 'id'])] Comment $comment,
        EntityManagerInterface $entityManager,
        Request $request
    ): Response {
        if (!$this->isCsrfTokenValid('delete_comment_' . $comment->getId(), $request->get('token'))) {
            $this->addFlash('error', 'Jeton CSRF invalide.');
            return $this->redirectToRoute('admin_post_index');
        }

        $entityManager->remove($comment);
        $entityManager->flush();
        $this->addFlash('success', 'Commentaire supprimé.');

        return $this->redirectToRoute('admin_post_show', ['id' => $comment->getPost()->getId()]);
    }

    #[Route('/{_locale}/admin/profile', name: 'admin_profile', requirements: ['_locale' => 'fr|en'], methods: ['GET', 'POST'])]
    public function profile(#[CurrentUser] User $user, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Profil mis à jour avec succès.');

            return $this->redirectToRoute('admin_profile');
        }

        return $this->render('admin/profile/edit.html.twig', [
            'form' => $form->createView(),
            'user' => $user,
        ]);
    }

    
}
