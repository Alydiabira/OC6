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
    // Liste des articles de l'utilisateur
    #[Route('/admin/post/', name: 'admin_post_index', methods: ['GET'])]
    public function index(#[CurrentUser] User $user, PostRepository $posts): Response
    {
        $authorPosts = $posts->findBy(['author' => $user], ['publishedAt' => 'DESC']);

        return $this->render('admin/blog/index.html.twig', ['posts' => $authorPosts]);
    }

    // Création d'un nouvel article
    #[Route('/admin/post/new', name: 'admin_post_new', methods: ['GET', 'POST'])]
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

            $this->addFlash('success', 'post.created_successfully');

            return $this->redirectToRoute('admin_post_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/blog/new.html.twig', [
            'post' => $post,
            'form' => $form,
        ]);
    }

    // Affichage d'un article
    #[Route('/admin/post/{id}', name: 'admin_post_show', requirements: ['id' => Requirement::POSITIVE_INT], methods: ['GET'])]
    public function show(Post $post): Response
    {
        $this->denyAccessUnlessGranted(PostVoter::SHOW, $post);

        return $this->render('admin/blog/show.html.twig', ['post' => $post]);
    }

    // Édition d'un article
    #[Route('/admin/post/{id}/edit', name: 'admin_post_edit', requirements: ['id' => Requirement::POSITIVE_INT], methods: ['GET', 'POST'])]
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
            $this->addFlash('success', 'post.updated_successfully');

            return $this->redirectToRoute('admin_post_show', ['id' => $post->getId()]);
        }

        return $this->render('admin/blog/edit.html.twig', ['post' => $post, 'form' => $form]);
    }

    // Suppression d'un article
    #[Route('/admin/post/{id}/delete', name: 'admin_post_delete', requirements: ['id' => Requirement::POSITIVE_INT], methods: ['POST'])]
    #[IsGranted('delete', subject: 'post')]
    public function delete(Request $request, Post $post, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isCsrfTokenValid('delete_post_' . $post->getId(), $request->get('token'))) {
            return $this->redirectToRoute('admin_post_index');
        }

        $post->getTags()->clear();
        $entityManager->remove($post);
        $entityManager->flush();

        $this->addFlash('success', 'post.deleted_successfully');

        return $this->redirectToRoute('admin_post_index');
    }

    // Suppression d'un commentaire
    #[Route('/admin/post/comment/{commentId}/delete', name: 'admin_comment_delete', requirements: ['commentId' => Requirement::POSITIVE_INT], methods: ['POST'])]
    #[IsGranted('ROLE_ADMIN')]
    public function commentDelete(
        #[MapEntity(mapping: ['commentId' => 'id'])] Comment $comment,
        EntityManagerInterface $entityManager,
        Request $request
    ): Response {
        if (!$this->isCsrfTokenValid('delete_comment_' . $comment->getId(), $request->get('token'))) {
            return $this->redirectToRoute('admin_post_index');
        }

        $entityManager->remove($comment);
        $entityManager->flush();
        $this->addFlash('success', 'comment.deleted_successfully');

        return $this->redirectToRoute('admin_post_show', ['id' => $comment->getPost()->getId()]);
    }

    // Édition du profil administrateur
    #[Route('/admin/post/profile', name: 'admin_profile', methods: ['GET', 'POST'])]
    #[IsGranted('ROLE_ADMIN')]
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
