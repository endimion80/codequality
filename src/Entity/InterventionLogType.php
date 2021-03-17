<?php

namespace App\Entity;

use App\Repository\InterventionLogTypeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InterventionLogTypeRepository::class)
 */
class InterventionLogType
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
    private $description;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $color;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $backgroundColor;

    /**
     * @ORM\OneToMany(targetEntity=InterventionLog::class, mappedBy="interventionLogType")
     */
    private $interventionLogs;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $code;

    public function __construct()
    {
        $this->interventionLogs = new ArrayCollection();
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

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getBackgroundColor(): ?string
    {
        return $this->backgroundColor;
    }

    public function setBackgroundColor(?string $backgroundColor): self
    {
        $this->backgroundColor = $backgroundColor;

        return $this;
    }

    /**
     * @return Collection|InterventionLog[]
     */
    public function getInterventionLogs(): Collection
    {
        return $this->interventionLogs;
    }

    public function addInterventionLog(InterventionLog $interventionLog): self
    {
        if (!$this->interventionLogs->contains($interventionLog)) {
            $this->interventionLogs[] = $interventionLog;
            $interventionLog->setInterventionLogType($this);
        }

        return $this;
    }

    public function removeInterventionLog(InterventionLog $interventionLog): self
    {
        if ($this->interventionLogs->contains($interventionLog)) {
            $this->interventionLogs->removeElement($interventionLog);
            // set the owning side to null (unless already changed)
            if ($interventionLog->getInterventionLogType() === $this) {
                $interventionLog->setInterventionLogType(null);
            }
        }

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

}
