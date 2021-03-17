<?php

namespace App\Entity;

use App\Repository\WebhookTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WebhookTypeRepository::class)
 */
class WebhookType
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
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Webhook::class, mappedBy="webhookType")
     */
    private $webhooks;

    /**
     * @ORM\ManyToOne(targetEntity=Collaborator::class, inversedBy="webhookTypes")
     */
    private $collaborator;

    public function __construct()
    {
        $this->webhooks = new ArrayCollection();
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
            $webhook->setWebhookType($this);
        }

        return $this;
    }

    public function removeWebhook(Webhook $webhook): self
    {
        if ($this->webhooks->contains($webhook)) {
            $this->webhooks->removeElement($webhook);
            // set the owning side to null (unless already changed)
            if ($webhook->getWebhookType() === $this) {
                $webhook->setWebhookType(null);
            }
        }

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
