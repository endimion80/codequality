<?php

namespace App\Entity;

use App\Repository\TranslationsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TranslationsRepository::class)
 */
class Translations
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $source;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $es;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $en;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $fr;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $it;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $pt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $needCheck = false;

    /**
     * @ORM\Column(type="boolean")
     */
    private $firstTranslation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(string $source): self
    {
        $this->source = $source;

        return $this;
    }

    public function getEs(): ?string
    {
        return $this->es;
    }

    public function setEs(?string $es): self
    {
        $this->es = $es;

        return $this;
    }

    public function getEn(): ?string
    {
        return $this->en;
    }

    public function setEn(?string $en): self
    {
        $this->en = $en;

        return $this;
    }

    public function getFr(): ?string
    {
        return $this->fr;
    }

    public function setFr(?string $fr): self
    {
        $this->fr = $fr;

        return $this;
    }

    public function getIt(): ?string
    {
        return $this->it;
    }

    public function setIt(?string $it): self
    {
        $this->it = $it;

        return $this;
    }

    public function getPt(): ?string
    {
        return $this->pt;
    }

    public function setPt(?string $pt): self
    {
        $this->pt = $pt;

        return $this;
    }

    public function getNeedCheck(): ?bool
    {
        return $this->needCheck;
    }

    public function setNeedCheck(bool $needCheck): self
    {
        $this->needCheck = $needCheck;

        return $this;
    }

    public function getFirstTranslation(): ?bool
    {
        return $this->firstTranslation;
    }

    public function setFirstTranslation(bool $firstTranslation): self
    {
        $this->firstTranslation = $firstTranslation;

        return $this;
    }
}
