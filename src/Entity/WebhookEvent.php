<?php

namespace App\Entity;

use App\Repository\WebhookEventRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WebhookEventRepository::class)
 */
class WebhookEvent
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Webhook::class, mappedBy="webhookEvent")
     */
    private $webhooks;

    public function __construct()
    {
        $this->webhooks = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
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
            $webhook->setWebhookEvent($this);
        }

        return $this;
    }

    public function removeWebhook(Webhook $webhook): self
    {
        if ($this->webhooks->contains($webhook)) {
            $this->webhooks->removeElement($webhook);
            // set the owning side to null (unless already changed)
            if ($webhook->getWebhookEvent() === $this) {
                $webhook->setWebhookEvent(null);
            }
        }

        return $this;
    }
}
