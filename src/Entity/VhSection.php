<?php

namespace App\Entity;

use App\Repository\VhSectionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VhSectionRepository::class)
 */
class VhSection
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity=VhSectionPart::class, mappedBy="vhSection")
     */
    private $vhSectionParts;

    public function __construct()
    {
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

    public function setDescription(string $description): self
    {
        $this->description = $description;

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
            $vhSectionPart->setVhSection($this);
        }

        return $this;
    }

    public function removeVhSectionPart(VhSectionPart $vhSectionPart): self
    {
        if ($this->vhSectionParts->contains($vhSectionPart)) {
            $this->vhSectionParts->removeElement($vhSectionPart);
            // set the owning side to null (unless already changed)
            if ($vhSectionPart->getVhSection() === $this) {
                $vhSectionPart->setVhSection(null);
            }
        }

        return $this;
    }
}
