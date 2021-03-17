<?php

namespace App\Entity;

use App\Repository\TownRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TownRepository::class)
 */
class Town
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
     * @ORM\ManyToOne(targetEntity=Country::class, inversedBy="towns")
     * @ORM\JoinColumn(nullable=false)
     */
    private $country;

    /**
     * @ORM\ManyToOne(targetEntity=Province::class, inversedBy="towns")
     * @ORM\JoinColumn(nullable=false)
     */
    private $province;

    /**
     * @ORM\OneToMany(targetEntity=Intervention::class, mappedBy="vhTown")
     */
    private $interventions;

    /**
     * @ORM\OneToMany(targetEntity=Intervention::class, mappedBy="destinationTown")
     */
    private $interventionsDestination;

    /**
     * @ORM\OneToMany(targetEntity=BranchOffice::class, mappedBy="town")
     */
    private $branchOffices;

    /**
     * @ORM\OneToMany(targetEntity=Budget::class, mappedBy="town")
     */
    private $budgets;

    /**
     * @ORM\OneToMany(targetEntity=Budget::class, mappedBy="destinationTown")
     */
    private $destinationBudgets;

    public function __construct()
    {
        $this->interventions = new ArrayCollection();
        $this->interventionsDestination = new ArrayCollection();
        $this->branchOffices = new ArrayCollection();
        $this->budgets = new ArrayCollection();
        $this->destinationBudgets = new ArrayCollection();
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

    public function getCountry(): ?Country
    {
        return $this->country;
    }

    public function setCountry(?Country $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getProvince(): ?Province
    {
        return $this->province;
    }

    public function setProvince(?Province $province): self
    {
        $this->province = $province;

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
            $intervention->setVhTown($this);
        }

        return $this;
    }

    public function removeIntervention(Intervention $intervention): self
    {
        if ($this->interventions->contains($intervention)) {
            $this->interventions->removeElement($intervention);
            // set the owning side to null (unless already changed)
            if ($intervention->getVhTown() === $this) {
                $intervention->setVhTown(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Intervention[]
     */
    public function getInterventionsDestination(): Collection
    {
        return $this->interventionsDestination;
    }

    public function addInterventionsDestination(Intervention $interventionsDestination): self
    {
        if (!$this->interventionsDestination->contains($interventionsDestination)) {
            $this->interventionsDestination[] = $interventionsDestination;
            $interventionsDestination->setDestinationTown($this);
        }

        return $this;
    }

    public function removeInterventionsDestination(Intervention $interventionsDestination): self
    {
        if ($this->interventionsDestination->contains($interventionsDestination)) {
            $this->interventionsDestination->removeElement($interventionsDestination);
            // set the owning side to null (unless already changed)
            if ($interventionsDestination->getDestinationTown() === $this) {
                $interventionsDestination->setDestinationTown(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|BranchOffice[]
     */
    public function getBranchOffices(): Collection
    {
        return $this->branchOffices;
    }

    public function addBranchOffice(BranchOffice $branchOffice): self
    {
        if (!$this->branchOffices->contains($branchOffice)) {
            $this->branchOffices[] = $branchOffice;
            $branchOffice->setTown($this);
        }

        return $this;
    }

    public function removeBranchOffice(BranchOffice $branchOffice): self
    {
        if ($this->branchOffices->contains($branchOffice)) {
            $this->branchOffices->removeElement($branchOffice);
            // set the owning side to null (unless already changed)
            if ($branchOffice->getTown() === $this) {
                $branchOffice->setTown(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Budget[]
     */
    public function getBudgets(): Collection
    {
        return $this->budgets;
    }

    public function addBudget(Budget $budget): self
    {
        if (!$this->budgets->contains($budget)) {
            $this->budgets[] = $budget;
            $budget->setTown($this);
        }

        return $this;
    }

    public function removeBudget(Budget $budget): self
    {
        if ($this->budgets->removeElement($budget)) {
            // set the owning side to null (unless already changed)
            if ($budget->getTown() === $this) {
                $budget->setTown(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Budget[]
     */
    public function getDestinationBudgets(): Collection
    {
        return $this->destinationBudgets;
    }

    public function addDestinationBudget(Budget $destinationBudget): self
    {
        if (!$this->destinationBudgets->contains($destinationBudget)) {
            $this->destinationBudgets[] = $destinationBudget;
            $destinationBudget->setDestinationTown($this);
        }

        return $this;
    }

    public function removeDestinationBudget(Budget $destinationBudget): self
    {
        if ($this->destinationBudgets->removeElement($destinationBudget)) {
            // set the owning side to null (unless already changed)
            if ($destinationBudget->getDestinationTown() === $this) {
                $destinationBudget->setDestinationTown(null);
            }
        }

        return $this;
    }
}
