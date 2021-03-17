<?php

namespace App\Entity;

use App\Repository\SinisterTypeExtensionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SinisterTypeExtensionRepository::class)
 */
class SinisterTypeExtension
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
     * @ORM\ManyToOne(targetEntity=SinisterType::class, inversedBy="sinisterTypeExtensions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $sinisterType;

    /**
     * @ORM\OneToMany(targetEntity=FailureType::class, mappedBy="sinisterExtensionType")
     */
    private $failureTypes;

    /**
     * @ORM\OneToMany(targetEntity=Intervention::class, mappedBy="sinisterTypeExtension")
     */
    private $interventions;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $code;

    
    public function __construct()
    {
        $this->failureTypes = new ArrayCollection();
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

    public function getSinisterTypeId(): ?SinisterType
    {
        return $this->sinisterType;
    }

    public function setSinisterTypeId(?SinisterType $sinisterType): self
    {
        $this->sinisterType = $sinisterType;

        return $this;
    }

    /**
     * @return Collection|FailureType[]
     */
    public function getFailureTypes(): Collection
    {
        return $this->failureTypes;
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
            $intervention->setSinisterTypeExtension($this);
        }

        return $this;
    }

    public function removeIntervention(Intervention $intervention): self
    {
        if ($this->interventions->contains($intervention)) {
            $this->interventions->removeElement($intervention);
            // set the owning side to null (unless already changed)
            if ($intervention->getSinisterTypeExtension() === $this) {
                $intervention->setSinisterTypeExtension(null);
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
