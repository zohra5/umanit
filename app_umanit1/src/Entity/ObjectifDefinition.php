<?php

namespace App\Entity;

use App\Repository\ObjectifDefinitionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ObjectifDefinitionRepository::class)
 */
class ObjectifDefinition
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
    private $objectifs;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $indicateurDeRealisation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $moyensAMettreEnOeuvre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $delaisDeRealisation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObjectifs(): ?string
    {
        return $this->objectifs;
    }

    public function setObjectifs(string $objectifs): self
    {
        $this->objectifs = $objectifs;

        return $this;
    }

    public function getIndicateurDeRealisation(): ?string
    {
        return $this->indicateurDeRealisation;
    }

    public function setIndicateurDeRealisation(string $indicateurDeRealisation): self
    {
        $this->indicateurDeRealisation = $indicateurDeRealisation;

        return $this;
    }

    public function getMoyensAMettreEnOeuvre(): ?string
    {
        return $this->moyensAMettreEnOeuvre;
    }

    public function setMoyensAMettreEnOeuvre(string $moyensAMettreEnOeuvre): self
    {
        $this->moyensAMettreEnOeuvre = $moyensAMettreEnOeuvre;

        return $this;
    }

    public function getDelaisDeRealisation(): ?string
    {
        return $this->delaisDeRealisation;
    }

    public function setDelaisDeRealisation(string $delaisDeRealisation): self
    {
        $this->delaisDeRealisation = $delaisDeRealisation;

        return $this;
    }


    /**
     * @ORM\ManyToOne(targetEntity="FormulaireProgression", inversedBy="objectifDefinition")
     */
    private $formulaireProgression;

    public function getFormulaireProgression(): ?FormulaireProgression
    {
        return $this->formulaireProgression;
    }

    public function setFormulaireProgression(?FormulaireProgression $formulaireProgression): self
    {
        $this->formulaireProgression = $formulaireProgression;

        return $this;
    }
}

