<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Security\Core\Validator\Constraints\UserPassword;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

/**
 * Defines the form used to change user's password.
 */
final class ChangePasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // Password field for current password
        $builder
            ->add('currentPassword', PasswordType::class, [
                'constraints' => [
                    new UserPassword(), // This validates the current password
                ],
                'label' => 'label.current_password',
                'mapped' => false,  // Not mapped to the User entity
                'attr' => [
                    'autocomplete' => 'off',
                ],
            ])
            // Repeated field for new password
            ->add('newPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'constraints' => [
                    new NotBlank(),
                    new Length(min: 5, max: 128),
                ],
                'first_options' => [
                    'label' => 'label.new_password',
                    'attr' => ['autocomplete' => 'off'],
                ],
                'second_options' => [
                    'label' => 'label.new_password_confirm',
                    'attr' => ['autocomplete' => 'off'],
                ],
                'mapped' => false,  // Not mapped to the User entity
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,  // Ensure data is correctly mapped
        ]);
    }
}
