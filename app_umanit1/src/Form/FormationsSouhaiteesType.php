<?php

namespace App\Form;

use App\Entity\FormationsSouhaitees;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormationsSouhaiteesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('parLeSalarie')
            ->add('objectifsAAtteindre')
            ->add('parLeManager')
            ->add('objectifsAAtteindreManager')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FormationsSouhaitees::class,
        ]);
    }
}
