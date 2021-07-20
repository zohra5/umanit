<?php

namespace App\Entity;

use App\Repository\CompetenceResultRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CompetenceResultRepository::class)
 */
class CompetenceResult
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
    private $competence;

    /**
     * @ORM\Column(type="integer")
     */
    private $evaluation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $commentaire;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $action_a_mener;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompetence(): ?string
    {
        return $this->competence;
    }

    public function setCompetence(string $competence): self
    {
        $this->competence = $competence;

        return $this;
    }

    public function getEvaluation(): ?int
    {
        return $this->evaluation;
    }

    public function setEvaluation(int $evaluation): self
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(string $commentaire): self
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getActionAMener(): ?string
    {
        return $this->action_a_mener;
    }

    public function setActionAMener(string $action_a_mener): self
    {
        $this->action_a_mener = $action_a_mener;

        return $this;
    }

    /**
     * @ORM\ManyToOne(targetEntity="FormProgress", inversedBy="competencesResult")
     */

    private $formProgress;
}
