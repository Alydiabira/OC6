<?php

namespace App\Controller;

use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BookController extends AbstractController
{
    // 📚 Liste des livres avec pagination
    #[Route('/{_locale}/livres', name: 'book_index', defaults: ['_locale' => 'fr'], methods: ['GET'])]
    public function showBooks(Request $request, BookRepository $bookRepository): Response
    {
        $page = max(1, (int) $request->query->get('page', 1));
        $limit = 8;

        $books = $bookRepository->findPaginated($page, $limit);
        $totalItems = $bookRepository->count([]);
        $pageCount = ceil($totalItems / $limit);

        return $this->render('book/index.html.twig', [
            'books' => $books,
            'currentPage' => $page,
            'pageCount' => $pageCount,
            'totalItems' => $totalItems,
            'pageSize' => $limit,
        ]);
    }

    // 🔍 Recherche par titre ou auteur
    #[Route('/{_locale}/livres/recherche', name: 'book_search', defaults: ['_locale' => 'fr'], methods: ['GET'])]
    public function searchBooks(Request $request, BookRepository $bookRepository): Response
    {
        $query = $request->query->get('q', '');
        $books = $bookRepository->searchByTitleOrAuthor($query);

        return $this->render('book/index.html.twig', [
            'books' => $books,
            'query' => $query,
        ]);
    }

    // 🏠 Page d’accueil non utilisée (optionnelle)
    #[Route('/book', name: 'app_book', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('book/index.html.twig', [
            'controller_name' => 'BookController',
            'books' => [], // nécessaire si ton template utilise books
        ]);
    }
}
