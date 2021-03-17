<?php

namespace App\Entity;

use App\Repository\WebhookRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WebhookRepository::class)
 */
class Webhook
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $postUrl;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mailSubject;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $mailTo;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $wsFunctionName;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $wsUrlWsdl;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $modificationDate;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isEnabled = false;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isDevelopment = false;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $postUrlDev;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $mailToDev;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $bearer;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isDeleted = false;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $label;

    /**
     * @ORM\ManyToOne(targetEntity=WebhookEvent::class, inversedBy="webhooks")
     */
    private $webhookEvent;

    /**
     * @ORM\OneToMany(targetEntity=WebhookLog::class, mappedBy="webhook")
     */
    private $webhookLogs;

    /**
     * @ORM\ManyToOne(targetEntity=WebhookType::class, inversedBy="webhooks")
     */
    private $webhookType;

    /**
     * @ORM\ManyToOne(targetEntity=Collaborator::class, inversedBy="webhooks")
     */
    private $collaborator;

    public function __construct()
    {
        $this->webhookLogs = new ArrayCollection();
 
        $this->creationDate = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPostUrl(): ?string
    {
        return $this->postUrl;
    }

    public function setPostUrl(?string $postUrl): self
    {
        $this->postUrl = $postUrl;

        return $this;
    }

    public function getMailSubject(): ?string
    {
        return $this->mailSubject;
    }

    public function setMailSubject(?string $mailSubject): self
    {
        $this->mailSubject = $mailSubject;

        return $this;
    }

    public function getMailTo(): ?string
    {
        return $this->mailTo;
    }

    public function setMailTo(?string $mailTo): self
    {
        $this->mailTo = $mailTo;

        return $this;
    }

    public function getWsFunctionName(): ?string
    {
        return $this->wsFunctionName;
    }

    public function setWsFunctionName(?string $wsFunctionName): self
    {
        $this->wsFunctionName = $wsFunctionName;

        return $this;
    }

    public function getWsUrlWsdl(): ?string
    {
        return $this->wsUrlWsdl;
    }

    public function setWsUrlWsdl(?string $wsUrlWsdl): self
    {
        $this->wsUrlWsdl = $wsUrlWsdl;

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

    public function getModificationDate(): ?\DateTimeInterface
    {
        return $this->modificationDate;
    }

    public function setModificationDate(?\DateTimeInterface $modificationDate): self
    {
        $this->modificationDate = $modificationDate;

        return $this;
    }

    public function getIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    public function getIsDevelopment(): ?bool
    {
        return $this->isDevelopment;
    }

    public function setIsDevelopment(bool $isDevelopment): self
    {
        $this->isDevelopment = $isDevelopment;

        return $this;
    }

    public function getPostUrlDev(): ?string
    {
        return $this->postUrlDev;
    }

    public function setPostUrlDev(?string $postUrlDev): self
    {
        $this->postUrlDev = $postUrlDev;

        return $this;
    }

    public function getMailToDev(): ?string
    {
        return $this->mailToDev;
    }

    public function setMailToDev(?string $mailToDev): self
    {
        $this->mailToDev = $mailToDev;

        return $this;
    }

    public function getBearer(): ?string
    {
        return $this->bearer;
    }

    public function setBearer(?string $bearer): self
    {
        $this->bearer = $bearer;

        return $this;
    }

    public function getIsDeleted(): ?bool
    {
        return $this->isDeleted;
    }

    public function setIsDeleted(bool $isDeleted): self
    {
        $this->isDeleted = $isDeleted;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getWebhookEvent(): ?WebhookEvent
    {
        return $this->webhookEvent;
    }

    public function setWebhookEvent(?WebhookEvent $webhookEvent): self
    {
        $this->webhookEvent = $webhookEvent;

        return $this;
    }

    /**
     * @return Collection|WebhookLog[]
     */
    public function getWebhookLogs(): Collection
    {
        return $this->webhookLogs;
    }

    public function addWebhookLog(WebhookLog $webhookLog): self
    {
        if (!$this->webhookLogs->contains($webhookLog)) {
            $this->webhookLogs[] = $webhookLog;
            $webhookLog->setWebhook($this);
        }

        return $this;
    }

    public function removeWebhookLog(WebhookLog $webhookLog): self
    {
        if ($this->webhookLogs->contains($webhookLog)) {
            $this->webhookLogs->removeElement($webhookLog);
            // set the owning side to null (unless already changed)
            if ($webhookLog->getWebhook() === $this) {
                $webhookLog->setWebhook(null);
            }
        }

        return $this;
    }

    public function getWebhookType(): ?WebhookType
    {
        return $this->webhookType;
    }

    public function setWebhookType(?WebhookType $webhookType): self
    {
        $this->webhookType = $webhookType;

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
