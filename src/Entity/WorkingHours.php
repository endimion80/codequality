<?php

namespace App\Entity;

use App\Repository\WorkingHoursRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WorkingHoursRepository::class)
 */
class WorkingHours
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $hourFrom;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $hourTo;

    /**
     * @ORM\ManyToOne(targetEntity=Operator::class, inversedBy="workingHours")
     */
    private $operator;

    /**
     * @ORM\ManyToOne(targetEntity=Crane::class, inversedBy="workingHours")
     */
    private $crane;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $workingDay;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHourFrom(): ?string
    {
        return $this->hourFrom;
    }

    public function setHourFrom(?string $hourFrom): self
    {
        $this->hourFrom = $hourFrom;

        return $this;
    }

    public function getHourTo(): ?string
    {
        return $this->hourTo;
    }

    public function setHourTo(?string $hourTo): self
    {
        $this->hourTo = $hourTo;

        return $this;
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

    public function getWorkingDay(): ?string
    {
        return $this->workingDay;
    }

    public function setWorkingDay(string $workingDay): self
    {
        $this->workingDay = $workingDay;

        return $this;
    }
}
