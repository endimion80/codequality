<?php

namespace App\Entity;

use App\Repository\OperatorAvailableCranesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OperatorAvailableCranesRepository::class)
 */
class OperatorAvailableCranes
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Operator::class, inversedBy="operatorAvailableCranes")
     */
    private $operator;

    /**
     * @ORM\ManyToOne(targetEntity=Crane::class, inversedBy="operatorAvailableCranes")
     */
    private $crane;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOperator(): ?Operator
    {
        return $this->operator;
    }

    public function setOperator(?Operator $operator): self
    {
        $this->operator = $operator;

        return $this;
    }

    public function getCrane(): ?Crane
    {
        return $this->crane;
    }

    public function setCrane(?Crane $crane): self
    {
        $this->crane = $crane;

        return $this;
    }
}
