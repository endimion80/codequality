<?php

namespace App\Entity;

use App\Repository\InterventionLogRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InterventionLogRepository::class)
 */
class InterventionLog
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=InterventionStatus::class, inversedBy="interventionLogs")
     */
    private $interventionStatus;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @ORM\ManyToOne(targetEntity=InterventionLogType::class, inversedBy="interventionLogs")
     */
    private $interventionLogType;

    /**
     * @ORM\ManyToOne(targetEntity=CollaboratorUser::class, inversedBy="interventionLogs")
     */
    private $collaboratorUser;

    /**
     * @ORM\ManyToOne(targetEntity=Operator::class, inversedBy="interventionLogs")
     */
    private $operator;

    /**
     * @ORM\ManyToOne(targetEntity=Intervention::class, inversedBy="interventionLogs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $intervention;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $latitude;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $longitude;

    public function __construct()
    {
        $this->creationDate = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getInterventionStatus(): ?InterventionStatus
    {
        return $this->interventionStatus;
    }

    public function setInterventionStatus(?InterventionStatus $interventionStatus): self
    {
        $this->interventionStatus = $interventionStatus;

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

    public function getInterventionLogType(): ?InterventionLogType
    {
        return $this->interventionLogType;
    }

    public function setInterventionLogType(?InterventionLogType $interventionLogType): self
    {
        $this->interventionLogType = $interventionLogType;

        return $this;
    }

    public function getCollaboratorUser(): ?CollaboratorUser
    {
        return $this->collaboratorUser;
    }

    public function setCollaboratorUser(?CollaboratorUser $collaboratorUser): self
    {
        $this->collaboratorUser = $collaboratorUser;

        return $this;
    }

    public function getOperator(): ?Operator
    {
        return $this->operator;
    }

    public function setOperator(?Operator $operator): self
    {
        $this->operator = $operator;

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

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }
}
