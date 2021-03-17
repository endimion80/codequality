<?php

namespace App\Entity;

use App\Repository\RequestCraneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RequestCraneRepository::class)
 */
class RequestCrane
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $latitude;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $longitude;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $timeLimit = 15;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $incrementNotReady = 0;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $interventionCode;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $processingDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $responseDate;

    /**
     * @ORM\OneToMany(targetEntity=RequestCraneCollaboratorService::class, mappedBy="requestCrane")
     */
    private $requestCraneCollaboratorServices;

    /**
     * @ORM\OneToMany(targetEntity=RequestCraneCraneType::class, mappedBy="requestCrane")
     */
    private $requestCraneCraneTypes;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $sendResponseDate;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $success = false;

    /**
     * @ORM\ManyToOne(targetEntity=BranchOffice::class, inversedBy="requestCranes")
     */
    private $branchOffice;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $debugResponse;

    public function __construct()
    {
        $this->creationDate = new \DateTime();
        $this->requestCraneCollaboratorServices = new ArrayCollection();
        $this->requestCraneCraneTypes = new ArrayCollection();
    }
        
    public function getId(): ?int
    {
        return $this->id;
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

    public function getTimeLimit(): ?int
    {
        return $this->timeLimit;
    }

    public function setTimeLimit(?int $timeLimit): self
    {
        $this->timeLimit = $timeLimit;

        return $this;
    }

    public function getIncrementNotReady(): ?int
    {
        return $this->incrementNotReady;
    }

    public function setIncrementNotReady(?int $incrementNotReady): self
    {
        $this->incrementNotReady = $incrementNotReady;

        return $this;
    }

    public function getInterventionCode(): ?string
    {
        return $this->interventionCode;
    }

    public function setInterventionCode(?string $interventionCode): self
    {
        $this->interventionCode = $interventionCode;

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

    public function getProcessingDate(): ?\DateTimeInterface
    {
        return $this->processingDate;
    }

    public function setProcessingDate(?\DateTimeInterface $processingDate): self
    {
        $this->processingDate = $processingDate;

        return $this;
    }

    public function getResponseDate(): ?\DateTimeInterface
    {
        return $this->responseDate;
    }

    public function setResponseDate(?\DateTimeInterface $responseDate): self
    {
        $this->responseDate = $responseDate;

        return $this;
    }

    /**
     * @return Collection|RequestCraneCollaboratorService[]
     */
    public function getRequestCraneCollaboratorServices(): Collection
    {
        return $this->requestCraneCollaboratorServices;
    }

    public function addRequestCraneCollaboratorService(RequestCraneCollaboratorService $requestCraneCollaboratorService): self
    {
        if (!$this->requestCraneCollaboratorServices->contains($requestCraneCollaboratorService)) {
            $this->requestCraneCollaboratorServices[] = $requestCraneCollaboratorService;
            $requestCraneCollaboratorService->setRequestCrane($this);
        }

        return $this;
    }

    public function removeRequestCraneCollaboratorService(RequestCraneCollaboratorService $requestCraneCollaboratorService): self
    {
        if ($this->requestCraneCollaboratorServices->contains($requestCraneCollaboratorService)) {
            $this->requestCraneCollaboratorServices->removeElement($requestCraneCollaboratorService);
            // set the owning side to null (unless already changed)
            if ($requestCraneCollaboratorService->getRequestCrane() === $this) {
                $requestCraneCollaboratorService->setRequestCrane(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|RequestCraneCraneType[]
     */
    public function getRequestCraneCraneTypes(): Collection
    {
        return $this->requestCraneCraneTypes;
    }

    public function addRequestCraneCraneType(RequestCraneCraneType $requestCraneCraneType): self
    {
        if (!$this->requestCraneCraneTypes->contains($requestCraneCraneType)) {
            $this->requestCraneCraneTypes[] = $requestCraneCraneType;
            $requestCraneCraneType->setRequestCrane($this);
        }

        return $this;
    }

    public function removeRequestCraneCraneType(RequestCraneCraneType $requestCraneCraneType): self
    {
        if ($this->requestCraneCraneTypes->contains($requestCraneCraneType)) {
            $this->requestCraneCraneTypes->removeElement($requestCraneCraneType);
            // set the owning side to null (unless already changed)
            if ($requestCraneCraneType->getRequestCrane() === $this) {
                $requestCraneCraneType->setRequestCrane(null);
            }
        }

        return $this;
    }

    public function getSendResponseDate(): ?\DateTimeInterface
    {
        return $this->sendResponseDate;
    }

    public function setSendResponseDate(?\DateTimeInterface $sendResponseDate): self
    {
        $this->sendResponseDate = $sendResponseDate;

        return $this;
    }

    public function getSuccess(): ?bool
    {
        return $this->success;
    }

    public function setSuccess(?bool $success): self
    {
        $this->success = $success;

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

    public function getDebugResponse(): ?string
    {
        return $this->debugResponse;
    }

    public function setDebugResponse(?string $debugResponse): self
    {
        $this->debugResponse = $debugResponse;

        return $this;
    }
}
