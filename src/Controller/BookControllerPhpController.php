<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class BookControllerPhpController extends AbstractController
{
    #[Route('/book/controller/php', name: 'app_book_controller_php')]
    public function index(): Response
    {
        return $this->render('book_controller_php/index.html.twig', [
            'controller_name' => 'BookControllerPhpController',
        ]);
    }
}
