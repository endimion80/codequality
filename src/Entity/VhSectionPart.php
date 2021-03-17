<?php

namespace App\Entity;

use App\Repository\VhSectionPartRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VhSectionPartRepository::class)
 */
class VhSectionPart
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=VhPart::class, inversedBy="vhSectionParts")
     */
    private $vhPart;

    /**
     * @ORM\ManyToOne(targetEntity=VhType::class, inversedBy="vhSectionParts")
     */
    private $vhType;

    /**
     * @ORM\ManyToOne(targetEntity=VhSection::class, inversedBy="vhSectionParts")
     */
    private $vhSection;

    /**
     * @ORM\ManyToOne(targetEntity=AttachmentType::class, inversedBy="vhSectionParts")
     */
    private $attachmentType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVhPart(): ?VhPart
    {
        return $this->vhPart;
    }

    public function setVhPart(?VhPart $vhPart): self
    {
        $this->vhPart = $vhPart;

        return $this;
    }

    public function getVhType(): ?VhType
    {
        return $this->vhType;
    }

    public function setVhType(?VhType $vhType): self
    {
        $this->vhType = $vhType;

        return $this;
    }

    public function getVhSection(): ?VhSection
    {
        return $this->vhSection;
    }

    public function setVhSection(?VhSection $vhSection): self
    {
        $this->vhSection = $vhSection;

        return $this;
    }

    public function getAttachmentType(): ?AttachmentType
    {
        return $this->attachmentType;
    }

    public function setAttachmentType(?AttachmentType $attachmentType): self
    {
        $this->attachmentType = $attachmentType;

        return $this;
    }
}
