<?php

namespace App\Entity;

use App\Repository\CraneTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CraneTypeRepository::class)
 */
class CraneType
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Crane::class, mappedBy="craneType")
     */
    private $cranes;

    /**
     * @ORM\OneToMany(targetEntity=RequestCraneCraneType::class, mappedBy="craneType")
     */
    private $requestCraneCraneTypes;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $code;

    public function __construct()
    {
        $this->cranes = new ArrayCollection();
        $this->requestCraneCraneTypes = new ArrayCollection();
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
            $crane->setCraneType($this);
        }

        return $this;
    }

    public function removeCrane(Crane $crane): self
    {
        if ($this->cranes->contains($crane)) {
            $this->cranes->removeElement($crane);
            // set the owning side to null (unless already changed)
            if ($crane->getCraneType() === $this) {
                $crane->setCraneType(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|RequestCraneCraneType[]
     */
    public function getRequestCraneCraneTypes(): Collection
    {
        return $this->requestCraneCraneTypes;
    }

    public function addRequestCraneCraneType(RequestCraneCraneType $requestCraneCraneType): self
    {
        if (!$this->requestCraneCraneTypes->contains($requestCraneCraneType)) {
            $this->requestCraneCraneTypes[] = $requestCraneCraneType;
            $requestCraneCraneType->setCraneType($this);
        }

        return $this;
    }

    public function removeRequestCraneCraneType(RequestCraneCraneType $requestCraneCraneType): self
    {
        if ($this->requestCraneCraneTypes->contains($requestCraneCraneType)) {
            $this->requestCraneCraneTypes->removeElement($requestCraneCraneType);
            // set the owning side to null (unless already changed)
            if ($requestCraneCraneType->getCraneType() === $this) {
                $requestCraneCraneType->setCraneType(null);
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
