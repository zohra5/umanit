<?php

namespace App\Form;


use App\Entity\FormationsSuivie;
use App\Entity\ObjectifDefinition;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

use App\Entity\Activites;
use App\Entity\EvaluationObjectifs;
use App\Entity\FormulaireProgression;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormulaireProgressionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('dateEntretien', DateType::class, [
                'html5' => true,
                'widget' => 'single_text'
            ])
            ->add('datePrecedentEntretien', DateType::class, [
                'html5' => true,
                'widget' => 'single_text'
            ])
            ->add('ressentiTravail',  ChoiceType::class, 
            [
                'choices' => [
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                    '6' => 6,
                    '7' => 7,
                    '8' => 8,
                    '9' => 9,
                    '10' => 10
                ],
                'expanded' => true
            ])

            ->add('aimesTuPoste',  ChoiceType::class, 
            [
                'choices' => [
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                    '6' => 6,
                    '7' => 7,
                    '8' => 8,
                    '9' => 9,
                    '10' => 10
                ],
                'expanded' => true
            ])
            ->add('relationsEquipe',  ChoiceType::class, 
            [
                'choices' => [
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                    '6' => 6,
                    '7' => 7,
                    '8' => 8,
                    '9' => 9,
                    '10' => 10
                ],
                'expanded' => true
            ])
            ->add('relationsEntreprise',  ChoiceType::class, 
            [
                'choices' => [
                    '1' => 1,
                    '2' => 2,
                    '3' => 3,
                    '4' => 4,
                    '5' => 5,
                    '6' => 6,
                    '7' => 7,
                    '8' => 8,
                    '9' => 9,
                    '10' => 10
                ],
                'expanded' => true
            ])
            ->add('commentairesQVT', TextareaType::class)
            ->add('missionsPrincipales', TextareaType::class)
            ->add('activites', CollectionType::class, [
                'entry_type' => ActivitesType::class,
                'entry_options' => ['label' => false],
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
            ])
            ->add('evaluationObjectifs', CollectionType::class, [
                'entry_type' => EvaluationObjectifsType::class,
                'entry_options' => ['label' => false],
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
            ])
            ->add('reussitePoste', TextareaType::class)
            ->add('aimesTuFonctions', TextareaType::class)
            ->add('pointsAmeliorations', TextareaType::class)
            ->add('bilanCompetences', CollectionType::class, [
                'entry_type' => BilanCompetencesType::class,
                'entry_options' => ['label' => false],
                'allow_add' => true,
                'allow_delete' => true,
                'by_reference' => false,
            ])
            ->add('competencesNonUtilisees', TextareaType::class)
            ->add('objectifDefinition', CollectionType::class, [
                "entry_type"=>ObjectifDefinitionType::class,
                "entry_options"=>["label"=>false],
                "allow_add"=>true,
                "allow_delete"=>true]
                )/**GAB */
            ->add("formationsSuivie", CollectionType::class, [
                "entry_type"=>FormationsSuivieType::class,
                "entry_options"=>["label"=>false],
                "allow_add"=>true,
                "allow_delete"=>true]
                )/**GAB */
            ->add('formationsSouhaitees', CollectionType::class, [
                "entry_type"=>FormationsSouhaiteesType::class,
                "entry_options"=>["label"=>false],
                "allow_add"=>true,
                "allow_delete"=>true]
                )/**GAB */
            ->add('reussitePoste')
            ->add('aimesTuFonctions')
            ->add('pointsAmeliorations')
            ->add('remarquesActivites', TextareaType::class)
            ->add('evalTravail', TextareaType::class)
            ->add('vieProPerso', TextareaType::class)
            ->add('syntheseCollab')
            ->add('syntheseManager')
            ->add('signatureCollab')
            ->add('signatureManager')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => FormulaireProgression::class,
        ]);
    }
}
