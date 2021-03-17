<?php

namespace App\Entity;

use App\Repository\CraneManagementTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CraneManagementTypeRepository::class)
 */
class CraneManagementType
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Crane::class, mappedBy="managementType")
     */
    private $cranes;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $code;

    public function __construct()
    {
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
            $crane->setManagementType($this);
        }

        return $this;
    }

    public function removeCrane(Crane $crane): self
    {
        if ($this->cranes->contains($crane)) {
            $this->cranes->removeElement($crane);
            // set the owning side to null (unless already changed)
            if ($crane->getManagementType() === $this) {
                $crane->setManagementType(null);
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
