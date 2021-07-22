<?php

namespace App\Entity;

use App\Repository\FormulaireProgressionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormulaireProgressionRepository::class)
 */
class FormulaireProgression
{
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
     * @ORM\Column(type="integer")
     */
    private $feelingWork;

    /**
     * @ORM\Column(type="integer")
     */
    private $aimesTuPoste;

    /**
     * @ORM\Column(type="integer")
     */
    private $relationsEquipe;

    /**
     * @ORM\Column(type="integer")
     */
    private $relationsEntreprise;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $commentairesQVT;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $missionsPrincipales;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reussitePoste;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $aimesTuFonctions;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pointsAmeliorations;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $competencesNonUtilisees;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $remarquesActivites;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $evalTravail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $vieProPerso;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $syntheseCollab;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $syntheseManager;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $signatureCollab;

    /**
     * @ORM\Column(type="string", length=255)
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

    public function getFeelingWork(): ?int
    {
        return $this->feelingWork;
    }

    public function setFeelingWork(int $feelingWork): self
    {
        $this->feelingWork = $feelingWork;

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

}