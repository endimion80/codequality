<?php

namespace App\Entity;

use App\Repository\AttachmentRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AttachmentRepository::class)
 */
class Attachment
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Intervention::class, inversedBy="attachments")
     */
    private $intervention;

    /**
     * @ORM\ManyToOne(targetEntity=Crane::class, inversedBy="attachments")
     */
    private $crane;

    /**
     * @ORM\ManyToOne(targetEntity=AttachmentType::class, inversedBy="attachments")
     */
    private $attachmentType;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $fileName;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $filePath;

    /**
     * @ORM\Column(type="datetime")
     */
    private $creationDate;

    /**
     * @ORM\ManyToOne(targetEntity=Operator::class, inversedBy="attachments")
     */
    private $operator;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $latitude;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $longitude;
    
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $fileData;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descriptionExtra;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $total;

    /**
     * @ORM\ManyToOne(targetEntity=BranchOffice::class, inversedBy="attachments")
     */
    private $branchOffice;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $photoType;

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

    public function getCrane(): ?Crane
    {
        return $this->crane;
    }

    public function setCrane(?Crane $crane): self
    {
        $this->crane = $crane;

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

    public function getFilename(): ?string
    {
        return $this->fileName;
    }

    public function setFilename(?string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }

    public function getFilePath(): ?string
    {
        return $this->filePath;
    }

    public function setFilePath(string $filePath): self
    {
        $this->filePath = $filePath;

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

    public function getOperator(): ?Operator
    {
        return $this->operator;
    }

    public function setOperator(?Operator $operator): self
    {
        $this->operator = $operator;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    
    public function getFileData(): ?string
    {
        return $this->fileData;
    }
    
    public function setFileData(?string $fileData): self
    {
        $this->fileData = $fileData;
        
        return $this;
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
    
    public function getDescriptionExtra(): ?string
    {
        return $this->descriptionExtra;
    }
    
    public function setDescriptionExtra(?string $descriptionExtra): self
    {
        $this->descriptionExtra = $descriptionExtra;
    
        return $this;
    }

    public function getTotal(): ?float
    {
        return $this->total;
    }

    public function setTotal(?float $total): self
    {
        $this->total = $total;

        return $this;
    }

    public function getBranchOffice(): ?BranchOffice
    {
        return $this->branchOffice;
    }

    public function setBranchOffice(?BranchOffice $branchOffice): self
    {
        $this->branchOffice = $branchOffice;

        return $this;
    }

    public function getPhotoType(): ?string
    {
        return $this->photoType;
    }

    public function setPhotoType(?string $photoType): self
    {
        $this->photoType = $photoType;

        return $this;
    }
}
