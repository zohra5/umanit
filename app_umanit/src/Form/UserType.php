<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email')
            ->add('roles', ChoiceType::class, [
                'choices' => [
                    'ADMIN' => 'ROLE_ADMIN',
                    'RH' => 'ROLE_RH',
                    'CONTRIBUTEUR' => 'ROLE_CONTRIBUTOR'
                ],
                'multiple' => 'true'
            ])
            ->add('password')
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
        ]);
    }
}
