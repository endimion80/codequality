<?php

namespace App\Entity;

use App\Repository\BranchOfficeServiceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BranchOfficeServiceRepository::class)
 */
class BranchOfficeService
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=BranchOffice::class, inversedBy="branchOfficeServices")
     */
    private $branchOffice;

    /**
     * @ORM\ManyToOne(targetEntity=CollaboratorService::class, inversedBy="branchOfficeServices")
     */
    private $collaboratorService;

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

    public function getCollaboratorService(): ?CollaboratorService
    {
        return $this->collaboratorService;
    }

    public function setCollaboratorService(?CollaboratorService $collaboratorService): self
    {
        $this->collaboratorService = $collaboratorService;

        return $this;
    }
}
