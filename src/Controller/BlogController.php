<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Entity\Post;
use App\Entity\User;
use App\Event\CommentCreatedEvent;
use App\Form\CommentType;
use App\Pagination\Paginator;
use App\Repository\BookRepository;
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

final class BlogController extends AbstractController
{
    #[Route('/blog', name: 'blog_index', defaults: ['page' => 1, '_format' => 'html'], methods: ['GET'])]
    #[Route('/blog/rss.xml', name: 'blog_rss', defaults: ['page' => 1, '_format' => 'xml'], methods: ['GET'])]
    #[Route('/blog/page/{page}', name: 'blog_index_paginated', defaults: ['_format' => 'html'], requirements: ['page' => '\d+'], methods: ['GET'])]
    #[Route('/blog', name: 'blog_index', methods: ['GET'])]
    public function index(BookRepository $bookRepository): Response
    {
        $books = $bookRepository->findLatest(4);

        return $this->render('blog/index.html.twig', [
            'books' => $books,
        ]);
    }

    #[Route('/blog/rss.xml', name: 'blog_rss', methods: ['GET'])]
    public function rss(BookRepository $bookRepository): Response
    {
        $books = $bookRepository->findLatest(20);

        return $this->render('blog/rss.xml.twig', [
            'books' => $books,
        ]);
    }

    #[Route('/blog/tag/{tagName}', name: 'blog_index_tag', methods: ['GET'])]
    public function indexByTag(
        string $tagName,
        PostRepository $postRepository,
        TagRepository $tagRepository,
        int $page = 1
    ): Response {
        $tag = $tagRepository->findOneBy(['name' => $tagName]);

        if (!$tag) {
            throw $this->createNotFoundException('Tag not found');
        }

        $paginatedResults = $postRepository->findLatest($page, $tag);

        return $this->render('blog/index.html.twig', [
            'paginator'   => $paginatedResults['data'],
            'currentPage' => $paginatedResults['currentPage'],
            'pageCount'   => $paginatedResults['pageCount'],
            'totalItems'  => $paginatedResults['totalItems'],
            'tagName'     => $tagName,
            'pageSize'    => Paginator::PAGE_SIZE,
        ]);
    }

    #[Route('/blog/posts/{slug}', name: 'blog_post', methods: ['GET'])]
    public function postShow(
        #[MapEntity(mapping: ['slug' => 'slug'])] Post $post
    ): Response {
        return $this->render('blog/post_show.html.twig', [
            'post' => $post
        ]);
    }

    #[Route('/blog/comment/{postSlug}/new', name: 'blog_comment_new', requirements: ['postSlug' => Requirement::ASCII_SLUG], methods: ['POST'])]
    #[IsGranted('IS_AUTHENTICATED')]
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

            $eventDispatcher->dispatch(new CommentCreatedEvent($comment));

            return $this->redirectToRoute('blog_post', ['slug' => $post->getSlug()]);
        }

        return $this->render('blog/comment_form_error.html.twig', [
            'post' => $post,
            'form' => $form,
        ]);
    }

    #[Route('/blog/comment/form/{slug}', name: 'blog_comment_form', methods: ['GET'])]
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

    #[Route('/blog/search', name: 'blog_search', methods: ['GET'])]
    public function search(
        Request $request,
        PostRepository $postRepository
    ): Response {
        $query = (string) $request->query->get('q', '');
        $page  = (int) $request->query->get('page', 1);

        $paginatedResults = $postRepository->findBySearchQuery($query, Paginator::PAGE_SIZE, $page);

        return $this->render('blog/search.html.twig', [
            'query'       => $query,
            'posts'       => $paginatedResults['data'],
            'currentPage' => $paginatedResults['currentPage'],
            'pageCount'   => $paginatedResults['pageCount'],
            'totalItems'  => $paginatedResults['totalItems'],
            'pageSize'    => Paginator::PAGE_SIZE,
        ]);
    }
}
