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
     * @ORM\Column(type="string", length=255)
     */
    private $parLeSalarie;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $objectifsAAtteindre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $parLeManager;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $objectifsAAtteindreManager;

    /**
     * @ORM\ManyToOne(targetEntity=FormulaireProgression::class, inversedBy="formationsSouhaitees")
     * @ORM\JoinColumn(nullable=false)
     */
    private $formulaireProgression;

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
