<?php

namespace App\Entity;

use App\Repository\IncidenceOfPhaseRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IncidenceOfPhaseRepository::class)
 */
class IncidenceOfPhase
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $code;

    /**
     * @ORM\ManyToOne(targetEntity=Phase::class, inversedBy="incidenceOfPhases")
     */
    private $phase;

    /**
     * @ORM\ManyToOne(targetEntity=IncidenceType::class, inversedBy="incidenceOfPhases")
     */
    private $incidenceType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getPhase(): ?Phase
    {
        return $this->phase;
    }

    public function setPhase(?Phase $phase): self
    {
        $this->phase = $phase;

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
}
