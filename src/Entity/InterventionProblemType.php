<?php

namespace App\Entity;

use App\Repository\InterventionProblemTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InterventionProblemTypeRepository::class)
 */
class InterventionProblemType
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
     * @ORM\OneToMany(targetEntity=InterventionFails::class, mappedBy="interventionProblemType")
     */
    private $interventionFails;

    public function __construct()
    {
        $this->interventionFails = new ArrayCollection();
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
     * @return Collection|InterventionFails[]
     */
    public function getInterventionFails(): Collection
    {
        return $this->interventionFails;
    }

    public function addInterventionFail(InterventionFails $interventionFail): self
    {
        if (!$this->interventionFails->contains($interventionFail)) {
            $this->interventionFails[] = $interventionFail;
            $interventionFail->setInterventionProblemType($this);
        }

        return $this;
    }

    public function removeInterventionFail(InterventionFails $interventionFail): self
    {
        if ($this->interventionFails->contains($interventionFail)) {
            $this->interventionFails->removeElement($interventionFail);
            // set the owning side to null (unless already changed)
            if ($interventionFail->getInterventionProblemType() === $this) {
                $interventionFail->setInterventionProblemType(null);
            }
        }

        return $this;
    }
}
