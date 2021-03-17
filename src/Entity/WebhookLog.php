<?php

namespace App\Entity;

use App\Repository\WebhookLogRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WebhookLogRepository::class)
 */
class WebhookLog
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Webhook::class, inversedBy="webhookLogs")
     */
    private $webhook;

    /**
     * @ORM\Column(type="datetime")
     */
    private $runDate;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $webhookData;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $webhookResult;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $status;

    public function __construct()
    {
        $this->runDate = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWebhook(): ?Webhook
    {
        return $this->webhook;
    }

    public function setWebhook(?Webhook $webhook): self
    {
        $this->webhook = $webhook;

        return $this;
    }

    public function getRunDate(): ?\DateTimeInterface
    {
        return $this->runDate;
    }

    public function setRunDate(\DateTimeInterface $runDate): self
    {
        $this->runDate = $runDate;

        return $this;
    }

    public function getWebhookData(): ?string
    {
        return $this->webhookData;
    }

    public function setWebhookData(?string $webhookData): self
    {
        $this->webhookData = $webhookData;

        return $this;
    }

    public function getWebhookResult(): ?string
    {
        return $this->webhookResult;
    }

    public function setWebhookResult(?string $webhookResult): self
    {
        $this->webhookResult = $webhookResult;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
