<?php

namespace App\Entity;

use App\Repository\CraneServiceTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CraneServiceTypeRepository::class)
 */
class CraneServiceType
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=CraneService::class, mappedBy="craneServiceType")
     */
    private $craneServices;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $code;

    public function __construct()
    {
        $this->craneServices = new ArrayCollection();
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
     * @return Collection|CraneService[]
     */
    public function getCraneServices(): Collection
    {
        return $this->craneServices;
    }

    public function addCraneService(CraneService $craneService): self
    {
        if (!$this->craneServices->contains($craneService)) {
            $this->craneServices[] = $craneService;
            $craneService->setCraneServiceType($this);
        }

        return $this;
    }

    public function removeCraneService(CraneService $craneService): self
    {
        if ($this->craneServices->contains($craneService)) {
            $this->craneServices->removeElement($craneService);
            // set the owning side to null (unless already changed)
            if ($craneService->getCraneServiceType() === $this) {
                $craneService->setCraneServiceType(null);
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
