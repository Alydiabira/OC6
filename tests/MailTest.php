<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use App\Service\MailerService; // Exemple d'un service de messagerie
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailTest extends KernelTestCase
{
    public function testMailerService(): void
    {
        // Démarre le noyau de l'application
        $kernel = self::bootKernel();

        // Vérifie que l'environnement est bien 'test'
        $this->assertSame('test', $kernel->getEnvironment());

        // Récupère le service MailerService
        $mailerService = static::getContainer()->get(MailerService::class);
        $this->assertInstanceOf(MailerService::class, $mailerService); // Vérifie que le service existe et est de type MailerService

        // Si tu as un service comme MailerInterface
        $mailer = static::getContainer()->get(MailerInterface::class);
        $this->assertInstanceOf(MailerInterface::class, $mailer);

        // Exemple d'envoi d'un e-mail via le service de messagerie (en test, tu ne veux pas réellement envoyer un e-mail, donc tu peux "simuler" cet envoi)
        $email = (new Email())
            ->from('from@example.com')
            ->to('to@example.com')
            ->subject('Test email')
            ->text('This is a test email.');

        // Simule l'envoi d'un e-mail
        $mailer->send($email);

        // Vérifie que l'email a bien été envoyé (ici, tu pourrais utiliser un mock ou un spy pour vérifier si la méthode send() a été appelée)
        $this->assertTrue(true); // Remplace cette assertion par une vraie vérification (ex : mock de l'email)
    }
}
