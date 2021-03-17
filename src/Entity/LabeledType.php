<?php

namespace App\Entity;

use App\Repository\LabeledTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LabeledTypeRepository::class)
 */
class LabeledType
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Crane::class, mappedBy="labeledType")
     */
    private $cranes;

    public function __construct()
    {
        $this->cranes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

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
            $crane->setLabeledType($this);
        }

        return $this;
    }

    public function removeCrane(Crane $crane): self
    {
        if ($this->cranes->contains($crane)) {
            $this->cranes->removeElement($crane);
            // set the owning side to null (unless already changed)
            if ($crane->getLabeledType() === $this) {
                $crane->setLabeledType(null);
            }
        }

        return $this;
    }
}
