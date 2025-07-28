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
use Symfony\Component\String\Slugger\SluggerInterface;

#[IsGranted('ROLE_ADMIN')]
class BookController extends AbstractController
{
    #[Route('/admin/book/new', name: 'admin_book_create', methods: ['GET', 'POST'])]
    public function create(
        Request $request,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response {
        $book = new Book();
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $slug = $slugger->slug($book->getTitle())->lower();
            $book->setSlug($slug);

            $entityManager->persist($book);
            $entityManager->flush();

            $this->addFlash('success', 'Livre ajouté avec succès.');
            return $this->redirectToRoute('admin_profile');
        }

        return $this->render('admin/book/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/book/{id}/edit', name: 'admin_book_edit', methods: ['GET', 'POST'])]
    public function edit(
        Book $book,
        Request $request,
        EntityManagerInterface $entityManager,
        SluggerInterface $slugger
    ): Response {
        $form = $this->createForm(BookType::class, $book);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $slug = $slugger->slug($book->getTitle())->lower();
            $book->setSlug($slug);

            $entityManager->flush();

            $this->addFlash('success', 'Livre modifié avec succès.');
            return $this->redirectToRoute('admin_profile');
        }

        return $this->render('admin/book/edit.html.twig', [
            'form' => $form->createView(),
            'book' => $book,
        ]);
    }

    #[Route('/admin/book/{id}/delete', name: 'admin_book_delete', methods: ['POST'])]
    public function delete(
        Book $book,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $submittedToken = $request->get('token');

        if (!$this->isCsrfTokenValid('delete_book_' . $book->getId(), $submittedToken)) {
            $this->addFlash('error', 'Token CSRF invalide.');
            return $this->redirectToRoute('admin_profile');
        }

        $entityManager->remove($book);
        $entityManager->flush();

        $this->addFlash('success', 'Livre supprimé avec succès.');
        return $this->redirectToRoute('admin_profile');
    }
}
