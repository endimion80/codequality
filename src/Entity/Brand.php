<?php

namespace App\Entity;

use App\Repository\BrandRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BrandRepository::class)
 */
class Brand
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Model::class, mappedBy="brand")
     */
    private $models;

    /**
     * @ORM\OneToMany(targetEntity=Crane::class, mappedBy="brand")
     */
    private $cranes;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $code;

    public function __construct()
    {
        $this->models = new ArrayCollection();
        $this->cranes = new ArrayCollection();
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
     * @return Collection|Model[]
     */
    public function getModels(): Collection
    {
        return $this->models;
    }

    public function addModel(Model $model): self
    {
        if (!$this->models->contains($model)) {
            $this->models[] = $model;
            $model->setBrand($this);
        }

        return $this;
    }

    public function removeModel(Model $model): self
    {
        if ($this->models->contains($model)) {
            $this->models->removeElement($model);
            // set the owning side to null (unless already changed)
            if ($model->getBrand() === $this) {
                $model->setBrand(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Crane[]
     */
    public function getCranes(): Collection
    {
        return $this->cranes;
    }

    public function addCrane(Crane $crane): self
    {
        if (!$this->cranes->contains($crane)) {
            $this->cranes[] = $crane;
            $crane->setBrand($this);
        }

        return $this;
    }

    public function removeCrane(Crane $crane): self
    {
        if ($this->cranes->contains($crane)) {
            $this->cranes->removeElement($crane);
            // set the owning side to null (unless already changed)
            if ($crane->getBrand() === $this) {
                $crane->setBrand(null);
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
