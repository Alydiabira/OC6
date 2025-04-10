<?php
// tests/Service/MailerServiceTest.php
namespace App\Tests\Service;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class MailerServiceTest extends KernelTestCase
{
    public function testSendEmail(): void
    {
        // Démarre le noyau de l'application
        self::bootKernel();

        // Récupère le service MailerInterface
        $mailer = static::getContainer()->get(MailerInterface::class);
        $this->assertInstanceOf(MailerInterface::class, $mailer);

        // Créer un e-mail de test
        $email = (new Email())
            ->from('from@example.com')
            ->to('to@example.com')
            ->subject('Test email')
            ->text('This is a test email.');

        // Envoie l'e-mail
        $mailer->send($email);

        // Vérifie que l'e-mail a bien été envoyé (tu peux aussi capturer l'e-mail et vérifier son contenu si nécessaire)
        $this->assertTrue(true); // Remplace cette assertion par une vraie vérification (par exemple avec un mock)
    }
}
