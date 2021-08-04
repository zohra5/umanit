<?php

namespace App\Entity;

use App\Repository\EvaluationObjectifsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EvaluationObjectifsRepository::class)
 */
class EvaluationObjectifs
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
    private $objectifsEval;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $realisationLvlEval;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $moyensEval;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commentCollabEval;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commentManagerEval;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getObjectifsEval(): ?string
    {
        return $this->objectifsEval;
    }

    public function setObjectifsEval(string $objectifsEval): self
    {
        $this->objectifsEval = $objectifsEval;

        return $this;
    }

    public function getRealisationLvlEval(): ?string
    {
        return $this->realisationLvlEval;
    }

    public function setRealisationLvlEval(string $realisationLvlEval): self
    {
        $this->realisationLvlEval = $realisationLvlEval;

        return $this;
    }

    public function getMoyensEval(): ?string
    {
        return $this->moyensEval;
    }

    public function setMoyensEval(string $moyensEval): self
    {
        $this->moyensEval = $moyensEval;

        return $this;
    }

    public function getCommentCollabEval(): ?string
    {
        return $this->commentCollabEval;
    }

    public function setCommentCollabEval(string $commentCollabEval): self
    {
        $this->commentCollabEval = $commentCollabEval;

        return $this;
    }

    public function getCommentManagerEval(): ?string
    {
        return $this->commentManagerEval;
    }

    public function setCommentManagerEval(string $commentManagerEval): self
    {
        $this->commentManagerEval = $commentManagerEval;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity="FormulaireProgression", inversedBy="evaluationObjectifs")
     */
    private $formulaireProgression;
}
