<?php

namespace App\Form;

use App\Entity\FormationsSuivie;
use App\Entity\FormulaireProgression;
use App\Entity\ObjectifDefinition;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormulaireProgressionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('dateEntretien')
            ->add('datePrecedentEntretien')
            ->add('feelingWork')
            ->add('aimesTuPoste')
            ->add('relationsEquipe')
            ->add('relationsEntreprise')
            ->add('commentairesQVT')
            ->add('missionsPrincipales')
            ->add('reussitePoste')
            ->add('aimesTuFonctions')
            ->add('pointsAmeliorations')
            ->add('competencesNonUtilisees')
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
            ->add('formationSouhaitees', CollectionType::class, [
                "entry_type"=>FormationSouhaiteesType::class,
                "entry_options"=>["label"=>false],
                "allow_add"=>true,
                "allow_delete"=>true]
                )/**GAB */
            ->add('remarquesActivites')
            ->add('evalTravail')
            ->add('vieProPerso')
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
