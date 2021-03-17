<?php

namespace App\Entity;

use App\Repository\CraneServiceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CraneServiceRepository::class)
 */
class CraneService
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=CraneServiceType::class, inversedBy="craneServices")
     */
    private $craneServiceType;

    /**
     * @ORM\ManyToOne(targetEntity=Crane::class, inversedBy="craneServices")
     */
    private $crane;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateFrom;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateTo;

    /**
     * @ORM\ManyToOne(targetEntity=CollaboratorService::class, inversedBy="craneServices")
     */
    private $collaboratorService;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $code;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCraneServiceType(): ?CraneServiceType
    {
        return $this->craneServiceType;
    }

    public function setCraneServiceType(?CraneServiceType $craneServiceType): self
    {
        $this->craneServiceType = $craneServiceType;

        return $this;
    }

    public function getCrane(): ?Crane
    {
        return $this->crane;
    }

    public function setCrane(?Crane $crane): self
    {
        $this->crane = $crane;

        return $this;
    }

    public function getDateFrom(): ?\DateTimeInterface
    {
        return $this->dateFrom;
    }

    public function setDateFrom(?\DateTimeInterface $dateFrom): self
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    public function getDateTo(): ?\DateTimeInterface
    {
        return $this->dateTo;
    }

    public function setDateTo(?\DateTimeInterface $dateTo): self
    {
        $this->dateTo = $dateTo;

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
