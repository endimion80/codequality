<?php

namespace App\Entity;

use App\Repository\MailerLogRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MailerLogRepository::class)
 */
class MailerLog
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Intervention::class, inversedBy="mailerLogs")
     */
    private $intervention;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $subject;

    /**
     * @ORM\Column(type="datetime")
     */
    private $creationDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $emailTo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $emailCc;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $emailBcc;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isDelivered = false;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $template;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $templateContent;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $locale;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $backup;

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

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getCreationDate(): ?\DateTimeInterface
    {
        return $this->creationDate;
    }

    public function setCreationDate(\DateTimeInterface $creationDate): self
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    public function getEmailTo(): ?string
    {
        return $this->emailTo;
    }

    public function setEmailTo(?string $emailTo): self
    {
        $this->emailTo = $emailTo;

        return $this;
    }

    public function getEmailCc(): ?string
    {
        return $this->emailCc;
    }

    public function setEmailCc(?string $emailCc): self
    {
        $this->emailCc = $emailCc;

        return $this;
    }

    public function getEmailBcc(): ?string
    {
        return $this->emailBcc;
    }

    public function setEmailBcc(?string $emailBcc): self
    {
        $this->emailBcc = $emailBcc;

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

    public function getTemplate(): ?string
    {
        return $this->template;
    }

    public function setTemplate(?string $template): self
    {
        $this->template = $template;

        return $this;
    }

    public function getTemplateContent(): ?string
    {
        return $this->templateContent;
    }

    public function setTemplateContent(?string $templateContent): self
    {
        $this->templateContent = $templateContent;

        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    public function getBackup(): ?string
    {
        return $this->backup;
    }

    public function setBackup(?string $backup): self
    {
        $this->backup = $backup;

        return $this;
    }
}
