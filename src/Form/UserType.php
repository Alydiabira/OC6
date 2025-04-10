<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;

final class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Champ username (en lecture seule)
            ->add('username', TextType::class, [
                'label' => 'label.username',
                'disabled' => true,  // Le champ est en lecture seule
                'attr' => ['class' => 'form-control']  // Classe CSS pour le style
            ])
            // Champ fullName
            ->add('fullName', TextType::class, [
                'label' => 'label.fullname',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter your full name'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your full name'
                    ]),
                    new Length([
                        'max' => 255,
                        'maxMessage' => 'Full name should not be longer than {{ limit }} characters.'
                    ])
                ]
            ])
            // Champ email
            ->add('email', EmailType::class, [
                'label' => 'label.email',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter your email'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your email'
                    ]),
                    new Email([
                        'message' => 'The email "{{ value }}" is not a valid email.'
                    ])
                ]
            ])
            // Champ phoneNumber (nouveau champ)
            ->add('phoneNumber', TextType::class, [
                'label' => 'label.phone_number',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter your phone number'],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your phone number'
                    ]),
                    new Length([
                        'max' => 15,
                        'maxMessage' => 'Phone number should not be longer than {{ limit }} characters.'
                    ])
                ]
            ])
            // Champ message (nouveau champ)
            ->add('message', TextareaType::class, [
                'label' => 'label.message',
                'attr' => ['class' => 'form-control', 'placeholder' => 'Enter your message here', 'rows' => 5],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter your message'
                    ])
                ]
            ])
            // Bouton de soumission du formulaire
            ->add('save', SubmitType::class, [
                'label' => 'submit.save',
                'attr' => ['class' => 'btn btn-primary']  // Classe CSS pour le bouton
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class, // Lier ce formulaire à l'entité User
        ]);
    }
}
