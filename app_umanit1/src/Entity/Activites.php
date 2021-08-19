<?php

namespace App\Entity;

use App\Repository\ActivitesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActivitesRepository::class)
 */
class Activites
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
    private $realisations;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reussites;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $difficultes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRealisations(): ?string
    {
        return $this->realisations;
    }

    public function setRealisations(string $realisations): self
    {
        $this->realisations = $realisations;

        return $this;
    }

    public function getReussites(): ?string
    {
        return $this->reussites;
    }

    public function setReussites(string $reussites): self
    {
        $this->reussites = $reussites;

        return $this;
    }

    public function getDifficultes(): ?string
    {
        return $this->difficultes;
    }

    public function setDifficultes(string $difficultes): self
    {
        $this->difficultes = $difficultes;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity="FormulaireProgression", inversedBy="activites")
     */

    private $formulaireProgression;


    /**
     * Get the value of formulaireProgression
     */ 
    public function getFormulaireProgression()
    {
        return $this->formulaireProgression;
    }

    /**
     * Set the value of formulaireProgression
     *
     * @return  self
     */ 
    public function setFormulaireProgression($formulaireProgression)
    {
        $this->formulaireProgression = $formulaireProgression;

        return $this;
    }
}
