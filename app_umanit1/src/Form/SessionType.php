<?php

namespace App\Form;

use App\Entity\Session;
use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SessionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('formulaire', ChoiceType::class, [
            'choices' => [
                'Professionnel' => 'Professionnel',
                'Progression' => 'Progression',
            ],
            'expanded' => true,
            'multiple' => true,
            'required' => true,
        ])
        ->add('startDate', DateType::class, [
            'html5' => true,
            'widget' => 'single_text',
        ])
        ->add('endDate', DateType::class, [
            'html5' => true,
            'widget' => 'single_text',
        ])
        ->add('contributor', EntityType::class, [
                'class' => User::class,
                'query_builder' => function (UserRepository $ur) {
                    return $ur->createQueryBuilder('u')
                        ->where('u.id = :id')
                        ->setParameter('id', 2)
                        ->orderBy('u.firstname', 'ASC');
                },
                'choice_label' => function($user) {
                    $firstname = $user->getFirstname();
                    $fullname =  $firstname . " " . $user->getName();
                    return $fullname; },
                'expanded' => true,    
                'multiple' => true,
                'required' => true,
                
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Session::class,
        ]);
    }
}
