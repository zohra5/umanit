<?php

namespace App\Entity;

use App\Repository\BilanCompetencesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BilanCompetencesRepository::class)
 */
class BilanCompetences
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
    private $competencesBilan;

    /**
     * @ORM\Column(type="integer")
     */
    private $evaluationBilan;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commentaireBilan;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $actionsBilan;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompetencesBilan(): ?string
    {
        return $this->competencesBilan;
    }

    public function setCompetencesBilan(string $competencesBilan): self
    {
        $this->competencesBilan = $competencesBilan;

        return $this;
    }

    public function getEvaluationBilan(): ?int
    {
        return $this->evaluationBilan;
    }

    public function setEvaluationBilan(int $evaluationBilan): self
    {
        $this->evaluationBilan = $evaluationBilan;

        return $this;
    }

    public function getCommentaireBilan(): ?string
    {
        return $this->commentaireBilan;
    }

    public function setCommentaireBilan(string $commentaireBilan): self
    {
        $this->commentaireBilan = $commentaireBilan;

        return $this;
    }

    public function getActionsBilan(): ?string
    {
        return $this->actionsBilan;
    }

    public function setActionsBilan(string $actionsBilan): self
    {
        $this->actionsBilan = $actionsBilan;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity="FormulaireProgression", inversedBy="bilanCompetences")
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
