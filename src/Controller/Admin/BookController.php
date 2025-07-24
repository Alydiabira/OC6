<?php

namespace App\Controller\Admin;

use App\Entity\Book;
use App\Form\BookType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN')]
class BookController extends AbstractController
{
    // Édition d’un livre
    #[Route('/admin/book/{id}/edit', name: 'admin_book_edit', methods: ['GET', 'POST'])]
    public function edit(Book $book, Request $request, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Livre modifié avec succès.');

            return $this->redirectToRoute('admin_profile');
        }

        return $this->render('admin/book/edit.html.twig', [
            'form' => $form->createView(),
            'book' => $book,
        ]);
    }

    // Suppression d’un livre
    #[Route('/admin/book/{id}/delete', name: 'admin_book_delete', methods: ['POST'])]
    public function delete(Book $book, Request $request, EntityManagerInterface $entityManager): Response
    {
        if (!$this->isCsrfTokenValid('delete_book_' . $book->getId(), $request->get('token'))) {
            return $this->redirectToRoute('admin_profile');
        }

        $entityManager->remove($book);
        $entityManager->flush();
        $this->addFlash('success', 'Livre supprimé avec succès.');

        return $this->redirectToRoute('admin_profile');
    }
}
