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

    public function getIndicateurRealisation(): ?string
    {
        return $this->indicateurRealisation;
    }

    public function setIndicateurRealisation(string $indicateurRealisation): self
    {
        $this->indicateurRealisation = $indicateurRealisation;

        return $this;
    }

    public function getMoyensOeuvre(): ?string
    {
        return $this->moyensOeuvre;
    }

    public function setMoyensOeuvre(string $moyensOeuvre): self
    {
        $this->moyensOeuvre = $moyensOeuvre;

        return $this;
    }

    public function getDelaisRealisation(): ?string
    {
        return $this->delaisRealisation;
    }

    public function setDelaisRealisation(string $delaisRealisation): self
    {
        $this->delaisRealisation = $delaisRealisation;

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
     * @ORM\ManyToOne(targetEntity="FormulaireProgression", inversedBy="objectifDefinition")
     */
    private $formulaireProgression;
}

