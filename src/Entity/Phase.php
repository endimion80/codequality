<?php

namespace App\Entity;

use App\Repository\PhaseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PhaseRepository::class)
 */
class Phase
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Intervention::class, mappedBy="phase")
     */
    private $interventions;

    /**
     * @ORM\OneToMany(targetEntity=PhaseLog::class, mappedBy="phase")
     */
    private $phaseLogs;

    /**
     * @ORM\OneToMany(targetEntity=IncidenceOfPhase::class, mappedBy="phase")
     */
    private $incidenceOfPhases;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $asiturCode;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $asiturDescription;

    /**
     * @ORM\ManyToOne(targetEntity=Phase::class, inversedBy="phases")
     */
    private $previousPhase;

    /**
     * @ORM\OneToMany(targetEntity=Phase::class, mappedBy="previousPhase")
     */
    private $phases;

    public function __construct()
    {
        $this->interventions = new ArrayCollection();
        $this->phaseLogs = new ArrayCollection();
        $this->incidenceOfPhases = new ArrayCollection();
        $this->phases = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Intervention[]
     */
    public function getInterventions(): Collection
    {
        return $this->interventions;
    }

    public function addIntervention(Intervention $intervention): self
    {
        if (!$this->interventions->contains($intervention)) {
            $this->interventions[] = $intervention;
            $intervention->setPhase($this);
        }

        return $this;
    }

    public function removeIntervention(Intervention $intervention): self
    {
        if ($this->interventions->contains($intervention)) {
            $this->interventions->removeElement($intervention);
            // set the owning side to null (unless already changed)
            if ($intervention->getPhase() === $this) {
                $intervention->setPhase(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|PhaseLog[]
     */
    public function getPhaseLogs(): Collection
    {
        return $this->phaseLogs;
    }

    public function addPhaseLog(PhaseLog $phaseLog): self
    {
        if (!$this->phaseLogs->contains($phaseLog)) {
            $this->phaseLogs[] = $phaseLog;
            $phaseLog->setPhase($this);
        }

        return $this;
    }

    public function removePhaseLog(PhaseLog $phaseLog): self
    {
        if ($this->phaseLogs->contains($phaseLog)) {
            $this->phaseLogs->removeElement($phaseLog);
            // set the owning side to null (unless already changed)
            if ($phaseLog->getPhase() === $this) {
                $phaseLog->setPhase(null);
            }
        }

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
            $incidenceOfPhase->setPhase($this);
        }

        return $this;
    }

    public function removeIncidenceOfPhase(IncidenceOfPhase $incidenceOfPhase): self
    {
        if ($this->incidenceOfPhases->contains($incidenceOfPhase)) {
            $this->incidenceOfPhases->removeElement($incidenceOfPhase);
            // set the owning side to null (unless already changed)
            if ($incidenceOfPhase->getPhase() === $this) {
                $incidenceOfPhase->setPhase(null);
            }
        }

        return $this;
    }

    public function getAsiturCode(): ?string
    {
        return $this->asiturCode;
    }

    public function setAsiturCode(?string $asiturCode): self
    {
        $this->asiturCode = $asiturCode;

        return $this;
    }

    public function getAsiturDescription(): ?string
    {
        return $this->asiturDescription;
    }

    public function setAsiturDescription(?string $asiturDescription): self
    {
        $this->asiturDescription = $asiturDescription;

        return $this;
    }

    public function getPreviousPhase(): ?self
    {
        return $this->previousPhase;
    }

    public function setPreviousPhase(?self $previousPhase): self
    {
        $this->previousPhase = $previousPhase;

        return $this;
    }

    /**
     * @return Collection|self[]
     */
    public function getPhases(): Collection
    {
        return $this->phases;
    }

    public function addPhase(self $phase): self
    {
        if (!$this->phases->contains($phase)) {
            $this->phases[] = $phase;
            $phase->setPreviousPhase($this);
        }

        return $this;
    }

    public function removePhase(self $phase): self
    {
        if ($this->phases->contains($phase)) {
            $this->phases->removeElement($phase);
            // set the owning side to null (unless already changed)
            if ($phase->getPreviousPhase() === $this) {
                $phase->setPreviousPhase(null);
            }
        }

        return $this;
    }
}
