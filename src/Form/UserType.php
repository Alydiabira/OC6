<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
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
            ->add('username', TextType::class, [
                'label' => 'label.username',
                'disabled' => true,
                'attr' => ['class' => 'form-control rounded-pill']
            ])
            ->add('fullName', TextType::class, [
                'label' => 'label.fullname',
                'attr' => ['class' => 'form-control rounded-pill', 'placeholder' => 'Enter your full name'],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your full name']),
                    new Length(['max' => 255, 'maxMessage' => 'Full name should not be longer than {{ limit }} characters.'])
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'label.email',
                'attr' => ['class' => 'form-control rounded-pill', 'placeholder' => 'Enter your email'],
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your email']),
                    new Email(['message' => 'The email "{{ value }}" is not a valid email.'])
                ]
            ])
            ->add('phoneNumber', TextType::class, [
                'label' => 'label.phone_number',
                'required' => false,
                'attr' => ['class' => 'form-control rounded-pill', 'placeholder' => 'Enter your phone number'],
                'constraints' => [
                    new Length(['max' => 15, 'maxMessage' => 'Phone number should not be longer than {{ limit }} characters.'])
                ]
            ])
            ->add('message', TextareaType::class, [
                'label' => 'label.message',
                'required' => false,
                'attr' => ['class' => 'form-control rounded-pill', 'placeholder' => 'Enter your message here', 'rows' => 4],
            ])
            ->add('plainPassword', PasswordType::class, [
                'label' => 'label.new_password',
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'form-control rounded-pill',
                    'autocomplete' => 'new-password',
                    'placeholder' => 'Enter a new password'
                ],
                'constraints' => [
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        'max' => 4096,
                    ])
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
