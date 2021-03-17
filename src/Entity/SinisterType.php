<?php

namespace App\Entity;

use App\Repository\SinisterTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SinisterTypeRepository::class)
 */
class SinisterType
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
     * @ORM\OneToMany(targetEntity=SinisterTypeExtension::class, mappedBy="sinisterType")
     */
    private $sinisterTypeExtensions;

    /**
     * @ORM\OneToMany(targetEntity=Intervention::class, mappedBy="sinisterType")
     */
    private $interventions;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $code;

    public function __construct()
    {
        $this->sinisterTypeExtensions = new ArrayCollection();
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

    /**
     * @return Collection|SinisterTypeExtension[]
     */
    public function getSinisterTypeExtensions(): Collection
    {
        return $this->sinisterTypeExtensions;
    }

    public function addSinisterTypeExtension(SinisterTypeExtension $sinisterTypeExtension): self
    {
        if (!$this->sinisterTypeExtensions->contains($sinisterTypeExtension)) {
            $this->sinisterTypeExtensions[] = $sinisterTypeExtension;
            $sinisterTypeExtension->setSinisterTypeId($this);
        }

        return $this;
    }

    public function removeSinisterTypeExtension(SinisterTypeExtension $sinisterTypeExtension): self
    {
        if ($this->sinisterTypeExtensions->contains($sinisterTypeExtension)) {
            $this->sinisterTypeExtensions->removeElement($sinisterTypeExtension);
            // set the owning side to null (unless already changed)
            if ($sinisterTypeExtension->getSinisterTypeId() === $this) {
                $sinisterTypeExtension->setSinisterTypeId(null);
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
            $intervention->setSinisterType($this);
        }

        return $this;
    }

    public function removeIntervention(Intervention $intervention): self
    {
        if ($this->interventions->contains($intervention)) {
            $this->interventions->removeElement($intervention);
            // set the owning side to null (unless already changed)
            if ($intervention->getSinisterType() === $this) {
                $intervention->setSinisterType(null);
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
