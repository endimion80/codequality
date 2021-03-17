<?php

namespace App\Entity;

use App\Repository\FailureCauseTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FailureCauseTypeRepository::class)
 */
class FailureCauseType
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=FailureType::class, inversedBy="failureCauseTypes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $failureType;

    /**
     * @ORM\OneToMany(targetEntity=RISCause::class, mappedBy="failureCauseType")
     */
    private $RISCauses;

    /**
     * @ORM\OneToMany(targetEntity=Intervention::class, mappedBy="failureCauseType")
     */
    private $interventions;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $code;

    public function __construct()
    {
        $this->RISCauses = new ArrayCollection();
        $this->interventions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getFailureTypeId(): ?FailureType
    {
        return $this->failureType;
    }

    public function setFailureTypeId(?FailureType $failureType): self
    {
        $this->failureType = $failureType;

        return $this;
    }

    /**
     * @return Collection|RISCause[]
     */
    public function getRISCauses(): Collection
    {
        return $this->RISCauses;
    }

    public function addRISCause(RISCause $rISCause): self
    {
        if (!$this->RISCauses->contains($rISCause)) {
            $this->RISCauses[] = $rISCause;
            $rISCause->setFailureCauseTypeId($this);
        }

        return $this;
    }

    public function removeRISCause(RISCause $rISCause): self
    {
        if ($this->RISCauses->contains($rISCause)) {
            $this->RISCauses->removeElement($rISCause);
            // set the owning side to null (unless already changed)
            if ($rISCause->getFailureCauseTypeId() === $this) {
                $rISCause->setFailureCauseTypeId(null);
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
            $intervention->setFailureCauseType($this);
        }

        return $this;
    }

    public function removeIntervention(Intervention $intervention): self
    {
        if ($this->interventions->contains($intervention)) {
            $this->interventions->removeElement($intervention);
            // set the owning side to null (unless already changed)
            if ($intervention->getFailureCauseType() === $this) {
                $intervention->setFailureCauseType(null);
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
}
