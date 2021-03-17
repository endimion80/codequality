<?php

namespace App\Entity;

use App\Repository\VhTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VhTypeRepository::class)
 */
class VhType
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
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=VhModel::class, mappedBy="vhType")
     */
    private $vhModels;

    /**
     * @ORM\OneToMany(targetEntity=Intervention::class, mappedBy="vhType")
     */
    private $interventions;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $vehicleType;

    /**
     * @ORM\OneToMany(targetEntity=VhSectionPart::class, mappedBy="vhType")
     */
    private $vhSectionParts;

    public function __construct()
    {
        $this->vhModels = new ArrayCollection();
        $this->interventions = new ArrayCollection();
        $this->vhSectionParts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|VhModel[]
     */
    public function getVhModels(): Collection
    {
        return $this->vhModels;
    }

    public function addVhModel(VhModel $vhModel): self
    {
        if (!$this->vhModels->contains($vhModel)) {
            $this->vhModels[] = $vhModel;
            $vhModel->setVhType($this);
        }

        return $this;
    }

    public function removeVhModel(VhModel $vhModel): self
    {
        if ($this->vhModels->contains($vhModel)) {
            $this->vhModels->removeElement($vhModel);
            // set the owning side to null (unless already changed)
            if ($vhModel->getVhType() === $this) {
                $vhModel->setVhType(null);
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
            $intervention->setVhType($this);
        }

        return $this;
    }

    public function removeIntervention(Intervention $intervention): self
    {
        if ($this->interventions->contains($intervention)) {
            $this->interventions->removeElement($intervention);
            // set the owning side to null (unless already changed)
            if ($intervention->getVhType() === $this) {
                $intervention->setVhType(null);
            }
        }

        return $this;
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

    public function getVehicleType(): ?string
    {
        return $this->vehicleType;
    }

    public function setVehicleType(string $vehicleType): self
    {
        $this->vehicleType = $vehicleType;

        return $this;
    }

    /**
     * @return Collection|VhSectionPart[]
     */
    public function getVhSectionParts(): Collection
    {
        return $this->vhSectionParts;
    }

    public function addVhSectionPart(VhSectionPart $vhSectionPart): self
    {
        if (!$this->vhSectionParts->contains($vhSectionPart)) {
            $this->vhSectionParts[] = $vhSectionPart;
            $vhSectionPart->setVhType($this);
        }

        return $this;
    }

    public function removeVhSectionPart(VhSectionPart $vhSectionPart): self
    {
        if ($this->vhSectionParts->contains($vhSectionPart)) {
            $this->vhSectionParts->removeElement($vhSectionPart);
            // set the owning side to null (unless already changed)
            if ($vhSectionPart->getVhType() === $this) {
                $vhSectionPart->setVhType(null);
            }
        }

        return $this;
    }
}
