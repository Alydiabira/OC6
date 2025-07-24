<?php

namespace App\Controller;

use App\Repository\BookRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
#[Route('/{_locale}/', name: 'homepage', requirements: ['_locale' => 'fr|en'], defaults: ['_locale' => 'fr'])]
public function index(BookRepository $bookRepository): Response
{
    $books = $bookRepository->findLatest(4);

    return $this->render('default/homepage.html.twig', [
        'books' => $books,
    ]);
}

}
