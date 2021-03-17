<?php

namespace App\Entity;

use App\Repository\ProvinceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProvinceRepository::class)
 */
class Province
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
     * @ORM\OneToMany(targetEntity=Town::class, mappedBy="province")
     */
    private $towns;

    /**
     * @ORM\OneToMany(targetEntity=Intervention::class, mappedBy="vhProvince")
     */
    private $interventions;

    /**
     * @ORM\ManyToOne(targetEntity=Country::class, inversedBy="provinces")
     */
    private $country;

    /**
     * @ORM\OneToMany(targetEntity=Intervention::class, mappedBy="destinationProvince")
     */
    private $interventionsDestination;

    /**
     * @ORM\OneToMany(targetEntity=BranchOffice::class, mappedBy="province")
     */
    private $branchOffices;

    /**
     * @ORM\OneToMany(targetEntity=Budget::class, mappedBy="province")
     */
    private $budgets;

    /**
     * @ORM\OneToMany(targetEntity=Budget::class, mappedBy="destinationProvince")
     */
    private $destinationProvince;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $code;

    public function __construct()
    {
        $this->towns = new ArrayCollection();
        $this->interventions = new ArrayCollection();
        $this->interventionsDestination = new ArrayCollection();
        $this->branchOffices = new ArrayCollection();
        $this->budgets = new ArrayCollection();
        $this->destinationProvince = new ArrayCollection();
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
     * @return Collection|Town[]
     */
    public function getTowns(): Collection
    {
        return $this->towns;
    }

    public function addTown(Town $town): self
    {
        if (!$this->towns->contains($town)) {
            $this->towns[] = $town;
            $town->setProvince($this);
        }

        return $this;
    }

    public function removeTown(Town $town): self
    {
        if ($this->towns->contains($town)) {
            $this->towns->removeElement($town);
            // set the owning side to null (unless already changed)
            if ($town->getProvince() === $this) {
                $town->setProvince(null);
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
            $intervention->setVhProvince($this);
        }

        return $this;
    }

    public function removeIntervention(Intervention $intervention): self
    {
        if ($this->interventions->contains($intervention)) {
            $this->interventions->removeElement($intervention);
            // set the owning side to null (unless already changed)
            if ($intervention->getVhProvince() === $this) {
                $intervention->setVhProvince(null);
            }
        }

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
            $interventionsDestination->setDestinationProvince($this);
        }

        return $this;
    }

    public function removeInterventionsDestination(Intervention $interventionsDestination): self
    {
        if ($this->interventionsDestination->contains($interventionsDestination)) {
            $this->interventionsDestination->removeElement($interventionsDestination);
            // set the owning side to null (unless already changed)
            if ($interventionsDestination->getDestinationProvince() === $this) {
                $interventionsDestination->setDestinationProvince(null);
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
            $branchOffice->setProvince($this);
        }

        return $this;
    }

    public function removeBranchOffice(BranchOffice $branchOffice): self
    {
        if ($this->branchOffices->contains($branchOffice)) {
            $this->branchOffices->removeElement($branchOffice);
            // set the owning side to null (unless already changed)
            if ($branchOffice->getProvince() === $this) {
                $branchOffice->setProvince(null);
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
            $budget->setProvince($this);
        }

        return $this;
    }

    public function removeBudget(Budget $budget): self
    {
        if ($this->budgets->removeElement($budget)) {
            // set the owning side to null (unless already changed)
            if ($budget->getProvince() === $this) {
                $budget->setProvince(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Budget[]
     */
    public function getDestinationProvince(): Collection
    {
        return $this->destinationProvince;
    }

    public function addDestinationProvince(Budget $destinationProvince): self
    {
        if (!$this->destinationProvince->contains($destinationProvince)) {
            $this->destinationProvince[] = $destinationProvince;
            $destinationProvince->setDestinationProvince($this);
        }

        return $this;
    }

    public function removeDestinationProvince(Budget $destinationProvince): self
    {
        if ($this->destinationProvince->removeElement($destinationProvince)) {
            // set the owning side to null (unless already changed)
            if ($destinationProvince->getDestinationProvince() === $this) {
                $destinationProvince->setDestinationProvince(null);
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
