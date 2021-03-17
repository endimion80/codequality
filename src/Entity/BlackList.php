<?php

namespace App\Entity;

use App\Repository\BlackListRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BlackListRepository::class)
 */
class BlackList
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $reason;

    /**
     * @ORM\Column(type="boolean")
     */
    private $blockOnlyCommercialEmails = false;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $creationDate;
    
    public function __construct()
    {
        $this->creationDate = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getReason(): ?string
    {
        return $this->reason;
    }

    public function setReason(?string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }

    public function getBlockOnlyCommercialEmails(): ?bool
    {
        return $this->blockOnlyCommercialEmails;
    }

    public function setBlockOnlyCommercialEmails(bool $blockOnlyCommercialEmails): self
    {
        $this->blockOnlyCommercialEmails = $blockOnlyCommercialEmails;

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
}
