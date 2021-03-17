<?php

namespace App\Entity;

use App\Repository\AttachmentTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AttachmentTypeRepository::class)
 */
class AttachmentType
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
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=Attachment::class, mappedBy="attachmentType")
     */
    private $attachments;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $code;

    /**
     * @ORM\OneToMany(targetEntity=VhSectionPart::class, mappedBy="attachmentType")
     */
    private $vhSectionParts;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $codeAsitur;

    public function __construct()
    {
        $this->attachments = new ArrayCollection();
        $this->vhSectionParts = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
     * @return Collection|Attachment[]
     */
    public function getAttachments(): Collection
    {
        return $this->attachments;
    }

    public function addAttachment(Attachment $attachment): self
    {
        if (!$this->attachments->contains($attachment)) {
            $this->attachments[] = $attachment;
            $attachment->setAttachmentType($this);
        }

        return $this;
    }

    public function removeAttachment(Attachment $attachment): self
    {
        if ($this->attachments->contains($attachment)) {
            $this->attachments->removeElement($attachment);
            // set the owning side to null (unless already changed)
            if ($attachment->getAttachmentType() === $this) {
                $attachment->setAttachmentType(null);
            }
        }

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

    /**
     * @return Collection|VhSectionPart[]
     */
    public function getVhSectionParts(): Collection
    {
        return $this->vhSectionParts;
    }

    public function addVhSectionPart(VhSectionPart $vhSectionPart): self
    {
        if (!$this->vhSectionParts->contains($vhSectionPart)) {
            $this->vhSectionParts[] = $vhSectionPart;
            $vhSectionPart->setAttachmentType($this);
        }

        return $this;
    }

    public function removeVhSectionPart(VhSectionPart $vhSectionPart): self
    {
        if ($this->vhSectionParts->contains($vhSectionPart)) {
            $this->vhSectionParts->removeElement($vhSectionPart);
            // set the owning side to null (unless already changed)
            if ($vhSectionPart->getAttachmentType() === $this) {
                $vhSectionPart->setAttachmentType(null);
            }
        }

        return $this;
    }

    public function getCodeAsitur(): ?string
    {
        return $this->codeAsitur;
    }

    public function setCodeAsitur(?string $codeAsitur): self
    {
        $this->codeAsitur = $codeAsitur;

        return $this;
    }
}
