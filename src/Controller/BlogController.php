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

#[Route('/{_locale}/blog', name: 'blog_', defaults: ['_locale' => 'fr'])]
final class BlogController extends AbstractController
{
    #[Route('/', name: 'index', defaults: ['page' => 1, '_format' => 'html'], methods: ['GET'])]
    #[Route('/rss.xml', name: 'rss', defaults: ['page' => 1, '_format' => 'xml'], methods: ['GET'])]
    #[Route('/page/{page}', name: 'index_paginated', defaults: ['_format' => 'html'], requirements: ['page' => '\d+'], methods: ['GET'])]
    public function index(
        Request $request,
        int $page,
        string $_format,
        PostRepository $postRepository,
        TagRepository $tagRepository
    ): Response {
        $tag = $request->query->get('tag') ? $tagRepository->findOneBy(['name' => $request->query->get('tag')]) : null;

        $paginatedResults = $postRepository->findLatest($page, $tag);

        return $this->render('blog/index.' . $_format . '.twig', [
            'paginator'    => $paginatedResults['data'],
            'currentPage'  => $paginatedResults['currentPage'],
            'pageCount'    => $paginatedResults['pageCount'],
            'totalItems'   => $paginatedResults['totalItems'],
            'pageSize'     => Paginator::PAGE_SIZE,
            'tagName'      => $tag?->getName(),
            'books'        => $postRepository->findBy([], ['createdAt' => 'DESC'], 4), // à adapter si Book existe
        ]);
    }

    #[Route('/tag/{tagName}', name: 'index_tag', methods: ['GET'])]
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

    #[Route('/posts/{slug}', name: 'post', methods: ['GET'])]
    public function postShow(
        #[MapEntity(mapping: ['slug' => 'slug'])] Post $post
    ): Response {
        return $this->render('blog/post_show.html.twig', [
            'post' => $post
        ]);
    }

    #[Route('/comment/{postSlug}/new', name: 'comment_new', requirements: ['postSlug' => Requirement::ASCII_SLUG], methods: ['POST'])]
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

    #[Route('/search', name: 'search', methods: ['GET'])]
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