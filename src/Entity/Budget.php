<?php

namespace App\Entity;

use App\Repository\BudgetRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BudgetRepository::class)
 */
class Budget
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $codFinish;

    /**
     * @ORM\ManyToOne(targetEntity=Collaborator::class, inversedBy="budgets")
     */
    private $collaborator;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $reference;

    /**
     * @ORM\ManyToOne(targetEntity=Intervention::class, inversedBy="budgets")
     */
    private $intervention;

    /**
     * @ORM\ManyToOne(targetEntity=CollaboratorService::class, inversedBy="budgets")
     */
    private $collaboratorService;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $activity;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $amount;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $night;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $holliday;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $total;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $tax;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $observations;

    /**
     * @ORM\ManyToOne(targetEntity=Country::class, inversedBy="budgets")
     */
    private $country;

    /**
     * @ORM\ManyToOne(targetEntity=Town::class, inversedBy="budgets")
     */
    private $town;

    /**
     * @ORM\ManyToOne(targetEntity=Province::class, inversedBy="budgets")
     */
    private $province;

    /**
     * @ORM\ManyToOne(targetEntity=Country::class, inversedBy="destinationBudgets")
     */
    private $destinationCountry;

    /**
     * @ORM\ManyToOne(targetEntity=Town::class, inversedBy="destinationBudgets")
     */
    private $destinationTown;

    /**
     * @ORM\ManyToOne(targetEntity=Province::class, inversedBy="destinationProvince")
     */
    private $destinationProvince;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $code;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $units;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isAsiturBudget = true;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodFinish(): ?string
    {
        return $this->codFinish;
    }

    public function setCodFinish(?string $codFinish): self
    {
        $this->codFinish = $codFinish;

        return $this;
    }

    public function getCollaborator(): ?Collaborator
    {
        return $this->collaborator;
    }

    public function setCollaborator(?Collaborator $collaborator): self
    {
        $this->collaborator = $collaborator;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getIntervention(): ?Intervention
    {
        return $this->intervention;
    }

    public function setIntervention(?Intervention $intervention): self
    {
        $this->intervention = $intervention;

        return $this;
    }

    public function getCollaboratorService(): ?CollaboratorService
    {
        return $this->collaboratorService;
    }

    public function setCollaboratorService(?CollaboratorService $collaboratorService): self
    {
        $this->collaboratorService = $collaboratorService;

        return $this;
    }

    public function getActivity(): ?string
    {
        return $this->activity;
    }

    public function setActivity(?string $activity): self
    {
        $this->activity = $activity;

        return $this;
    }

    public function getAmount(): ?float
    {
        return $this->amount;
    }

    public function setAmout(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    public function getNight(): ?bool
    {
        return $this->night;
    }

    public function setNight(?bool $night): self
    {
        $this->night = $night;

        return $this;
    }

    public function getHolliday(): ?bool
    {
        return $this->holliday;
    }

    public function setHolliday(?bool $holliday): self
    {
        $this->holliday = $holliday;

        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(?float $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getTax(): ?float
    {
        return $this->tax;
    }

    public function setTax(?float $tax): self
    {
        $this->tax = $tax;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate;
    }

    public function setCreationDate(?\DateTimeInterface $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getObservations(): ?string
    {
        return $this->observations;
    }

    public function setObservations(?string $observations): self
    {
        $this->observations = $observations;

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

    public function getTown(): ?Town
    {
        return $this->town;
    }

    public function setTown(?Town $town): self
    {
        $this->town = $town;

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

    public function getDestinationCountry(): ?Country
    {
        return $this->destinationCountry;
    }

    public function setDestinationCountry(?Country $destinationCountry): self
    {
        $this->destinationCountry = $destinationCountry;

        return $this;
    }

    public function getDestinationTown(): ?Town
    {
        return $this->destinationTown;
    }

    public function setDestinationTown(?Town $destinationTown): self
    {
        $this->destinationTown = $destinationTown;

        return $this;
    }

    public function getDestinationProvince(): ?Province
    {
        return $this->destinationProvince;
    }

    public function setDestinationProvince(?Province $destinationProvince): self
    {
        $this->destinationProvince = $destinationProvince;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getUnits(): ?float
    {
        return $this->units;
    }

    public function setUnits(?float $units): self
    {
        $this->units = $units;

        return $this;
    }

    public function getIsAsiturBudget(): ?bool
    {
        return $this->isAsiturBudget;
    }

    public function setIsAsiturBudget(bool $isAsiturBudget): self
    {
        $this->isAsiturBudget = $isAsiturBudget;

        return $this;
    }
}
