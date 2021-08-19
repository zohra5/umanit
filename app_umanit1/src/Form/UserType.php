<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
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
                    'Administrateur' => 'ROLE_RH',
                    'Manager' => 'ROLE_MANAGER',
                    'Contributeur' => 'ROLE_CONTRIBUTEUR',
                ],
                'expanded' => true,
                'multiple' => true,
                'required' => true,
            ])
            ->add('password', PasswordType::class,
            [
                'required' => $options['is_create'],
            ])
            ->add('name')
            ->add('firstname')
            ->add('birthday', DateType::class, [
                'html5' => true,
                'widget' => 'single_text',
            ])
            ->add('service')
            ->add('jobTitle')
            ->add('dateHire', DateType::class, [
                'html5' => true,
                'widget' => 'single_text',
            ])
            ->add('accessionDate', DateType::class, [
                'html5' => true,
                'widget' => 'single_text',
            ])
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
