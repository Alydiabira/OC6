<?php

namespace App\Factory;

use App\Entity\Liste;
use Zenstruck\Foundry\ModelFactory;
use Zenstruck\Foundry\Proxy;
use Zenstruck\Foundry\RepositoryProxy;

/**
 * @extends ModelFactory<Liste>
 */
final class ListeFactory extends ModelFactory
{
    protected function getDefaults(): array
    {
        return [
            'name' => self::faker()->word(),
            'email' => self::faker()->email(),
            'createdAt' => self::faker()->dateTimeBetween('-1 year', 'now'),
        ];
    }

    protected function initialize(): self
    {
        // Ajout d'exemples d'initialisation si nécessaire
        return $this
            ->afterInstantiate(function(Liste $liste): void {
                // Exemple : ajustements spécifiques après la création de l'objet
                if (strlen($liste->getName()) < 3) {
                    $liste->setName('Nom par défaut');
                }
            });
    }

    protected static function getClass(): string
    {
        return Liste::class;
    }
}