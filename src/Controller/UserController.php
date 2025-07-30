<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ChangePasswordType;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\CurrentUser;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/profile')]
#[IsGranted(User::ROLE_USER)]
final class UserController extends AbstractController
{
    #[Route('/edit', name: 'user_edit', methods: ['GET', 'POST'])]
    public function edit(
        #[CurrentUser] User $user,
        Request $request,
        EntityManagerInterface $entityManager
    ): Response {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('profileImageFile')->getData();
            if ($imageFile) {
                $user->setProfileImageFile($imageFile); // Méthode à définir dans l'entité User
            }

            $entityManager->flush();
            $this->addFlash('success', 'Profil mis à jour avec succès.');

            return $this->redirectToRoute('user_edit', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/change-password', name: 'user_change_password', methods: ['GET', 'POST'])]
    public function changePassword(
        #[CurrentUser] User $user,
        Request $request,
        EntityManagerInterface $entityManager,
        Security $security,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $form = $this->createForm(ChangePasswordType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $oldPassword = $form->get('currentPassword')->getData();

            if (!$passwordHasher->isPasswordValid($user, $oldPassword)) {
                $this->addFlash('error', 'Mot de passe actuel incorrect.');
                return $this->redirectToRoute('user_change_password');
            }

            $newPassword = $form->get('newPassword')->getData();
            $user->setPassword($passwordHasher->hashPassword($user, $newPassword));

            $entityManager->flush();
            $this->addFlash('success', 'Mot de passe mis à jour avec succès.');

            return $security->logout(validateCsrfToken: false) ?? $this->redirectToRoute('homepage');
        }

        return $this->render('user/change_password.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
