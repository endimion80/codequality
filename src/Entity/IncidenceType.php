<?php

namespace App\Entity;

use App\Repository\IncidenceTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IncidenceTypeRepository::class)
 */
class IncidenceType
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
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=IncidenceOfPhase::class, mappedBy="incidenceType")
     */
    private $incidenceOfPhases;

    /**
     * @ORM\OneToMany(targetEntity=InterventionFails::class, mappedBy="incidenceType")
     */
    private $interventionFails;

    public function __construct()
    {
        $this->incidenceOfPhases = new ArrayCollection();
        $this->interventionFails = new ArrayCollection();
    }

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|IncidenceOfPhase[]
     */
    public function getIncidenceOfPhases(): Collection
    {
        return $this->incidenceOfPhases;
    }

    public function addIncidenceOfPhase(IncidenceOfPhase $incidenceOfPhase): self
    {
        if (!$this->incidenceOfPhases->contains($incidenceOfPhase)) {
            $this->incidenceOfPhases[] = $incidenceOfPhase;
            $incidenceOfPhase->setIncidenceType($this);
        }

        return $this;
    }

    public function removeIncidenceOfPhase(IncidenceOfPhase $incidenceOfPhase): self
    {
        if ($this->incidenceOfPhases->contains($incidenceOfPhase)) {
            $this->incidenceOfPhases->removeElement($incidenceOfPhase);
            // set the owning side to null (unless already changed)
            if ($incidenceOfPhase->getIncidenceType() === $this) {
                $incidenceOfPhase->setIncidenceType(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|InterventionFails[]
     */
    public function getInterventionFails(): Collection
    {
        return $this->interventionFails;
    }

    public function addInterventionFail(InterventionFails $interventionFail): self
    {
        if (!$this->interventionFails->contains($interventionFail)) {
            $this->interventionFails[] = $interventionFail;
            $interventionFail->setIncidenceType($this);
        }

        return $this;
    }

    public function removeInterventionFail(InterventionFails $interventionFail): self
    {
        if ($this->interventionFails->contains($interventionFail)) {
            $this->interventionFails->removeElement($interventionFail);
            // set the owning side to null (unless already changed)
            if ($interventionFail->getIncidenceType() === $this) {
                $interventionFail->setIncidenceType(null);
            }
        }

        return $this;
    }
}
