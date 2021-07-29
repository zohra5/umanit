<?php

namespace App\Form;

use App\Entity\ObjectifDefinition;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ObjectifDefinitionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('objectifs')
            ->add('indicateurDeRealisation')
            ->add('moyensAMettreEnOeuvre')
            ->add('delaisDeRealisation')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ObjectifDefinition::class,
        ]);
    }
}
