<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Post;
use App\Entity\User;
use App\Event\CommentCreatedEvent;
use App\Form\CommentType;
use App\Pagination\Paginator;
use App\Repository\PostRepository;
use App\Repository\TagRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Attribute\MapEntity;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Requirement\Requirement;
use Symfony\Component\Security\Http\Attribute\CurrentUser;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Repository\BookRepository;

/**
 * Controller to manage blog contents in the public part of the site.
 */
#[Route('/{_locale}/blog', name: 'blog_', defaults: ['_locale' => 'fr'])]
final class BlogController extends AbstractController
{
    /**
     * Displays a list of posts with pagination and optional tag filtering.
     */
    #[Route('/', name: 'blog_index', defaults: ['page' => 1, '_format' => 'html'], methods: ['GET'])]
    #[Route('/rss.xml', name: 'blog_rss', defaults: ['page' => 1, '_format' => 'xml'], methods: ['GET'])]
    #[Route('/page/{page}', name: 'blog_index_paginated', defaults: ['_format' => 'html'], requirements: ['page' => '\d+'], methods: ['GET'])]
    public function index(Request $request, int $page, string $_format, PostRepository $postRepository, TagRepository $tagRepository): Response
{
    // Handle tag filtering if provided
    $tag = $request->query->get('tag') ? $tagRepository->findOneBy(['name' => $request->query->get('tag')]) : null;

    // Retrieve paginated posts
    $paginatedResults = $postRepository->findLatest($page, $tag);

    // Extract the paginated data and pagination info
    $postsData = $paginatedResults['data'];
    $currentPage = $paginatedResults['currentPage'];
    $pageCount = $paginatedResults['pageCount'];
    $totalItems = $paginatedResults['totalItems'];
    $pageSize = Paginator::PAGE_SIZE;

    // ✅ ➕ AJOUTE CETTE LIGNE ICI
    $books = $postRepository->findBy([], ['createdAt' => 'DESC'], 4);

    return $this->render('blog/index.' . $_format . '.twig', [
        'paginator' => $postsData,
        'currentPage' => $currentPage,
        'pageCount' => $pageCount,
        'totalItems' => $totalItems,
        'tagName' => $tag?->getName(),
        'pageSize' => $pageSize,
        'books' => $books, // ✅ ➕ PASSE LA VARIABLE À TWIG
    ]);
}

    /**
     * Displays a list of posts filtered by a specific tag.
     */
    #[Route('/tag/{tagName}', name: 'blog_index_tag', methods: ['GET'])]
    public function indexByTag(
        string $tagName, 
        PostRepository $postRepository, 
        TagRepository $tagRepository, 
        int $page = 1
    ): Response {
        // Find the tag by its name
        $tag = $tagRepository->findOneBy(['name' => $tagName]);

        // If the tag is not found, throw an exception
        if (!$tag) {
            throw $this->createNotFoundException('Tag not found');
        }

        // Retrieve paginated posts associated with the found tag
        $paginatedResults = $postRepository->findLatest($page, $tag);

        // Extract the paginated data and pagination info
        $postsData = $paginatedResults['data'];
        $currentPage = $paginatedResults['currentPage'];
        $pageCount = $paginatedResults['pageCount'];
        $totalItems = $paginatedResults['totalItems'];

        // Render the blog index page with filtered posts
        return $this->render('blog/index.html.twig', [
            'paginator' => $postsData,  // Pass the paginated posts here
            'currentPage' => $currentPage,
            'pageCount' => $pageCount,
            'totalItems' => $totalItems,
            'tagName' => $tagName,  // Pass the tag name to the view
            'pageSize' => Paginator::PAGE_SIZE, // Pass pageSize to the view
        ]);
    }

    /**
     * Displays an individual post.
     */
    #[Route('/posts/{slug}', name: 'blog_post', methods: ['GET'])]
    public function postShow(
        #[MapEntity(mapping: ['slug' => 'slug'])] Post $post
    ): Response {
        // Vérifiez si le post existe
        if (!$post) {
            throw $this->createNotFoundException('Post not found');
        }

        // Passez le post à la vue
        return $this->render('blog/post_show.html.twig', [
            'post' => $post
        ]);
    }

    /**
     * Handles the creation of a new comment.
     */
    #[Route('/comment/{postSlug}/new', name: 'comment_new', requirements: ['postSlug' => Requirement::ASCII_SLUG], methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED')]  // Ensure the user is authenticated
    public function commentNew(
        #[CurrentUser] User $user,
        Request $request,
        #[MapEntity(mapping: ['postSlug' => 'slug'])] Post $post,
        EventDispatcherInterface $eventDispatcher,
        EntityManagerInterface $entityManager
    ): Response {
        $comment = new Comment();
        $comment->setAuthor($user);
        $post->addComment($comment);

        $form = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($comment);
            $entityManager->flush();

            // Dispatch an event after saving the comment
            $eventDispatcher->dispatch(new CommentCreatedEvent($comment));

            return $this->redirectToRoute('blog_post', ['slug' => $post->getSlug()], Response::HTTP_SEE_OTHER);
        }

        // If the form is not valid, return the form with errors
        return $this->render('blog/comment_form_error.html.twig', [
            'post' => $post,
            'form' => $form,
        ]);
    }

    #[Route('/comment/form/{slug}', name: 'comment_form', methods: ['GET'])]
    #[IsGranted('IS_AUTHENTICATED_FULLY')]
    public function commentForm(
        #[CurrentUser] User $user,
        #[MapEntity(mapping: ['slug' => 'slug'])] Post $post
    ): Response {
        $comment = new Comment();
        $comment->setAuthor($user);
        $post->addComment($comment);
    
        $form = $this->createForm(CommentType::class, $comment);
    
        return $this->render('blog/_comment_form.html.twig', [
            'form' => $form->createView(),
            'post' => $post,
        ]);
    }

    /**
     * Handles search functionality for blog posts.
     */
    #[Route('/search', name: 'blog_search', methods: ['GET'])]
    public function search(Request $request, PostRepository $postRepository): Response
    {
        $query = (string) $request->query->get('q', '');
        $page = (int) $request->query->get('page', 1);

        // Obtenir les résultats paginés
        $paginatedResults = $postRepository->findBySearchQuery($query, Paginator::PAGE_SIZE, $page);

        $posts = $paginatedResults['data'];
        $currentPage = $paginatedResults['currentPage'];
        $pageCount = $paginatedResults['pageCount'];
        $totalItems = $paginatedResults['totalItems'];

        // Passer pageSize à la vue
        $pageSize = Paginator::PAGE_SIZE;

        return $this->render('blog/search.html.twig', [
            'query' => $query,
            'posts' => $posts,
            'currentPage' => $currentPage,
            'pageCount' => $pageCount,
            'totalItems' => $totalItems,
            'pageSize' => $pageSize,  // Passer pageSize à la vue
        ]);
    }

 


}
