<?php

namespace App\Entity;

use App\Repository\FormulaireProgressionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormulaireProgressionRepository::class)
 */
class FormulaireProgression
{
    public function __construct() {
        $this->activites = new ArrayCollection();
        $this->evaluationObjectifs = new ArrayCollection();
        $this->bilanCompetences = new ArrayCollection();
        $this->objectifDefinition = new ArrayCollection();
        $this->formationsSouhaitees = new ArrayCollection();
        $this->formationsSuivie = new ArrayCollection();
    }

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateEntretien;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $datePrecedentEntretien;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ressentiTravail;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $aimesTuPoste;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $relationsEquipe;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $relationsEntreprise;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentairesQVT;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $missionsPrincipales;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $reussitePoste;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $aimesTuFonctions;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pointsAmeliorations;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $competencesNonUtilisees;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $remarquesActivites;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $evalTravail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vieProPerso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $syntheseCollab;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $syntheseManager;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $signatureCollab;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $signatureManager;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateEntretien(): ?\DateTimeInterface
    {
        return $this->dateEntretien;
    }

    public function setDateEntretien(\DateTimeInterface $dateEntretien): self
    {
        $this->dateEntretien = $dateEntretien;

        return $this;
    }

    public function getDatePrecedentEntretien(): ?\DateTimeInterface
    {
        return $this->datePrecedentEntretien;
    }

    public function setDatePrecedentEntretien(?\DateTimeInterface $datePrecedentEntretien): self
    {
        $this->datePrecedentEntretien = $datePrecedentEntretien;

        return $this;
    }

    public function getRessentiTravail(): ?int
    {
        return $this->ressentiTravail;
    }

    public function setRessentiTravail(int $ressentiTravail): self
    {
        $this->ressentiTravail = $ressentiTravail;

        return $this;
    }

    public function getAimesTuPoste(): ?int
    {
        return $this->aimesTuPoste;
    }

    public function setAimesTuPoste(int $aimesTuPoste): self
    {
        $this->aimesTuPoste = $aimesTuPoste;

        return $this;
    }

    public function getRelationsEquipe(): ?int
    {
        return $this->relationsEquipe;
    }

    public function setRelationsEquipe(int $relationsEquipe): self
    {
        $this->relationsEquipe = $relationsEquipe;

        return $this;
    }

    public function getRelationsEntreprise(): ?int
    {
        return $this->relationsEntreprise;
    }

    public function setRelationsEntreprise(int $relationsEntreprise): self
    {
        $this->relationsEntreprise = $relationsEntreprise;

        return $this;
    }

    public function getCommentairesQVT(): ?string
    {
        return $this->commentairesQVT;
    }

    public function setCommentairesQVT(?string $commentairesQVT): self
    {
        $this->commentairesQVT = $commentairesQVT;

        return $this;
    }

    public function getMissionsPrincipales(): ?string
    {
        return $this->missionsPrincipales;
    }

    public function setMissionsPrincipales(string $missionsPrincipales): self
    {
        $this->missionsPrincipales = $missionsPrincipales;

        return $this;
    }

    public function getReussitePoste(): ?string
    {
        return $this->reussitePoste;
    }

    public function setReussitePoste(string $reussitePoste): self
    {
        $this->reussitePoste = $reussitePoste;

        return $this;
    }

    public function getAimesTuFonctions(): ?string
    {
        return $this->aimesTuFonctions;
    }

    public function setAimesTuFonctions(string $aimesTuFonctions): self
    {
        $this->aimesTuFonctions = $aimesTuFonctions;

        return $this;
    }

    public function getPointsAmeliorations(): ?string
    {
        return $this->pointsAmeliorations;
    }

    public function setPointsAmeliorations(string $pointsAmeliorations): self
    {
        $this->pointsAmeliorations = $pointsAmeliorations;

        return $this;
    }

    public function getCompetencesNonUtilisees(): ?string
    {
        return $this->competencesNonUtilisees;
    }

    public function setCompetencesNonUtilisees(string $competencesNonUtilisees): self
    {
        $this->competencesNonUtilisees = $competencesNonUtilisees;

        return $this;
    }

    public function getRemarquesActivites(): ?string
    {
        return $this->remarquesActivites;
    }

    public function setRemarquesActivites(string $remarquesActivites): self
    {
        $this->remarquesActivites = $remarquesActivites;

        return $this;
    }

    public function getEvalTravail(): ?string
    {
        return $this->evalTravail;
    }

    public function setEvalTravail(string $evalTravail): self
    {
        $this->evalTravail = $evalTravail;

        return $this;
    }

