<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class RestrictedWordsValidator extends ConstraintValidator
{
    private array $restrictedWords;

    public function __construct(array $restrictedWords = [])
    {
        $this->restrictedWords = $restrictedWords;
    }

    public function validate($value, Constraint $constraint): void
    {
        /* @var $constraint \App\Validator\RestrictedWords */

        // Si la valeur est vide, aucune validation n'est nécessaire
        if (null === $value || '' === $value) {
            return;
        }

        // Parcours de la liste des mots restreints
        foreach ($this->restrictedWords as $restrictedWord) {
            // Si le mot restreint est trouvé dans la valeur, une violation est ajoutée
            if (stripos($value, $restrictedWord) !== false) {
                $this->context->buildViolation($constraint->message)
                    ->setParameter('{{ word }}', $restrictedWord)  // Remplace le paramètre {{ word }}
                    ->addViolation();
                return;
            }
        }
    }
}
