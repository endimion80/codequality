<?php

namespace App\Entity;

use App\Repository\CraneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CraneRepository::class)
 */
class Crane
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $plate;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $openFrom;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $openTo;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $workingDays;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $deletionDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $registrationDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastSyncDate;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $comments;

    /**
     * @ORM\OneToMany(targetEntity=CraneService::class, mappedBy="crane")
     */
    private $craneServices;

    /**
     * @ORM\ManyToOne(targetEntity=CraneStatus::class, inversedBy="cranes")
     */
    private $craneStatus;

    /**
     * @ORM\ManyToOne(targetEntity=CraneType::class, inversedBy="cranes")
     */
    private $craneType;

    /**
     * @ORM\ManyToOne(targetEntity=Brand::class, inversedBy="cranes")
     */
    private $brand;

    /**
     * @ORM\ManyToOne(targetEntity=Model::class, inversedBy="cranes")
     */
    private $model;

    /**
     * @ORM\ManyToOne(targetEntity=AvailabilityStatus::class, inversedBy="cranes")
     */
    private $availabilityStatus;

    /**
     * @ORM\OneToMany(targetEntity=Intervention::class, mappedBy="crane")
     */
    private $interventions;

    /**
     * @ORM\OneToMany(targetEntity=Attachment::class, mappedBy="crane")
     */
    private $attachments;

    /**
     * @ORM\OneToMany(targetEntity=BranchOfficeCrane::class, mappedBy="crane")
     */
    private $branchOfficeCranes;

    /**
     * @ORM\OneToMany(targetEntity=Operator::class, mappedBy="crane")
     */
    private $operators;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $code;

    /**
     * @ORM\OneToMany(targetEntity=WorkingHours::class, mappedBy="crane")
     */
    private $workingHours;

    /**
     * @ORM\ManyToOne(targetEntity=CraneManagementType::class, inversedBy="cranes")
     */
    private $managementType;
    
    /**
     * @ORM\ManyToOne(targetEntity=Collaborator::class, inversedBy="cranes")
     */
    private $collaborator;

    /**
     * @ORM\ManyToOne(targetEntity=LabeledType::class, inversedBy="cranes")
     */
    private $labeledType;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $reference;

    /**
     * @ORM\OneToMany(targetEntity=OperatorAvailableCranes::class, mappedBy="crane")
     */
    private $operatorAvailableCranes;

    public function __construct()
    {
        $this->craneServices = new ArrayCollection();
        $this->interventions = new ArrayCollection();
        $this->attachments = new ArrayCollection();
        $this->branchOfficeCranes = new ArrayCollection();
        $this->operators = new ArrayCollection();
    
        $this->creationDate = new \DateTime();
        $this->workingHours = new ArrayCollection();
        $this->operatorAvailableCranes = new ArrayCollection();
    
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPlate(): ?string
    {
        return $this->plate;
    }

    public function setPlate(?string $plate): self
    {
        $this->plate = $plate;

        return $this;
    }

    public function getOpenFrom(): ?string
    {
        return $this->openFrom;
    }

    public function setOpenFrom(?string $openFrom): self
    {
        $this->openFrom = $openFrom;

        return $this;
    }

    public function getOpenTo(): ?string
    {
        return $this->openTo;
    }

    public function setOpenTo(?string $openTo): self
    {
        $this->openTo = $openTo;

        return $this;
    }

    public function getWorkingDays(): ?string
    {
        return $this->workingDays;
    }

    public function setWorkingDays(?string $workingDays): self
    {
        $this->workingDays = $workingDays;

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

    public function getDeletionDate(): ?\DateTimeInterface
    {
        return $this->deletionDate;
    }

    public function setDeletionDate(?\DateTimeInterface $deletionDate): self
    {
        $this->deletionDate = $deletionDate;

        return $this;
    }

    public function getRegistrationDate(): ?\DateTimeInterface
    {
        return $this->registrationDate;
    }

    public function setRegistrationDate(?\DateTimeInterface $registrationDate): self
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    public function getLastSyncDate(): ?\DateTimeInterface
    {
        return $this->lastSyncDate;
    }

    public function setLastSyncDate(?\DateTimeInterface $lastSyncDate): self
    {
        $this->lastSyncDate = $lastSyncDate;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): self
    {
        $this->comments = $comments;

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
            $craneService->setCrane($this);
        }

        return $this;
    }

    public function removeCraneService(CraneService $craneService): self
    {
        if ($this->craneServices->contains($craneService)) {
            $this->craneServices->removeElement($craneService);
            // set the owning side to null (unless already changed)
            if ($craneService->getCrane() === $this) {
                $craneService->setCrane(null);
            }
        }

        return $this;
    }

    public function getCraneStatus(): ?CraneStatus
    {
        return $this->craneStatus;
    }

    public function setCraneStatus(?CraneStatus $craneStatus): self
    {
        $this->craneStatus = $craneStatus;

        return $this;
    }

    public function getCraneType(): ?CraneType
    {
        return $this->craneType;
    }

    public function setCraneType(?CraneType $craneType): self
    {
        $this->craneType = $craneType;

        return $this;
    }

    public function getBrand(): ?Brand
    {
        return $this->brand;
    }

    public function setBrand(?Brand $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    public function getModel(): ?Model
    {
        return $this->model;
    }

    public function setModel(?Model $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getAvailabilityStatus(): ?AvailabilityStatus
    {
        return $this->availabilityStatus;
    }

    public function setAvailabilityStatus(?AvailabilityStatus $availabilityStatus): self
    {
        $this->availabilityStatus = $availabilityStatus;

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
            $intervention->setCrane($this);
        }

        return $this;
    }

    public function removeIntervention(Intervention $intervention): self
    {
        if ($this->interventions->contains($intervention)) {
            $this->interventions->removeElement($intervention);
            // set the owning side to null (unless already changed)
            if ($intervention->getCrane() === $this) {
                $intervention->setCrane(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Attachment[]
     */
    public function getAttachments(): Collection
    {
        return $this->attachments;
    }

    public function addAttachment(Attachment $attachment): self
    {
        if (!$this->attachments->contains($attachment)) {
            $this->attachments[] = $attachment;
            $attachment->setCrane($this);
        }

        return $this;
    }

    public function removeAttachment(Attachment $attachment): self
    {
        if ($this->attachments->contains($attachment)) {
            $this->attachments->removeElement($attachment);
            // set the owning side to null (unless already changed)
            if ($attachment->getCrane() === $this) {
                $attachment->setCrane(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|BranchOfficeCrane[]
     */
    public function getBranchOfficeCranes(): Collection
    {
        return $this->branchOfficeCranes;
    }

    public function addBranchOfficeCrane(BranchOfficeCrane $branchOfficeCrane): self
    {
        if (!$this->branchOfficeCranes->contains($branchOfficeCrane)) {
            $this->branchOfficeCranes[] = $branchOfficeCrane;
            $branchOfficeCrane->setCrane($this);
        }

        return $this;
    }

    public function removeBranchOfficeCrane(BranchOfficeCrane $branchOfficeCrane): self
    {
        if ($this->branchOfficeCranes->contains($branchOfficeCrane)) {
            $this->branchOfficeCranes->removeElement($branchOfficeCrane);
            // set the owning side to null (unless already changed)
            if ($branchOfficeCrane->getCrane() === $this) {
                $branchOfficeCrane->setCrane(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Operator[]
     */
    public function getOperators(): Collection
    {
        return $this->operators;
    }

    public function addOperator(Operator $operator): self
    {
        if (!$this->operators->contains($operator)) {
            $this->operators[] = $operator;
            $operator->setCrane($this);
        }

        return $this;
    }

    public function removeOperator(Operator $operator): self
    {
        if ($this->operators->contains($operator)) {
            $this->operators->removeElement($operator);
            // set the owning side to null (unless already changed)
            if ($operator->getCrane() === $this) {
                $operator->setCrane(null);
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

    /**
     * @return Collection|WorkingHours[]
     */
    public function getWorkingHours(): Collection
    {
        return $this->workingHours;
    }

    public function addWorkingHour(WorkingHours $workingHour): self
    {
        if (!$this->workingHours->contains($workingHour)) {
            $this->workingHours[] = $workingHour;
            $workingHour->setCrane($this);
        }

        return $this;
    }

    public function removeWorkingHour(WorkingHours $workingHour): self
    {
        if ($this->workingHours->contains($workingHour)) {
            $this->workingHours->removeElement($workingHour);
            // set the owning side to null (unless already changed)
            if ($workingHour->getCrane() === $this) {
                $workingHour->setCrane(null);
            }
        }

        return $this;
    }

    public function getManagementType(): ?CraneManagementType
    {
        return $this->managementType;
    }

    public function setManagementType(?CraneManagementType $managementType): self
    {
        $this->managementType = $managementType;
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

    public function getLabeledType(): ?LabeledType
    {
        return $this->labeledType;
    }

    public function setLabeledType(?LabeledType $labeledType): self
    {
        $this->labeledType = $labeledType;

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

    /**
     * @return Collection|OperatorAvailableCranes[]
     */
    public function getOperatorAvailableCranes(): Collection
    {
        return $this->operatorAvailableCranes;
    }

    public function addOperatorAvailableCrane(OperatorAvailableCranes $operatorAvailableCrane): self
    {
        if (!$this->operatorAvailableCranes->contains($operatorAvailableCrane)) {
            $this->operatorAvailableCranes[] = $operatorAvailableCrane;
            $operatorAvailableCrane->setCrane($this);
        }

        return $this;
    }

    public function removeOperatorAvailableCrane(OperatorAvailableCranes $operatorAvailableCrane): self
    {
        if ($this->operatorAvailableCranes->contains($operatorAvailableCrane)) {
            $this->operatorAvailableCranes->removeElement($operatorAvailableCrane);
            // set the owning side to null (unless already changed)
            if ($operatorAvailableCrane->getCrane() === $this) {
                $operatorAvailableCrane->setCrane(null);
            }
        }

        return $this;
    }
}
