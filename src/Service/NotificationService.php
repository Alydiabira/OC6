<?php

// src/Service/NotificationService.php

namespace App\Service;

// use Minishlink\WebPush\WebPush;
// use Minishlink\WebPush\Subscription;

// class NotificationService
// {
//     private string $vapidPrivateKey;
//     private string $vapidPublicKey;

//     public function __construct(string $vapidPrivateKey, string $vapidPublicKey)
//     {
//         $this->vapidPrivateKey = $vapidPrivateKey;
//         $this->vapidPublicKey = $vapidPublicKey;
//     }

//     public function sendNotification($subscription)
//     {
//         $webPush = new WebPush([
//             'VAPID' => [
//                 'subject' => 'mailto:your-email@example.com',
//                 'publicKey' => $this->vapidPublicKey,
//                 'privateKey' => $this->vapidPrivateKey,
//             ]
//         ]);

//         // Créer l'objet de souscription
//         $subscription = Subscription::create($subscription);

//         // Envoyer la notification
//         $webPush->sendNotification($subscription, 'Message de notification push');
//     }
// }

use Symfony\Component\HttpFoundation\Session\SessionInterface;

class NotificationService
{
    private $session;

    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }

    public function addNotification(string $message)
    {
        // Utiliser la session pour ajouter une notification
        $this->session->getFlashBag()->add('notice', $message);
    }

}