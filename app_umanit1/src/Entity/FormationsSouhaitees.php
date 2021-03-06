<?php

namespace App\Entity;

use App\Repository\FormationsSouhaiteesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormationsSouhaiteesRepository::class)
 */
class FormationsSouhaitees
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $parLeSalarie;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $objectifsAAtteindre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $parLeManager;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $objectifsAAtteindreManager;

  

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParLeSalarie(): ?string
    {
        return $this->parLeSalarie;
    }

    public function setParLeSalarie(string $parLeSalarie): self
    {
        $this->parLeSalarie = $parLeSalarie;

        return $this;
    }

    public function getObjectifsAAtteindre(): ?string
    {
        return $this->objectifsAAtteindre;
    }

    public function setObjectifsAAtteindre(string $objectifsAAtteindre): self
    {
        $this->objectifsAAtteindre = $objectifsAAtteindre;

        return $this;
    }

    public function getParLeManager(): ?string
    {
        return $this->parLeManager;
    }

    public function setParLeManager(string $parLeManager): self
    {
        $this->parLeManager = $parLeManager;

        return $this;
    }

    public function getObjectifsAAtteindreManager(): ?string
    {
        return $this->objectifsAAtteindreManager;
    }

    public function setObjectifsAAtteindreManager(string $objectifsAAtteindreManager): self
    {
        $this->objectifsAAtteindreManager = $objectifsAAtteindreManager;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity="FormulaireProgression", inversedBy="formationsSouhaitees")
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
