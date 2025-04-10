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
use Symfony\Component\Security\Core\Exception\BadCredentialsException;

/**
 * Controller used to manage current user profile and settings.
 * The #[CurrentUser] attribute tells Symfony to inject the currently logged user.
 */
#[Route('/profile')]
#[IsGranted(User::ROLE_USER)]  // Ensure the user has the proper role to access profile-related actions
final class UserController extends AbstractController
{
    /**
     * Edit user profile (name, email, etc.)
     *
     * @param User $user
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * 
     * @return Response
     */
    #[Route('/edit', name: 'user_edit', methods: ['GET', 'POST'])]
    public function edit(
        #[CurrentUser] User $user,
        Request $request,
        EntityManagerInterface $entityManager,
    ): Response {
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        // Check if form is submitted and valid
        if ($form->isSubmitted() && $form->isValid()) {
            // Persist the changes to the user
            $entityManager->flush();

            // Flash success message
            $this->addFlash('success', 'user.updated_successfully');

            // Redirect to the same page (user profile edit page)
            return $this->redirectToRoute('user_edit', [], Response::HTTP_SEE_OTHER);
        }

        // Render the profile edit form
        return $this->render('user/edit.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }

    /**
     * Change user password.
     *
     * @param User $user
     * @param Request $request
     * @param EntityManagerInterface $entityManager
     * @param Security $security
     * @param UserPasswordHasherInterface $passwordHasher
     * 
     * @return Response
     */
    #[Route('/change-password', name: 'user_change_password', methods: ['GET', 'POST'])]
    public function changePassword(
        #[CurrentUser] User $user,
        Request $request,
        EntityManagerInterface $entityManager,
        Security $security,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        // Create the form for changing password
        $form = $this->createForm(ChangePasswordType::class, $user);
        $form->handleRequest($request);

        // If the password change form is submitted and valid
        if ($form->isSubmitted() && $form->isValid()) {
            // Get the old password from the form (not mapped to the User entity)
            $oldPassword = $form->get('currentPassword')->getData();  // Correct way to access non-mapped data

            // Check if the old password matches the current one
            if (!$passwordHasher->isPasswordValid($user, $oldPassword)) {
                $this->addFlash('error', 'Incorrect current password!');
                return $this->redirectToRoute('user_change_password');
            }

            // Get the new password from the form and hash it
            $newPassword = $form->get('newPassword')->getData();
            $user->setPassword($passwordHasher->hashPassword($user, $newPassword));

            // Persist the updated password
            $entityManager->flush();

            // Flash success message for password change
            $this->addFlash('success', 'user.password_changed_successfully');

            // Log the user out and redirect to the homepage
            return $security->logout(validateCsrfToken: false) ?? $this->redirectToRoute('homepage');
        }

        return $this->render('user/change_password.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
