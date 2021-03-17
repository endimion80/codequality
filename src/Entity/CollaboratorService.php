<?php

namespace App\Entity;

use App\Repository\CollaboratorServiceRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CollaboratorServiceRepository::class)
 */
class CollaboratorService
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=CraneService::class, mappedBy="collaboratorService")
     */
    private $craneServices;

    /**
     * @ORM\OneToMany(targetEntity=Intervention::class, mappedBy="collaboratorService")
     */
    private $interventions;

    /**
     * @ORM\OneToMany(targetEntity=RequestCraneCollaboratorService::class, mappedBy="collaboratorService")
     */
    private $requestCraneCollaboratorServices;

    /**
     * @ORM\OneToMany(targetEntity=BranchOfficeService::class, mappedBy="collaboratorService")
     */
    private $branchOfficeServices;

    /**
     * @ORM\OneToMany(targetEntity=Activity::class, mappedBy="collaboratorService")
     */
    private $activities;

    /**
     * @ORM\OneToMany(targetEntity=Budget::class, mappedBy="collaboratorService")
     */
    private $budgets;

    public function __construct()
    {
        $this->craneServices = new ArrayCollection();
        $this->interventions = new ArrayCollection();
        $this->requestCraneCollaboratorServices = new ArrayCollection();
        $this->branchOfficeServices = new ArrayCollection();
        $this->activities = new ArrayCollection();
        $this->budgets = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

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
            $craneService->setCollaboratorService($this);
        }

        return $this;
    }

    public function removeCraneService(CraneService $craneService): self
    {
        if ($this->craneServices->contains($craneService)) {
            $this->craneServices->removeElement($craneService);
            // set the owning side to null (unless already changed)
            if ($craneService->getCollaboratorService() === $this) {
                $craneService->setCollaboratorService(null);
            }
        }

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
            $intervention->setCollaboratorService($this);
        }

        return $this;
    }

    public function removeIntervention(Intervention $intervention): self
    {
        if ($this->interventions->contains($intervention)) {
            $this->interventions->removeElement($intervention);
            // set the owning side to null (unless already changed)
            if ($intervention->getCollaboratorService() === $this) {
                $intervention->setCollaboratorService(null);
            }
        }

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
            $requestCraneCollaboratorService->setCollaboratorService($this);
        }

        return $this;
    }

    public function removeRequestCraneCollaboratorService(RequestCraneCollaboratorService $requestCraneCollaboratorService): self
    {
        if ($this->requestCraneCollaboratorServices->contains($requestCraneCollaboratorService)) {
            $this->requestCraneCollaboratorServices->removeElement($requestCraneCollaboratorService);
            // set the owning side to null (unless already changed)
            if ($requestCraneCollaboratorService->getCollaboratorService() === $this) {
                $requestCraneCollaboratorService->setCollaboratorService(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|BranchOfficeService[]
     */
    public function getBranchOfficeServices(): Collection
    {
        return $this->branchOfficeServices;
    }

    public function addBranchOfficeService(BranchOfficeService $branchOfficeService): self
    {
        if (!$this->branchOfficeServices->contains($branchOfficeService)) {
            $this->branchOfficeServices[] = $branchOfficeService;
            $branchOfficeService->setCollaboratorService($this);
        }

        return $this;
    }

    public function removeBranchOfficeService(BranchOfficeService $branchOfficeService): self
    {
        if ($this->branchOfficeServices->contains($branchOfficeService)) {
            $this->branchOfficeServices->removeElement($branchOfficeService);
            // set the owning side to null (unless already changed)
            if ($branchOfficeService->getCollaboratorService() === $this) {
                $branchOfficeService->setCollaboratorService(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Activity[]
     */
    public function getActivities(): Collection
    {
        return $this->activities;
    }

    public function addActivity(Activity $activity): self
    {
        if (!$this->activities->contains($activity)) {
            $this->activities[] = $activity;
            $activity->setCollaboratorService($this);
        }

        return $this;
    }

    public function removeActivity(Activity $activity): self
    {
        if ($this->activities->removeElement($activity)) {
            // set the owning side to null (unless already changed)
            if ($activity->getCollaboratorService() === $this) {
                $activity->setCollaboratorService(null);
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
            $budget->setCollaboratorService($this);
        }

        return $this;
    }

    public function removeBudget(Budget $budget): self
    {
        if ($this->budgets->removeElement($budget)) {
            // set the owning side to null (unless already changed)
            if ($budget->getCollaboratorService() === $this) {
                $budget->setCollaboratorService(null);
            }
        }

        return $this;
    }
}
