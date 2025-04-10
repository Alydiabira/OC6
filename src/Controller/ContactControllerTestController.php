<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ContactControllerTestController extends AbstractController
{
    #[Route('/contact/controller/test', name: 'app_contact_controller_test')]
    public function index(): Response
    {
        return $this->render('contact_controller_test/index.html.twig', [
            'controller_name' => 'ContactControllerTestController',
        ]);
    }
}
