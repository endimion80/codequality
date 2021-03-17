<?php

namespace App\Entity;

use App\Repository\InterventionFailsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InterventionFailsRepository::class)
 */
class InterventionFails
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Intervention::class, inversedBy="interventionFails")
     */
    private $intervention;

    /**
     * @ORM\ManyToOne(targetEntity=InterventionProblemType::class, inversedBy="interventionFails")
     */
    private $interventionProblemType;

    /**
     * @ORM\ManyToOne(targetEntity=InterventionFailureType::class, inversedBy="interventionFails")
     */
    private $interventionFailureType;

    /**
     * @ORM\ManyToOne(targetEntity=IncidenceType::class, inversedBy="interventionFails")
     */
    private $incidenceType;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntervention(): ?Intervention
    {
        return $this->intervention;
    }

    public function setIntervention(?Intervention $intervention): self
    {
        $this->intervention = $intervention;

        return $this;
    }

    public function getInterventionProblemType(): ?InterventionProblemType
    {
        return $this->interventionProblemType;
    }

    public function setInterventionProblemType(?InterventionProblemType $interventionProblemType): self
    {
        $this->interventionProblemType = $interventionProblemType;

        return $this;
    }

    public function getInterventionFailureType(): ?InterventionFailureType
    {
        return $this->interventionFailureType;
    }

    public function setInterventionFailureType(?InterventionFailureType $interventionFailureType): self
    {
        $this->interventionFailureType = $interventionFailureType;

        return $this;
    }

    public function getIncidenceType(): ?IncidenceType
    {
        return $this->incidenceType;
    }

    public function setIncidenceType(?IncidenceType $incidenceType): self
    {
        $this->incidenceType = $incidenceType;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }
}
