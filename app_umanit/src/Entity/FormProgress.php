<?php

namespace App\Entity;

use App\Repository\FormProgressRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FormProgressRepository::class)
 */
class FormProgress
{

    public function __construct() {
        $this->objectives = new ArrayCollection();
    }

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateInterview;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateInterview(): ?\DateTimeInterface
    {
        return $this->dateInterview;
    }

    public function setDateInterview(\DateTimeInterface $dateInterview): self
    {
        $this->dateInterview = $dateInterview;

        return $this;
    }

    /**
     * @ORM\OneToMany(targetEntity="Objective", mappedBy="formProgress")
     */
    private $objectives;

    public function getObjectives(): Collection
    {
        return $this->objectives;
    }

    public function setObjectives($objectives): self
    {
        $this->objectives = $objectives;

        return $this;
    }
}
