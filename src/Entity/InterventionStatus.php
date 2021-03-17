<?php

namespace App\Entity;

use App\Repository\InterventionStatusRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InterventionStatusRepository::class)
 */
class InterventionStatus
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $color;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $backgroundColor;

    /**
     * @ORM\OneToMany(targetEntity=CancellationType::class, mappedBy="interventionStatus")
     */
    private $cancellationTypes;

    /**
     * @ORM\OneToMany(targetEntity=Intervention::class, mappedBy="interventionStatus")
     */
    private $interventions;

    /**
     * @ORM\OneToMany(targetEntity=InterventionLog::class, mappedBy="interventionStatus")
     */
    private $interventionLogs;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $codeAsitur;

    public function __construct()
    {
        $this->cancellationTypes = new ArrayCollection();
        $this->interventions = new ArrayCollection();
        $this->interventionLogs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getBackgroundColor(): ?string
    {
        return $this->backgroundColor;
    }

    public function setBackgroundColor(?string $backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * @return Collection|CancellationType[]
     */
    public function getCancellationTypes(): Collection
    {
        return $this->cancellationTypes;
    }

    public function addCancellationType(CancellationType $cancellationType): self
    {
        if (!$this->cancellationTypes->contains($cancellationType)) {
            $this->cancellationTypes[] = $cancellationType;
            $cancellationType->setInterventionStatus($this);
        }

        return $this;
    }

    public function removeCancellationType(CancellationType $cancellationType): self
    {
        if ($this->cancellationTypes->contains($cancellationType)) {
            $this->cancellationTypes->removeElement($cancellationType);
            // set the owning side to null (unless already changed)
            if ($cancellationType->getInterventionStatus() === $this) {
                $cancellationType->setInterventionStatus(null);
            }
        }

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
            $intervention->setInterventionStatus($this);
        }

        return $this;
    }

    public function removeIntervention(Intervention $intervention): self
    {
        if ($this->interventions->contains($intervention)) {
            $this->interventions->removeElement($intervention);
            // set the owning side to null (unless already changed)
            if ($intervention->getInterventionStatus() === $this) {
                $intervention->setInterventionStatus(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|InterventionLog[]
     */
    public function getInterventionLogs(): Collection
    {
        return $this->interventionLogs;
    }

    public function addInterventionLog(InterventionLog $interventionLog): self
    {
        if (!$this->interventionLogs->contains($interventionLog)) {
            $this->interventionLogs[] = $interventionLog;
            $interventionLog->setInterventionStatus($this);
        }

        return $this;
    }

    public function removeInterventionLog(InterventionLog $interventionLog): self
    {
        if ($this->interventionLogs->contains($interventionLog)) {
            $this->interventionLogs->removeElement($interventionLog);
            // set the owning side to null (unless already changed)
            if ($interventionLog->getInterventionStatus() === $this) {
                $interventionLog->setInterventionStatus(null);
            }
        }

        return $this;
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

    public function getCodeAsitur(): ?string
    {
        return $this->codeAsitur;
    }

    public function setCodeAsitur(string $codeAsitur): self
    {
        $this->codeAsitur = $codeAsitur;

        return $this;
    }
}
