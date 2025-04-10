<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MailController extends AbstractController
{
    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer)
    {
        $this->mailer = $mailer;
    }

    // Route pour envoyer un email depuis un formulaire de contact
    #[Route('/contact', name: 'contact')]
    public function send(Request $request): Response
    {
        // Créer un nouvel objet Contact
        $contact = new Contact();

        // Créer et manipuler le formulaire
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        // Si le formulaire est soumis et valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Récupère l'adresse email de l'expéditeur depuis les paramètres
            $emailSender = $this->getParameter('app.notifications.email_sender');

            try {
                // Création de l'email avec les données du formulaire
                $email = (new Email())
                    ->from($emailSender)          // Adresse de l'expéditeur (récupérée des paramètres)
                    ->to('admin@example.com')     // Adresse du destinataire (admin)
                    ->subject('Nouveau message de contact')
                    ->text("Nom: " . $contact->getName() . "\nEmail: " . $contact->getEmail() . "\nMessage: " . $contact->getMessage());

                // Envoi de l'email via le service Symfony Mailer
                $this->mailer->send($email);

                // Ajout d'un message flash de succès
                $this->addFlash('success', 'Votre message a été envoyé !');
            } catch (\Exception $e) {
                // En cas d'erreur, ajout du message d'erreur
                $this->addFlash('error', 'Une erreur est survenue lors de l\'envoi du message : ' . $e->getMessage());
                // Log the error message for further debugging
                $this->get('logger')->error('Error sending email: ' . $e->getMessage());
            }

            // Rediriger vers la page de contact après l'envoi de l'email
            return $this->redirectToRoute('contact');
        }

        // Retourne une vue du formulaire de contact si ce n'est pas une requête POST ou si le formulaire est invalide
        return $this->render('contact/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
