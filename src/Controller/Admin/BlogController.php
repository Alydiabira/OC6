<?php

namespace App\Controller\Admin;

use App\Entity\Post;
use App\Entity\User;
use App\Entity\Comment;
use App\Form\PostType;
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
use App\Form\UserType;

/**
 * Controller used to manage blog contents in the backend.
 */
#[Route('/{_locale}/admin/post', name: 'admin_', defaults: ['_locale' => 'fr'])]
#[IsGranted(User::ROLE_ADMIN)]
final class BlogController extends AbstractController
{
    /**
     * Lists all Post entities.
     */
    #[Route('/', name: 'admin_index', methods: ['GET'])]
    #[Route('/', name: 'admin_post_index', methods: ['GET'])]
    public function index(
        #[CurrentUser] User $user,
        PostRepository $posts,
    ): Response {
        $authorPosts = $posts->findBy(['author' => $user], ['publishedAt' => 'DESC']);

        return $this->render('admin/blog/index.html.twig', ['posts' => $authorPosts]);
    }

    /**
     * Creates a new Post entity.
     */
    #[Route('/new', name: 'admin_post_new', methods: ['GET', 'POST'])]
    public function new(
        #[CurrentUser] User $user,
        Request $request,
        EntityManagerInterface $entityManager,
    ): Response {
        $post = new Post();
        $post->setAuthor($user);
    
        $form = $this->createForm(PostType::class, $post)
            ->add('saveAndCreateNew', SubmitType::class);
    
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion de l'image
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

    /**
     * Finds and displays a Post entity.
     */
    #[Route('/{id}', name: 'admin_post_show', requirements: ['id' => Requirement::POSITIVE_INT], methods: ['GET'])]
    public function show(Post $post): Response
    {
        $this->denyAccessUnlessGranted(PostVoter::SHOW, $post, 'Posts can only be shown to their authors.');

        return $this->render('admin/blog/show.html.twig', [
            'post' => $post,
        ]);
    }

    /**
     * Displays a form to edit an existing Post entity.
     */
    #[Route('/{id}/edit', name: 'admin_post_edit', requirements: ['id' => Requirement::POSITIVE_INT], methods: ['GET', 'POST'])]
    #[IsGranted('edit', subject: 'post', message: 'Posts can only be edited by their authors.')]
    public function edit(Request $request, Post $post, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PostType::class, $post);
        $form->handleRequest($request);
    
        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion de l'image
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                $post->setImageFile($imageFile);
            }
    
            $entityManager->flush();
            $this->addFlash('success', 'post.updated_successfully');
    
            return $this->redirectToRoute('admin_post_edit', ['id' => $post->getId()], Response::HTTP_SEE_OTHER);
        }
    
        return $this->render('admin/blog/edit.html.twig', [
            'post' => $post,
            'form' => $form,
        ]);
    }

    /**
     * Deletes a Post entity.
     */
    #[Route('/{id}/delete', name: 'admin_post_delete', requirements: ['id' => Requirement::POSITIVE_INT], methods: ['POST'])]
    #[IsGranted('delete', subject: 'post')]
    public function delete(Request $request, Post $post, EntityManagerInterface $entityManager): Response
    {
        $token = $request->get('token');
        
        if (!$this->isCsrfTokenValid('delete', $token)) {
            return $this->redirectToRoute('admin_post_index', [], Response::HTTP_SEE_OTHER);
        }

        $post->getTags()->clear();
        $entityManager->remove($post);
        $entityManager->flush();

        $this->addFlash('success', 'post.deleted_successfully');

        return $this->redirectToRoute('admin_post_index', [], Response::HTTP_SEE_OTHER);
    }


/**
 * Deletes a Comment entity (Only for admin users).
 */
#[Route('/comment/{commentId}/delete', name: 'admin_comment_delete', requirements: ['commentId' => Requirement::POSITIVE_INT], methods: ['POST'])]
#[IsGranted('ROLE_ADMIN')]  // Ensure only admin can delete comments
public function commentDelete(
    #[MapEntity(mapping: ['commentId' => 'id'])] Comment $comment,  // Automatically fetch the Comment entity using the commentId
    EntityManagerInterface $entityManager,
    Request $request
): Response {
    // CSRF protection
    $token = $request->get('token');
    if (!$this->isCsrfTokenValid('delete_comment', $token)) {
        return $this->redirectToRoute('admin_post_index');
    }

    // Vérification si le commentaire existe
    if ($comment) {
        // Suppression du commentaire
        $entityManager->remove($comment);
        $entityManager->flush();

        // Message de succès
        $this->addFlash('success', 'comment.deleted_successfully');
    } else {
        // Message d'erreur si le commentaire n'est pas trouvé
        $this->addFlash('error', 'comment.not_found');
    }

    // Redirection vers la page de l'article
    return $this->redirectToRoute('admin_post_show', ['id' => $comment->getPost()->getId()]);
}

#[Route('/profile', name: 'admin_profile', methods: ['GET', 'POST'])]
#[IsGranted('ROLE_ADMIN')]
public function profile(
    #[CurrentUser] User $user,
    Request $request,
    EntityManagerInterface $entityManager
): Response {
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
