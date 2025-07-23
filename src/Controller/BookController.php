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
 #[Route('/livres', name: 'book_index', methods: ['GET'])]
public function showBooks(Request $request, BookRepository $bookRepository): Response
{
    $page = max(1, (int) $request->query->get('page', 1));
    $limit = 8;

    $paginated = $bookRepository->findPaginated($page, $limit);

    return $this->render('book/index.html.twig', [
        'books' => $paginated['data'],
        'currentPage' => $paginated['currentPage'],
        'pageCount' => $paginated['pageCount'],
        'totalItems' => $paginated['totalItems'],
        'pageSize' => $limit,
    ]);
}



    // 🔍 Recherche par titre ou auteur
    #[Route('/livres/recherche', name: 'book_search', methods: ['GET'])]
    public function searchBooks(Request $request, BookRepository $bookRepository): Response
    {
        $query = trim($request->query->get('q', ''));

        // Assure-toi que BookRepository::searchByTitleOrAuthor() existe
        $books = $query ? $bookRepository->searchByTitleOrAuthor($query) : [];

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
            'books' => [],
        ]);
    }
    // 📖 Détail d’un livre
#[Route('/livres/{slug}', name: 'book_show', methods: ['GET'])]
public function show(BookRepository $bookRepository, string $slug): Response
{
    $book = $bookRepository->findOneBy(['slug' => $slug]);

    if (!$book) {
        throw $this->createNotFoundException("Livre non trouvé.");
    }

    return $this->render('book/show.html.twig', [
        'book' => $book,
    ]);
}

}
