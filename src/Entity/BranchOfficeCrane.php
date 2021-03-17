<?php

namespace App\Entity;

use App\Repository\BranchOfficeCraneRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BranchOfficeCraneRepository::class)
 */
class BranchOfficeCrane
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=BranchOffice::class, inversedBy="branchOfficeCranes")
     */
    private $branchOffice;

    /**
     * @ORM\ManyToOne(targetEntity=Crane::class, inversedBy="branchOfficeCranes")
     */
    private $crane;

    /**
     * @ORM\Column(type="datetime", nullable = true)
     */
    private $dateFrom;

    /**
     * @ORM\Column(type="datetime", nullable = true)
     */
    private $dateTo;

    /**
     * @ORM\Column(type="string", length=50, nullable = true)
     */
    private $code;

    public function getId(): ?int
    {
        return $this->id;
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

    public function setDateFrom(\DateTimeInterface $dateFrom): self
    {
        $this->dateFrom = $dateFrom;

        return $this;
    }

    public function getDateTo(): ?\DateTimeInterface
    {
        return $this->dateTo;
    }

    public function setDateTo(\DateTimeInterface $dateTo = null): self
    {
        $this->dateTo = $dateTo;

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
}
