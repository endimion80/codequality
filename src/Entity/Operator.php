<?php

namespace App\Entity;

use App\Repository\OperatorRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=OperatorRepository::class)
 */
class Operator implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true, nullable = true)
     */
    private $username;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string", nullable = true)
     */
    private $password;

    /**
     * @ORM\ManyToOne(targetEntity=Crane::class, inversedBy="operators")
     */
    private $crane;

    /**
     * @ORM\ManyToOne(targetEntity=OperatorStatus::class, inversedBy="operators")
     */
    private $operatorStatus;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $dni;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $mobile;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $deletionDate;

    /**
     * @ORM\Column(type="string", length=100, nullable=true, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $latitude;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $longitude;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastPositionDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastSyncDate;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $recoveryPasswordToken;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $recoveryPasswordLimitDate;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $timezone = 'Europe/Paris';

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastAccess;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $locale = 'es';

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $comments;

    /**
     * @ORM\OneToMany(targetEntity=BranchOfficeOperator::class, mappedBy="operator")
     */
    private $branchOfficeOperators;

    /**
     * @ORM\OneToMany(targetEntity=Attachment::class, mappedBy="operator")
     */
    private $attachments;

    /**
     * @ORM\OneToMany(targetEntity=Intervention::class, mappedBy="operator")
     */
    private $interventions;

    /**
     * @ORM\OneToMany(targetEntity=InterventionLog::class, mappedBy="operator")
     */
    private $interventionLogs;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $apiKey;

    /**
     * @ORM\OneToMany(targetEntity=WorkingHours::class, mappedBy="operator")
     */
    private $workingHours;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $code;

    /**
     * @ORM\OneToMany(targetEntity=PhaseLog::class, mappedBy="operator")
     */
    private $phaseLogs;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $dateFormat = 'Y-m-d H:i:s';

    /**
     * @ORM\OneToMany(targetEntity=Geoposition::class, mappedBy="operator")
     */
    private $geopositions;

    /**
     * @ORM\ManyToOne(targetEntity=AvailabilityOperatorStatus::class, inversedBy="operators")
     */
    private $availabilityOperatorStatus;

    /**
     * @ORM\ManyToOne(targetEntity=Collaborator::class, inversedBy="operators")
     */
    private $collaborator;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $reference;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $firebaseDatetime;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firebaseDevice;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firebaseGcm;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $firebasePlatform;

    /**
     * @ORM\OneToMany(targetEntity=OperatorAvailableCranes::class, mappedBy="operator")
     */
    private $operatorAvailableCranes;

    public function __construct()
    {
        $this->branchOfficeOperators = new ArrayCollection();
        $this->attachments = new ArrayCollection();
        $this->interventions = new ArrayCollection();
        $this->interventionLogs = new ArrayCollection();

        $this->creationDate = new \DateTime();
        $this->workingHours = new ArrayCollection();
        $this->phaseLogs = new ArrayCollection();
        $this->geopositions = new ArrayCollection();
        $this->operatorAvailableCranes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_API';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;
        $this->apiKey = ''; // forzamos que se vuelva a generar
        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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

    public function getOperatorStatus(): ?OperatorStatus
    {
        return $this->operatorStatus;
    }

    public function setOperatorStatus(?OperatorStatus $operatorStatus): self
    {
        $this->operatorStatus = $operatorStatus;

        return $this;
    }

    public function getDni(): ?string
    {
        return $this->dni;
    }

    public function setDni(string $dni): self
    {
        $this->dni = $dni;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;

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

    public function getDeletionDate(): ?\DateTimeInterface
    {
        return $this->deletionDate;
    }

    public function setDeletionDate(?\DateTimeInterface $deletionDate): self
    {
        $this->deletionDate = $deletionDate;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

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

    public function getLastPositionDate(): ?\DateTimeInterface
    {
        return $this->lastPositionDate;
    }

    public function setLastPositionDate(?\DateTimeInterface $lastPositionDate): self
    {
        $this->lastPositionDate = $lastPositionDate;

        return $this;
    }

    public function getLastSyncDate(): ?\DateTimeInterface
    {
        return $this->lastSyncDate;
    }

    public function setLastSyncDate(?\DateTimeInterface $lastSyncDate): self
    {
        $this->lastSyncDate = $lastSyncDate;

        return $this;
    }

    public function getRecoveryPasswordToken(): ?string
    {
        return $this->recoveryPasswordToken;
    }

    public function setRecoveryPasswordToken(?string $recoveryPasswordToken): self
    {
        $this->recoveryPasswordToken = $recoveryPasswordToken;

        return $this;
    }

    public function getRecoveryPasswordLimitDate(): ?\DateTimeInterface
    {
        return $this->recoveryPasswordLimitDate;
    }

    public function setRecoveryPasswordLimitDate(?\DateTimeInterface $recoveryPasswordLimitDate): self
    {
        $this->recoveryPasswordLimitDate = $recoveryPasswordLimitDate;

        return $this;
    }

    public function getTimezone(): ?string
    {
        return $this->timezone;
    }

    public function setTimezone(?string $timezone): self
    {
        $this->timezone = $timezone;

        return $this;
    }

    public function getLastAccess(): ?\DateTimeInterface
    {
        return $this->lastAccess;
    }

    public function setLastAccess(?\DateTimeInterface $lastAccess): self
    {
        $this->lastAccess = $lastAccess;

        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    public function getComments(): ?string
    {
        return $this->comments;
    }

    public function setComments(?string $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * @return Collection|BranchOfficeOperator[]
     */
    public function getBranchOfficeOperators(): Collection
    {
        return $this->branchOfficeOperators;
    }

    public function addBranchOfficeOperator(BranchOfficeOperator $branchOfficeOperator): self
    {
        if (!$this->branchOfficeOperators->contains($branchOfficeOperator)) {
            $this->branchOfficeOperators[] = $branchOfficeOperator;
            $branchOfficeOperator->setOperator($this);
        }

        return $this;
    }

    public function removeBranchOfficeOperator(BranchOfficeOperator $branchOfficeOperator): self
    {
        if ($this->branchOfficeOperators->contains($branchOfficeOperator)) {
            $this->branchOfficeOperators->removeElement($branchOfficeOperator);
            // set the owning side to null (unless already changed)
            if ($branchOfficeOperator->getOperator() === $this) {
                $branchOfficeOperator->setOperator(null);
            }
        }

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
            $attachment->setOperator($this);
        }

        return $this;
    }

    public function removeAttachment(Attachment $attachment): self
    {
        if ($this->attachments->contains($attachment)) {
            $this->attachments->removeElement($attachment);
            // set the owning side to null (unless already changed)
            if ($attachment->getOperator() === $this) {
                $attachment->setOperator(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Intervention[]
     */
    public function getInterventions(): Collection
    {
        return $this->interventions;
    }

    public function addIntervention(Intervention $intervention): self
    {
        if (!$this->interventions->contains($intervention)) {
            $this->interventions[] = $intervention;
            $intervention->setOperator($this);
        }

        return $this;
    }

    public function removeIntervention(Intervention $intervention): self
    {
        if ($this->interventions->contains($intervention)) {
            $this->interventions->removeElement($intervention);
            // set the owning side to null (unless already changed)
            if ($intervention->getOperator() === $this) {
                $intervention->setOperator(null);
            }
        }

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
            $interventionLog->setOperator($this);
        }

        return $this;
    }

    public function removeInterventionLog(InterventionLog $interventionLog): self
    {
        if ($this->interventionLogs->contains($interventionLog)) {
            $this->interventionLogs->removeElement($interventionLog);
            // set the owning side to null (unless already changed)
            if ($interventionLog->getOperator() === $this) {
                $interventionLog->setOperator(null);
            }
        }

        return $this;
    }

    public function getApiKey(): ?string
    {
        return $this->apiKey;
    }

    public function setApiKey(?string $apiKey): self
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * @return Collection|WorkingHours[]
     */
    public function getWorkingHours(): Collection
    {
        return $this->workingHours;
    }

    public function addWorkingHour(WorkingHours $workingHour): self
    {
        if (!$this->workingHours->contains($workingHour)) {
            $this->workingHours[] = $workingHour;
            $workingHour->setOperator($this);
        }

        return $this;
    }

    public function removeWorkingHour(WorkingHours $workingHour): self
    {
        if ($this->workingHours->contains($workingHour)) {
            $this->workingHours->removeElement($workingHour);
            // set the owning side to null (unless already changed)
            if ($workingHour->getOperator() === $this) {
                $workingHour->setOperator(null);
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

    /**
     * @return Collection|PhaseLog[]
     */
    public function getPhaseLogs(): Collection
    {
        return $this->phaseLogs;
    }

    public function addPhaseLog(PhaseLog $phaseLog): self
    {
        if (!$this->phaseLogs->contains($phaseLog)) {
            $this->phaseLogs[] = $phaseLog;
            $phaseLog->setOperator($this);
        }

        return $this;
    }

    public function removePhaseLog(PhaseLog $phaseLog): self
    {
        if ($this->phaseLogs->contains($phaseLog)) {
            $this->phaseLogs->removeElement($phaseLog);
            // set the owning side to null (unless already changed)
            if ($phaseLog->getOperator() === $this) {
                $phaseLog->setOperator(null);
            }
        }

        return $this;
    }

    public function getDateFormat(): ?string
    {
        return $this->dateFormat;
    }

    public function setDateFormat(?string $dateFormat): self
    {
        $this->dateFormat = $dateFormat;

        return $this;
    }

    /**
     * @return Collection|Geoposition[]
     */
    public function getGeopositions(): Collection
    {
        return $this->geopositions;
    }

    public function addGeoposition(Geoposition $geoposition): self
    {
        if (!$this->geopositions->contains($geoposition)) {
            $this->geopositions[] = $geoposition;
            $geoposition->setOperator($this);
        }

        return $this;
    }

    public function removeGeoposition(Geoposition $geoposition): self
    {
        if ($this->geopositions->contains($geoposition)) {
            $this->geopositions->removeElement($geoposition);
            // set the owning side to null (unless already changed)
            if ($geoposition->getOperator() === $this) {
                $geoposition->setOperator(null);
            }
        }

        return $this;
    }

    public function getAvailabilityOperatorStatus(): ?AvailabilityOperatorStatus
    {
        return $this->availabilityOperatorStatus;
    }

    public function setAvailabilityOperatorStatus(?AvailabilityOperatorStatus $availabilityOperatorStatus): self
    {
        $this->availabilityOperatorStatus = $availabilityOperatorStatus;

        return $this;
    }

    public function getCollaborator(): ?Collaborator
    {
        return $this->collaborator;
    }

    public function setCollaborator(?Collaborator $collaborator): self
    {
        $this->collaborator = $collaborator;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getFirebaseDatetime(): ?\DateTimeInterface
    {
        return $this->firebaseDatetime;
    }

    public function setFirebaseDatetime(?\DateTimeInterface $firebaseDatetime): self
    {
        $this->firebaseDatetime = $firebaseDatetime;

        return $this;
    }
    
    /**
     * @return Collection|OperatorAvailableCranes[]
     */
    public function getOperatorAvailableCranes(): Collection
    {
        return $this->operatorAvailableCranes;
    }

    public function addOperatorAvailableCrane(OperatorAvailableCranes $operatorAvailableCrane): self
    {
        if (!$this->operatorAvailableCranes->contains($operatorAvailableCrane)) {
            $this->operatorAvailableCranes[] = $operatorAvailableCrane;
            $operatorAvailableCrane->setOperator($this);
        }

        return $this;
    }

    public function getFirebaseDevice(): ?string
    {
        return $this->firebaseDevice;
    }

    public function setFirebaseDevice(?string $firebaseDevice): self
    {
        $this->firebaseDevice = $firebaseDevice;

        return $this;
    }

    public function getFirebaseGcm(): ?string
    {
        return $this->firebaseGcm;
    }

    public function setFirebaseGcm(?string $firebaseGcm): self
    {
        $this->firebaseGcm = $firebaseGcm;

        return $this;
    }

    public function getFirebasePlatform(): ?string
    {
        return $this->firebasePlatform;
    }

    public function setFirebasePlatform(?string $firebasePlatform): self
    {
        $this->firebasePlatform = $firebasePlatform;

        return $this;
    }
    
    public function removeOperatorAvailableCrane(OperatorAvailableCranes $operatorAvailableCrane): self
    {
        if ($this->operatorAvailableCranes->contains($operatorAvailableCrane)) {
            $this->operatorAvailableCranes->removeElement($operatorAvailableCrane);
            // set the owning side to null (unless already changed)
            if ($operatorAvailableCrane->getOperator() === $this) {
                $operatorAvailableCrane->setOperator(null);
            }
        }

        return $this;
    }
}
