<?php

namespace App\Entity;

use App\Repository\VhBrandRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VhBrandRepository::class)
 */
class VhBrand
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
     * @ORM\OneToMany(targetEntity=VhModel::class, mappedBy="vhBrand")
     */
    private $vhModels;

    /**
     * @ORM\OneToMany(targetEntity=Intervention::class, mappedBy="vhBrand")
     */
    private $interventions;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $code;

    public function __construct()
    {
        $this->vhModels = new ArrayCollection();
        $this->interventions = new ArrayCollection();
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
            $vhModel->setVhBrand($this);
        }

        return $this;
    }

    public function removeVhModel(VhModel $vhModel): self
    {
        if ($this->vhModels->contains($vhModel)) {
            $this->vhModels->removeElement($vhModel);
            // set the owning side to null (unless already changed)
            if ($vhModel->getVhBrand() === $this) {
                $vhModel->setVhBrand(null);
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
            $intervention->setVhBrand($this);
        }

        return $this;
    }

    public function removeIntervention(Intervention $intervention): self
    {
        if ($this->interventions->contains($intervention)) {
            $this->interventions->removeElement($intervention);
            // set the owning side to null (unless already changed)
            if ($intervention->getVhBrand() === $this) {
                $intervention->setVhBrand(null);
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
