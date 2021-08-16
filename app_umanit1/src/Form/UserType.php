<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class)
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'RH' => 'ROLE_RH',
                    'MANAGER' => 'ROLE_MANAGER',
                    'CONTRIBUTEUR' => 'ROLE_CONTRIBUTEUR'
                ],
                'multiple' => 'true'
            ])
            ->add('password', PasswordType::class,
            [
                'required' => $options['is_create'],
            ])
            ->add('name')
            ->add('firstname')
            ->add('birthday')
            ->add('service')
            ->add('jobTitle')
            ->add('dateHire')
            ->add('accessionDate')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
            'is_create' => true,
        ]);
    }
}
