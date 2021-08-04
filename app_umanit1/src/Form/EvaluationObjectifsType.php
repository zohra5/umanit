<?php

namespace App\Form;

use App\Entity\EvaluationObjectifs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EvaluationObjectifsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('objectifsEval')
            ->add('realisationLvlEval')
            ->add('moyensEval')
            ->add('commentCollabEval')
            ->add('commentManagerEval')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => EvaluationObjectifs::class,
        ]);
    }
}
