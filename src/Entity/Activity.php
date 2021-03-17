<?php

namespace App\Entity;

use App\Repository\ActivityRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActivityRepository::class)
 */
class Activity
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
    private $code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $tax;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $unit;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $night;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $holliday;

    /**
     * @ORM\ManyToOne(targetEntity=BranchOffice::class, inversedBy="activities")
     * @ORM\JoinColumn(nullable=false)
     */
    private $branchOffice;

    /**
     * @ORM\ManyToOne(targetEntity=CollaboratorService::class, inversedBy="activities")
     */
    private $collaboratorService;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastSyncDate;

    /**
     * @ORM\ManyToOne(targetEntity=Collaborator::class, inversedBy="activities")
     */
    private $collaborator;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

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

    public function getUnit(): ?float
    {
        return $this->unit;
    }

    public function setUnit(?float $unit): self
    {
        $this->unit = $unit;

        return $this;
    }

    public function getNight(): ?float
    {
        return $this->night;
    }

    public function setNight(?float $night): self
    {
        $this->night = $night;

        return $this;
    }

    public function getHolliday(): ?float
    {
        return $this->holliday;
    }

    public function setHolliday(?float $holliday): self
    {
        $this->holliday = $holliday;

        return $this;
    }

    public function getBranchOffice(): ?BranchOffice
    {
        return $this->branchOffice;
    }

    public function setBranchOffice(?BranchOffice $branchOffice): self
    {
        $this->branchOffice = $branchOffice;

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

    public function getLastSyncDate(): ?\DateTimeInterface
    {
        return $this->lastSyncDate;
    }

    public function setLastSyncDate(?\DateTimeInterface $lastSyncDate): self
    {
        $this->lastSyncDate = $lastSyncDate;

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
}
