<?php

namespace App\Entity;

use App\Repository\RequestCraneCollaboratorServiceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RequestCraneCollaboratorServiceRepository::class)
 */
class RequestCraneCollaboratorService
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=CollaboratorService::class, inversedBy="requestCraneCollaboratorServices")
     */
    private $collaboratorService;

    /**
     * @ORM\ManyToOne(targetEntity=RequestCrane::class, inversedBy="requestCraneCollaboratorServices")
     */
    private $requestCrane;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getRequestCrane(): ?RequestCrane
    {
        return $this->requestCrane;
    }

    public function setRequestCrane(?RequestCrane $requestCrane): self
    {
        $this->requestCrane = $requestCrane;

        return $this;
    }
}