    public function getVieProPerso(): ?string
    {
        return $this->vieProPerso;
    }

    public function setVieProPerso(string $vieProPerso): self
    {
        $this->vieProPerso = $vieProPerso;

        return $this;
    }

    public function getSyntheseCollab(): ?string
    {
        return $this->syntheseCollab;
    }

    public function setSyntheseCollab(string $syntheseCollab): self
    {
        $this->syntheseCollab = $syntheseCollab;

        return $this;
    }

    public function getSyntheseManager(): ?string
    {
        return $this->syntheseManager;
    }

    public function setSyntheseManager(string $syntheseManager): self
    {
        $this->syntheseManager = $syntheseManager;

        return $this;
    }

    public function getSignatureCollab(): ?string
    {
        return  $this->signatureCollab;
    }

    public function setSignatureCollab(string $signatureCollab): self
    {
        $this->signatureCollab = $signatureCollab;

        return $this;
    }

    public function getSignatureManager(): ?string
    {
        return $this->signatureManager;
    }

    public function setSignatureManager(string $signatureManager): self
    {
        $this->signatureManager = $signatureManager;

        return $this;
    }

    /**
     * @ORM\OneToMany(targetEntity="Activites", mappedBy="formulaireProgression", cascade={"persist"})
     */
    private $activites;

    public function getActivites(): Collection
    {
        return $this->activites;
    }
    public function setActivites($activites): self
    {
        $this->activites = $activites;

        return $this;
    }
    public function addActivite(Activites $activite): void
    {
        $activite->setFormulaireProgression($this);
        $this->activites->add($activite);
    }
    public function removeActivite(Activites $activite): void
    {
        $this->activites->removeElement($activite);
    }

    /**
     * @ORM\OneToMany(targetEntity="EvaluationObjectifs", mappedBy="formulaireProgression", cascade={"persist"})
     */
    private $evaluationObjectifs;

    public function getEvaluationObjectifs(): Collection
    {
        return $this->evaluationObjectifs;
    }
    public function setEvaluationObjectifs($evaluationObjectifs): self
    {
        $this->evaluationObjectifs = $evaluationObjectifs;

        return $this;
    }

    public function addEvaluationObjectif(EvaluationObjectifs $evaluationObjectif): void
    {
        $evaluationObjectif->setFormulaireProgression($this);
        $this->evaluationObjectifs->add($evaluationObjectif);
    }
    public function removeEvaluationObjectif(EvaluationObjectifs $evaluationObjectif): void
    {
        $this->evaluationObjectifs->removeElement($evaluationObjectif);
    }

    /**
     * @ORM\OneToMany(targetEntity="FormationsSuivie", mappedBy="formulaireProgression", cascade={"persist"})
     */
    private $formationsSuivie;

    public function getFormationsSuivie(): Collection
    {
        return $this->formationsSuivie;
    }
    public function setFormationsSuivie($formationsSuivie): self
    {
        $this->formationsSuivie = $formationsSuivie;

        return $this;
    }
    /**
     * @ORM\OneToMany(targetEntity="FormationsSouhaitees", mappedBy="formulaireProgression", cascade={"persist"})
     */

    private $formationsSouhaitees;

    public function getFormationsSouhaitees(): Collection
    {
        return $this->formationsSouhaitees;
    }
    public function setFormationsSouhaitees($formationsSouhaitees): self
    {
        $this->formationsSouhaitees = $formationsSouhaitees;

        return $this;
    }
       /**
     * @ORM\OneToMany(targetEntity="ObjectifDefinition", mappedBy="formulaireProgression", cascade={"persist"})
     */

    private $objectifDefinition;

    public function getObjectifDefinition(): Collection
    {
        return $this->objectifDefinition;
    }
    public function setObjectifDefinition($objectifDefinition): self
    {
        $this->objectifDefinition = $objectifDefinition;

        return $this;
    }
        /**
     * @ORM\OneToMany(targetEntity="BilanCompetences", mappedBy="formulaireProgression", cascade={"persist"})
     */
    private $bilanCompetences;

    public function getBilanCompetences(): Collection
    {
        return $this->bilanCompetences;
    }
    public function setBilanCompetences($bilanCompetences): self
    {
        $this->bilanCompetences = $bilanCompetences;

        return $this;
    }

    public function addBilanCompetence(BilanCompetences $bilanCompetence): void
    {
        $bilanCompetence->setFormulaireProgression($this);
        $this->bilanCompetences->add($bilanCompetence);
    }
    public function removeBilanCompetence(BilanCompetences $bilanCompetence): void
    {
        $this->bilanCompetences->removeElement($bilanCompetence);
    }
}
