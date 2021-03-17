<?php

namespace App\Entity;

use App\Repository\CountryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CountryRepository::class)
 */
class Country
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
     * @ORM\OneToMany(targetEntity=Town::class, mappedBy="country")
     */
    private $towns;

    /**
     * @ORM\OneToMany(targetEntity=Province::class, mappedBy="country")
     */
    private $provinces;

    /**
     * @ORM\OneToMany(targetEntity=Budget::class, mappedBy="country")
     */
    private $budgets;

    /**
     * @ORM\OneToMany(targetEntity=Budget::class, mappedBy="destinationCountry")
     */
    private $destinationBudgets;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $code;

    public function __construct()
    {
        $this->towns = new ArrayCollection();
        $this->provinces = new ArrayCollection();
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
            $town->setCountry($this);
        }

        return $this;
    }

    public function removeTown(Town $town): self
    {
        if ($this->towns->contains($town)) {
            $this->towns->removeElement($town);
            // set the owning side to null (unless already changed)
            if ($town->getCountry() === $this) {
                $town->setCountry(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Province[]
     */
    public function getProvinces(): Collection
    {
        return $this->provinces;
    }

    public function addProvince(Province $province): self
    {
        if (!$this->provinces->contains($province)) {
            $this->provinces[] = $province;
            $province->setCountry($this);
        }

        return $this;
    }

    public function removeProvince(Province $province): self
    {
        if ($this->provinces->contains($province)) {
            $this->provinces->removeElement($province);
            // set the owning side to null (unless already changed)
            if ($province->getCountry() === $this) {
                $province->setCountry(null);
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
            $budget->setCountry($this);
        }

        return $this;
    }

    public function removeBudget(Budget $budget): self
    {
        if ($this->budgets->removeElement($budget)) {
            // set the owning side to null (unless already changed)
            if ($budget->getCountry() === $this) {
                $budget->setCountry(null);
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
            $destinationBudget->setDestinationCountry($this);
        }

        return $this;
    }

    public function removeDestinationBudget(Budget $destinationBudget): self
    {
        if ($this->destinationBudgets->removeElement($destinationBudget)) {
            // set the owning side to null (unless already changed)
            if ($destinationBudget->getDestinationCountry() === $this) {
                $destinationBudget->setDestinationCountry(null);
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
