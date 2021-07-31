<?php

namespace App\Form;

use App\Entity\BilanCompetences;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BilanCompetencesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('competencesBilan')
            ->add('evaluationBilan')
            ->add('commentaireBilan')
            ->add('actionsBilan')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => BilanCompetences::class,
        ]);
    }
}
