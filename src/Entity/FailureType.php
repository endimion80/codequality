<?php

namespace App\Entity;

use App\Repository\FailureTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FailureTypeRepository::class)
 */
class FailureType
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
     * @ORM\ManyToOne(targetEntity=SinisterTypeExtension::class, inversedBy="failureTypes")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sinisterExtensionType;

    /**
     * @ORM\OneToMany(targetEntity=FailureCauseType::class, mappedBy="failureType")
     */
    private $failureCauseTypes;

    /**
     * @ORM\OneToMany(targetEntity=Intervention::class, mappedBy="failureType")
     */
    private $interventions;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $code;

    public function __construct()
    {
        $this->failureCauseTypes = new ArrayCollection();
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

    public function getSinisterExtensionTypeId(): ?SinisterTypeExtension
    {
        return $this->sinisterExtensionType_id;
    }

    public function setSinisterExtensionTypeId(?SinisterTypeExtension $sinisterExtensionType): self
    {
        $this->sinisterExtensionType = $sinisterExtensionType;

        return $this;
    }

    /**
     * @return Collection|FailureCauseType[]
     */
    public function getFailureCauseTypes(): Collection
    {
        return $this->failureCauseTypes;
    }

    public function addFailureCauseType(FailureCauseType $failureCauseType): self
    {
        if (!$this->failureCauseTypes->contains($failureCauseType)) {
            $this->failureCauseTypes[] = $failureCauseType;
            $failureCauseType->setFailureTypeId($this);
        }

        return $this;
    }

    public function removeFailureCauseType(FailureCauseType $failureCauseType): self
    {
        if ($this->failureCauseTypes->contains($failureCauseType)) {
            $this->failureCauseTypes->removeElement($failureCauseType);
            // set the owning side to null (unless already changed)
            if ($failureCauseType->getFailureTypeId() === $this) {
                $failureCauseType->setFailureTypeId(null);
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
            $intervention->setFailureType($this);
        }

        return $this;
    }

    public function removeIntervention(Intervention $intervention): self
    {
        if ($this->interventions->contains($intervention)) {
            $this->interventions->removeElement($intervention);
            // set the owning side to null (unless already changed)
            if ($intervention->getFailureType() === $this) {
                $intervention->setFailureType(null);
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
