<?php

namespace App\Entity;

use App\Repository\FormationsSuivieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormationsSuivieRepository::class)
 */
class FormationsSuivie
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $intitule;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $duree;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $objectifsFormation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $attenteFormation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $misEnPratique;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntitule(): ?string
    {
        return $this->intitule;
    }

    public function setIntitule(string $intitule): self
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getObjectifsFormation(): ?string
    {
        return $this->objectifsFormation;
    }

    public function setObjectifsFormation(string $objectifsFormation): self
    {
        $this->objectifsFormation = $objectifsFormation;

        return $this;
    }

    public function getAttenteFormation(): ?string
    {
        return $this->attenteFormation;
    }

    public function setAttenteFormation(string $attenteFormation): self
    {
        $this->attenteFormation = $attenteFormation;

        return $this;
    }

    public function getMisEnPratique(): ?string
    {
        return $this->misEnPratique;
    }

    public function setMisEnPratique(string $misEnPratique): self
    {
        $this->misEnPratique = $misEnPratique;

        return $this;
    }

    public function getFormulaireProgression(): ?FormulaireProgression
    {
        return $this->formulaireProgression;
    }

    public function setFormulaireProgression(?FormulaireProgression $formulaireProgression): self
    {
        $this->formulaireProgression = $formulaireProgression;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity="FormulaireProgression", inversedBy="formationsSuivie")
     */
    private $formulaireProgression;
}
