<?php

namespace App\Entity;

use App\Repository\SmsLogRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SmsLogRepository::class)
 */
class SmsLog
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Intervention::class, inversedBy="smsLogs")
     */
    private $intervention;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $smsContent;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $smsName;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $smsType;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $smsPhone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $debug;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isDelivered = false;

    public function __construct()
    {
        $this->creationDate = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIntervention(): ?Intervention
    {
        return $this->intervention;
    }

    public function setIntervention(?Intervention $intervention): self
    {
        $this->intervention = $intervention;

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

    public function getSmsContent(): ?string
    {
        return $this->smsContent;
    }

    public function setSmsContent(?string $smsContent): self
    {
        $this->smsContent = $smsContent;

        return $this;
    }

    public function getSmsName(): ?string
    {
        return $this->smsName;
    }

    public function setSmsName(?string $smsName): self
    {
        $this->smsName = $smsName;

        return $this;
    }

    public function getSmsType(): ?string
    {
        return $this->smsType;
    }

    public function setSmsType(?string $smsType): self
    {
        $this->smsType = $smsType;

        return $this;
    }

    public function getSmsPhone(): ?string
    {
        return $this->smsPhone;
    }

    public function setSmsPhone(?string $smsPhone): self
    {
        $this->smsPhone = $smsPhone;

        return $this;
    }

    public function getIsDelivered(): ?bool
    {
        return $this->isDelivered;
    }

    public function setIsDelivered(bool $isDelivered): self
    {
        $this->isDelivered = $isDelivered;

        return $this;
    }

    public function getDebug(): ?string
    {
        return $this->debug;
    }

    public function setDebug(?string $debug): self
    {
        $this->debug = $debug;

        return $this;
    }
}
