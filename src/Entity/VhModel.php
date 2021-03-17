<?php

namespace App\Entity;

use App\Repository\VhModelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VhModelRepository::class)
 */
class VhModel
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
     * @ORM\ManyToOne(targetEntity=VhType::class, inversedBy="vhModels")
     * @ORM\JoinColumn(nullable=false)
     */
    private $vhType;

    /**
     * @ORM\ManyToOne(targetEntity=VhBrand::class, inversedBy="vhModels")
     * @ORM\JoinColumn(nullable=false)
     */
    private $vhBrand;

    /**
     * @ORM\OneToMany(targetEntity=Intervention::class, mappedBy="vhModel")
     */
    private $interventions;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $code;

    public function __construct()
    {
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

    public function getVhType(): ?VhType
    {
        return $this->vhType;
    }

    public function setVhType(?VhType $vhType): self
    {
        $this->vhType = $vhType;

        return $this;
    }

    public function getVhBrand(): ?VhBrand
    {
        return $this->vhBrand;
    }

    public function setVhBrand(?VhBrand $vhBrand): self
    {
        $this->vhBrand = $vhBrand;

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
            $intervention->setVhModel($this);
        }

        return $this;
    }

    public function removeIntervention(Intervention $intervention): self
    {
        if ($this->interventions->contains($intervention)) {
            $this->interventions->removeElement($intervention);
            // set the owning side to null (unless already changed)
            if ($intervention->getVhModel() === $this) {
                $intervention->setVhModel(null);
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
