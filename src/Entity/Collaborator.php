<?php

namespace App\Entity;

use App\Repository\CollaboratorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CollaboratorRepository::class)
 */
class Collaborator
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
    private $name;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $nif;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastSyncDate;

    /**
     * @ORM\OneToMany(targetEntity=WebhookType::class, mappedBy="collaborator")
     */
    private $webhookTypes;

    /**
     * @ORM\OneToMany(targetEntity=Webhook::class, mappedBy="collaborator")
     */
    private $webhooks;

    /**
     * @ORM\OneToMany(targetEntity=Intervention::class, mappedBy="collaborator")
     */
    private $interventions;

    /**
     * @ORM\OneToMany(targetEntity=Intervention::class, mappedBy="collaboratorCreator")
     */
    private $interventionsCreated;

    /**
     * @ORM\OneToMany(targetEntity=BranchOffice::class, mappedBy="collaborator")
     */
    private $branchOffices;

    /**
     * @ORM\OneToMany(targetEntity=CollaboratorUser::class, mappedBy="collaborator")
     */
    private $collaboratorUsers;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $dateFormat = 'Y-m-d H:i:s';

    /**
     * @ORM\OneToMany(targetEntity=Operator::class, mappedBy="collaborator")
     */
    private $operators;

    /**
     * @ORM\OneToMany(targetEntity=Crane::class, mappedBy="collaborator")
     */
    private $cranes;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $dateFormatSql = '%Y-%m-%d';

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $hourFormat = 'H:i';

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $hourFormatSql = '%H:%i';

    /**
     * @ORM\OneToMany(targetEntity=Activity::class, mappedBy="collaborator")
     */
    private $activities;

    /**
     * @ORM\OneToMany(targetEntity=Budget::class, mappedBy="collaborator")
     */
    private $budgets;

    public function __construct()
    {
        $this->webhookTypes = new ArrayCollection();
        $this->webhooks = new ArrayCollection();
        $this->interventions = new ArrayCollection();
        $this->interventionsCreated = new ArrayCollection();
        $this->branchOffices = new ArrayCollection();
        $this->collaboratorUsers = new ArrayCollection();
        $this->operators = new ArrayCollection();
        $this->cranes = new ArrayCollection();
        $this->activities = new ArrayCollection();
        $this->budgets = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getNif(): ?string
    {
        return $this->nif;
    }

    public function setNif(?string $nif): self
    {
        $this->nif = $nif;

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

    /**
     * @return Collection|WebhookType[]
     */
    public function getWebhookTypes(): Collection
    {
        return $this->webhookTypes;
    }

    public function addWebhookType(WebhookType $webhookType): self
    {
        if (!$this->webhookTypes->contains($webhookType)) {
            $this->webhookTypes[] = $webhookType;
            $webhookType->setCollaborator($this);
        }

        return $this;
    }

    public function removeWebhookType(WebhookType $webhookType): self
    {
        if ($this->webhookTypes->contains($webhookType)) {
            $this->webhookTypes->removeElement($webhookType);
            // set the owning side to null (unless already changed)
            if ($webhookType->getCollaborator() === $this) {
                $webhookType->setCollaborator(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Webhook[]
     */
    public function getWebhooks(): Collection
    {
        return $this->webhooks;
    }

    public function addWebhook(Webhook $webhook): self
    {
        if (!$this->webhooks->contains($webhook)) {
            $this->webhooks[] = $webhook;
            $webhook->setCollaborator($this);
        }

        return $this;
    }

    public function removeWebhook(Webhook $webhook): self
    {
        if ($this->webhooks->contains($webhook)) {
            $this->webhooks->removeElement($webhook);
            // set the owning side to null (unless already changed)
            if ($webhook->getCollaborator() === $this) {
                $webhook->setCollaborator(null);
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
            $intervention->setCollaborator($this);
        }

        return $this;
    }

    public function removeIntervention(Intervention $intervention): self
    {
        if ($this->interventions->contains($intervention)) {
            $this->interventions->removeElement($intervention);
            // set the owning side to null (unless already changed)
            if ($intervention->getCollaborator() === $this) {
                $intervention->setCollaborator(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Intervention[]
     */
    public function getInterventionsCreated(): Collection
    {
        return $this->interventionsCreated;
    }

    public function addInterventionCreated(Intervention $intervention): self
    {
        if (!$this->interventionsCreated->contains($intervention)) {
            $this->interventionsCreated[] = $intervention;
            $intervention->setCollaborator($this);
        }

        return $this;
    }

    public function removeInterventionCreated(Intervention $intervention): self
    {
        if ($this->interventionsCreated->contains($intervention)) {
            $this->interventionsCreated->removeElement($intervention);
            // set the owning side to null (unless already changed)
            if ($intervention->getCollaborator() === $this) {
                $intervention->setCollaborator(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|BranchOffice[]
     */
    public function getBranchOffices(): Collection
    {
        return $this->branchOffices;
    }

    public function addBranchOffice(BranchOffice $branchOffice): self
    {
        if (!$this->branchOffices->contains($branchOffice)) {
            $this->branchOffices[] = $branchOffice;
            $branchOffice->setCollaborator($this);
        }

        return $this;
    }

    public function removeBranchOffice(BranchOffice $branchOffice): self
    {
        if ($this->branchOffices->contains($branchOffice)) {
            $this->branchOffices->removeElement($branchOffice);
            // set the owning side to null (unless already changed)
            if ($branchOffice->getCollaborator() === $this) {
                $branchOffice->setCollaborator(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|CollaboratorUser[]
     */
    public function getCollaboratorUsers(): Collection
    {
        return $this->collaboratorUsers;
    }

    public function addCollaboratorUser(CollaboratorUser $collaboratorUser): self
    {
        if (!$this->collaboratorUsers->contains($collaboratorUser)) {
            $this->collaboratorUsers[] = $collaboratorUser;
            $collaboratorUser->setCollaborator($this);
        }

        return $this;
    }

    public function removeCollaboratorUser(CollaboratorUser $collaboratorUser): self
    {
        if ($this->collaboratorUsers->contains($collaboratorUser)) {
            $this->collaboratorUsers->removeElement($collaboratorUser);
            // set the owning side to null (unless already changed)
            if ($collaboratorUser->getCollaborator() === $this) {
                $collaboratorUser->setCollaborator(null);
            }
        }

        return $this;
    }

    public function addInterventionsCreated(Intervention $interventionsCreated): self
    {
        if (!$this->interventionsCreated->contains($interventionsCreated)) {
            $this->interventionsCreated[] = $interventionsCreated;
            $interventionsCreated->setCollaboratorCreator($this);
        }

        return $this;
    }

    public function removeInterventionsCreated(Intervention $interventionsCreated): self
    {
        if ($this->interventionsCreated->contains($interventionsCreated)) {
            $this->interventionsCreated->removeElement($interventionsCreated);
            // set the owning side to null (unless already changed)
            if ($interventionsCreated->getCollaboratorCreator() === $this) {
                $interventionsCreated->setCollaboratorCreator(null);
            }
        }

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

    public function getDateFormat(): ?string
    {
        return $this->dateFormat;
    }

    public function setDateFormat(?string $dateFormat): self
    {
        $this->dateFormat = $dateFormat;

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
            $operator->setCollaborator($this);
        }

        return $this;
    }

    public function removeOperator(Operator $operator): self
    {
        if ($this->operators->contains($operator)) {
            $this->operators->removeElement($operator);
            // set the owning side to null (unless already changed)
            if ($operator->getCollaborator() === $this) {
                $operator->setCollaborator(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Crane[]
     */
    public function getCranes(): Collection
    {
        return $this->cranes;
    }

    public function addCrane(Crane $crane): self
    {
        if (!$this->cranes->contains($crane)) {
            $this->cranes[] = $crane;
            $crane->setCollaborator($this);
        }

        return $this;
    }

    public function removeCrane(Crane $crane): self
    {
        if ($this->cranes->contains($crane)) {
            $this->cranes->removeElement($crane);
            // set the owning side to null (unless already changed)
            if ($crane->getCollaborator() === $this) {
                $crane->setCollaborator(null);
            }
        }

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDateFormatSql(): ?string
    {
        return $this->dateFormatSql;
    }

    public function setDateFormatSql(?string $dateFormatSql): self
    {
        $this->dateFormatSql = $dateFormatSql;

        return $this;
    }

    public function getHourFormat(): ?string
    {
        return $this->hourFormat;
    }

    public function setHourFormat(?string $hourFormat): self
    {
        $this->hourFormat = $hourFormat;

        return $this;
    }

    public function getHourFormatSql(): ?string
    {
        return $this->HourFormatSql;
    }

    public function setHourFormatSql(?string $HourFormatSql): self
    {
        $this->HourFormatSql = $HourFormatSql;

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
            $activity->setCollaborator($this);
        }

        return $this;
    }

    public function removeActivity(Activity $activity): self
    {
        if ($this->activities->removeElement($activity)) {
            // set the owning side to null (unless already changed)
            if ($activity->getCollaborator() === $this) {
                $activity->setCollaborator(null);
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
            $budget->setCollaborator($this);
        }

        return $this;
    }

    public function removeBudget(Budget $budget): self
    {
        if ($this->budgets->removeElement($budget)) {
            // set the owning side to null (unless already changed)
            if ($budget->getCollaborator() === $this) {
                $budget->setCollaborator(null);
            }
        }

        return $this;
    }
}
