<?php

namespace App\Form;

use App\Entity\FormationsSuivie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormationSuivieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('intitule')
            ->add('duree')
            ->add('objectifsFormation')
            ->add('attenteFormation')
            ->add('misEnPratique')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FormationsSuivie::class,
        ]);
    }
}
