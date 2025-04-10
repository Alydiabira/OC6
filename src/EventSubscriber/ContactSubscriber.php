<?php


// src/EventSubscriber/ContactSubscriber.php
namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\Event\PreSubmitEvent;

class ContactSubscriber implements EventSubscriberInterface
{
    // Méthode pour gérer l'événement de pré-soumission du formulaire
    public function onFormPreSubmit(PreSubmitEvent $event): void
    {
        // Logique à exécuter avant la soumission du formulaire
        // Par exemple, tu peux accéder aux données du formulaire ici :
        $data = $event->getData();
        // Modifier les données si nécessaire
    }

    // Déclaration des événements auxquels ce Subscriber est abonné
    public static function getSubscribedEvents(): array
    {
        return [
            // L'événement que nous écoutons : 'form.pre_submit'
            'form.pre_submit' => 'onFormPreSubmit',
        ];
    }
}
