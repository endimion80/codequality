<?php

namespace App\Entity;

use App\Repository\RISCauseOperatorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RISCauseOperatorRepository::class)
 */
class RISCauseOperator
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
     * @ORM\OneToMany(targetEntity=Intervention::class, mappedBy="risCauseOperator")
     */
    private $interventions;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $codeAsitur;

    public function __construct()
    {
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
            $intervention->setRisCauseOperator($this);
        }

        return $this;
    }

    public function removeIntervention(Intervention $intervention): self
    {
        if ($this->interventions->contains($intervention)) {
            $this->interventions->removeElement($intervention);
            // set the owning side to null (unless already changed)
            if ($intervention->getRisCauseOperator() === $this) {
                $intervention->setRisCauseOperator(null);
            }
        }

        return $this;
    }

    public function getCodeAsitur(): ?string
    {
        return $this->codeAsitur;
    }

    public function setCodeAsitur(?string $codeAsitur): self
    {
        $this->codeAsitur = $codeAsitur;

        return $this;
    }
}
