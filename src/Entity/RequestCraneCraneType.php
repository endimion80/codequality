<?php

namespace App\Entity;

use App\Repository\RequestCraneCraneTypeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RequestCraneCraneTypeRepository::class)
 */
class RequestCraneCraneType
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=CraneType::class, inversedBy="requestCraneCraneTypes")
     */
    private $craneType;

    /**
     * @ORM\ManyToOne(targetEntity=RequestCrane::class, inversedBy="requestCraneCraneTypes")
     */
    private $requestCrane;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCraneType(): ?CraneType
    {
        return $this->craneType;
    }

    public function setCraneType(?CraneType $craneType): self
    {
        $this->craneType = $craneType;

        return $this;
    }

    public function getRequestCrane(): ?RequestCrane
    {
        return $this->requestCrane;
    }

    public function setRequestCrane(?RequestCrane $requestCrane): self
    {
        $this->requestCrane = $requestCrane;

        return $this;
    }
}
