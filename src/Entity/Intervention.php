<?php

namespace App\Entity;

use App\Repository\InterventionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InterventionRepository::class)
 */
class Intervention
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isRIS = false;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastSyncDate;

    /**
     * @ORM\OneToMany(targetEntity=MailerLog::class, mappedBy="intervention")
     */
    private $mailerLogs;

    /**
     * @ORM\OneToMany(targetEntity=SmsLog::class, mappedBy="intervention")
     */
    private $smsLogs;

    /**
     * @ORM\ManyToOne(targetEntity=CancellationType::class, inversedBy="interventions")
     */
    private $cancellationType;

    /**
     * @ORM\ManyToOne(targetEntity=Crane::class, inversedBy="interventions")
     */
    private $crane;

    /**
     * @ORM\ManyToOne(targetEntity=Collaborator::class, inversedBy="interventions")
     */
    private $collaborator;

    /**
     * @ORM\ManyToOne(targetEntity=Collaborator::class, inversedBy="interventionsCreated")
     */
    private $collaboratorCreator;

    /**
     * @ORM\ManyToOne(targetEntity=InterventionStatus::class, inversedBy="interventions")
     */
    private $interventionStatus;

    /**
     * @ORM\OneToMany(targetEntity=Attachment::class, mappedBy="intervention")
     */
    private $attachments;

    /**
     * @ORM\ManyToOne(targetEntity=Operator::class, inversedBy="interventions")
     */
    private $operator;

    /**
     * @ORM\ManyToOne(targetEntity=SinisterType::class, inversedBy="interventions")
     */
    private $sinisterType;

    /**
     * @ORM\ManyToOne(targetEntity=SinisterTypeExtension::class, inversedBy="interventions")
     */
    private $sinisterTypeExtension;

    /**
     * @ORM\ManyToOne(targetEntity=FailureType::class, inversedBy="interventions")
     */
    private $failureType;

    /**
     * @ORM\ManyToOne(targetEntity=FailureCauseType::class, inversedBy="interventions")
     */
    private $failureCauseType;

    /**
     * @ORM\ManyToOne(targetEntity=RISCause::class, inversedBy="interventions")
     */
    private $risCause;

    /**
     * @ORM\ManyToOne(targetEntity=VhType::class, inversedBy="interventions")
     */
    private $vhType;

    /**
     * @ORM\ManyToOne(targetEntity=VhBrand::class, inversedBy="interventions")
     */
    private $vhBrand;

    /**
     * @ORM\ManyToOne(targetEntity=VhModel::class, inversedBy="interventions")
     */
    private $vhModel;

    /**
     * @ORM\ManyToOne(targetEntity=CollaboratorService::class, inversedBy="interventions")
     */
    private $collaboratorService;

    /**
     * @ORM\ManyToOne(targetEntity=InsuranceEntity::class, inversedBy="interventions")
     */
    private $insuranceEntity;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $receptionDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $requestType;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $requestDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $callerName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $callerLastname;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $callerPhone;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $vhPlate;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $vhAddress;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $vhZipcode;

    /**
     * @ORM\ManyToOne(targetEntity=Province::class, inversedBy="interventions")
     */
    private $vhProvince;

    /**
     * @ORM\ManyToOne(targetEntity=Town::class, inversedBy="interventions")
     */
    private $vhTown;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $vhLatitude;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $vhLongitude;

    /**
     * @ORM\Column(type="boolean")
     */
    private $vhParking = false;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vhComments;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $failureDescription;

    /**
     * @ORM\Column(type="boolean")
     */
    private $PossibleRIS = false;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $destinationName;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $destinationAddress;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $destinationZipcode;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $km;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fuel;

    /**
     * @ORM\Column(type="boolean")
     */
    private $companion = false;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $reference;

    /**
     * @ORM\ManyToOne(targetEntity=Province::class, inversedBy="interventionsDestination")
     */
    private $destinationProvince;

    /**
     * @ORM\ManyToOne(targetEntity=Town::class, inversedBy="interventionsDestination")
     */
    private $destinationTown;

    /**
     * @ORM\ManyToOne(targetEntity=Phase::class, inversedBy="interventions")
     */
    private $phase;

    /**
     * @ORM\OneToMany(targetEntity=PhaseLog::class, mappedBy="intervention")
     */
    private $phaseLogs;

    /**
     * @ORM\OneToMany(targetEntity=InterventionLog::class, mappedBy="intervention")
     */
    private $interventionLogs;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $initConfirmDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $endConfirmDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $repairDescription;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $destinationType;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $signerName;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $signerPhone;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $signerEmail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipmentAndObjects;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $dirtyVh = false;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $scratchesOnVh = false;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $signerAcknowledgesScratches = false;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $signerIsCompanion = false;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $deliveryName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $deliveryAddress;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $deliveryPhone;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $deliveryLatitude;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $deliveryLongitude;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $signerDni;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $clientSignature;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $receiverIsLocated = false;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $receiverName;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $receiverEmail;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $kmCheck;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $fuelCheck;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $equipmentAndObjectsCheck;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $dirtyVhCheck = false;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $scratchesOnVhCheck = false;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $receiverDni;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $receiverSignature;

    /**
     * @ORM\ManyToOne(targetEntity=WheelLock::class, inversedBy="interventions")
     */
    private $wheelLock;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $destinationIncidence = false;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $hasIncidence = false;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $hasDestinationFailure = false;

    /**
     * @ORM\OneToMany(targetEntity=InterventionFails::class, mappedBy="intervention")
     */
    private $interventionFails;

    /**
     * @ORM\ManyToOne(targetEntity=RISCauseOperator::class, inversedBy="interventions")
     */
    private $risCauseOperator;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $vhLock = 0;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $refuseDescription;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $distance = 0;

    /**
     * @ORM\ManyToOne(targetEntity=BranchOffice::class, inversedBy="interventions")
     */
    private $branchOffice;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $vhFullAddress;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $vhUbication;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $vhSituation;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $deliveryTown;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $deliveryProvince;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $deliveryZipcode;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $vhColor;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nCompanyPolicy;

    /**
     * @ORM\OneToMany(targetEntity=Budget::class, mappedBy="intervention")
     */
    private $budgets;

    public function __construct()
    {
        $this->mailerLogs = new ArrayCollection();
        $this->smsLogs = new ArrayCollection();
        $this->attachments = new ArrayCollection();
        $this->phaseLogs = new ArrayCollection();
        $this->interventionLogs = new ArrayCollection();
        $this->interventionFails = new ArrayCollection();
        $this->budgets = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsRIS(): ?bool
    {
        return $this->isRIS;
    }

    public function setIsRIS(bool $isRIS): self
    {
        $this->isRIS = $isRIS;

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

    /**
     * @return Collection|MailerLog[]
     */
    public function getMailerLogs(): Collection
    {
        return $this->mailerLogs;
    }

    public function addMailerLog(MailerLog $mailerLog): self
    {
        if (!$this->mailerLogs->contains($mailerLog)) {
            $this->mailerLogs[] = $mailerLog;
            $mailerLog->setIntervention($this);
        }

        return $this;
    }

    public function removeMailerLog(MailerLog $mailerLog): self
    {
        if ($this->mailerLogs->contains($mailerLog)) {
            $this->mailerLogs->removeElement($mailerLog);
            // set the owning side to null (unless already changed)
            if ($mailerLog->getIntervention() === $this) {
                $mailerLog->setIntervention(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|SmsLog[]
     */
    public function getSmsLogs(): Collection
    {
        return $this->smsLogs;
    }

    public function addSmsLog(SmsLog $smsLog): self
    {
        if (!$this->smsLogs->contains($smsLog)) {
            $this->smsLogs[] = $smsLog;
            $smsLog->setIntervention($this);
        }

        return $this;
    }

    public function removeSmsLog(SmsLog $smsLog): self
    {
        if ($this->smsLogs->contains($smsLog)) {
            $this->smsLogs->removeElement($smsLog);
            // set the owning side to null (unless already changed)
            if ($smsLog->getIntervention() === $this) {
                $smsLog->setIntervention(null);
            }
        }

        return $this;
    }

    public function getCancellationType(): ?CancellationType
    {
        return $this->cancellationType;
    }

    public function setCancellationType(?CancellationType $cancellationType): self
    {
        $this->cancellationType = $cancellationType;

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

    public function getCollaborator(): ?Collaborator
    {
        return $this->collaborator;
    }

    public function setCollaborator(?Collaborator $collaborator): self
    {
        $this->collaborator = $collaborator;

        return $this;
    }

    public function getCollaboratorCreator(): ?Collaborator
    {
        return $this->collaboratorCreator;
    }

    public function setCollaboratorCreator(?Collaborator $collaboratorCreator): self
    {
        $this->collaboratorCreator = $collaboratorCreator;

        return $this;
    }

    public function getInterventionStatus(): ?InterventionStatus
    {
        return $this->interventionStatus;
    }

    public function setInterventionStatus(?InterventionStatus $interventionStatus): self
    {
        $this->interventionStatus = $interventionStatus;

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
            $attachment->setIntervention($this);
        }

        return $this;
    }

    public function removeAttachment(Attachment $attachment): self
    {
        if ($this->attachments->contains($attachment)) {
            $this->attachments->removeElement($attachment);
            // set the owning side to null (unless already changed)
            if ($attachment->getIntervention() === $this) {
                $attachment->setIntervention(null);
            }
        }

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

    public function getSinisterType(): ?SinisterType
    {
        return $this->sinisterType;
    }

    public function setSinisterType(?SinisterType $sinisterType): self
    {
        $this->sinisterType = $sinisterType;

        return $this;
    }

    public function getSinisterTypeExtension(): ?SinisterTypeExtension
    {
        return $this->sinisterTypeExtension;
    }

    public function setSinisterTypeExtension(?SinisterTypeExtension $sinisterTypeExtension): self
    {
        $this->sinisterTypeExtension = $sinisterTypeExtension;

        return $this;
    }

    public function getFailureType(): ?FailureType
    {
        return $this->failureType;
    }

    public function setFailureType(?FailureType $failureType): self
    {
        $this->failureType = $failureType;

        return $this;
    }

    public function getFailureCauseType(): ?FailureCauseType
    {
        return $this->failureCauseType;
    }

    public function setFailureCauseType(?FailureCauseType $failureCauseType): self
    {
        $this->failureCauseType = $failureCauseType;

        return $this;
    }

    public function getRisCause(): ?RISCause
    {
        return $this->risCause;
    }

    public function setRisCause(?RISCause $risCause): self
    {
        $this->risCause = $risCause;

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

    public function getVhBrand(): ?VhBrand
    {
        return $this->vhBrand;
    }

    public function setVhBrand(?VhBrand $vhBrand): self
    {
        $this->vhBrand = $vhBrand;

        return $this;
    }

    public function getVhModel(): ?VhModel
    {
        return $this->vhModel;
    }

    public function setVhModel(?VhModel $vhModel): self
    {
        $this->vhModel = $vhModel;

        return $this;
    }

    public function getCollaboratorService(): ?CollaboratorService
    {
        return $this->collaboratorService;
    }

    public function setCollaboratorService(?CollaboratorService $collaboratorService): self
    {
        $this->collaboratorService = $collaboratorService;

        return $this;
    }

    public function getInsuranceEntity(): ?InsuranceEntity
    {
        return $this->insuranceEntity;
    }

    public function setInsuranceEntity(?InsuranceEntity $insuranceEntity): self
    {
        $this->insuranceEntity = $insuranceEntity;

        return $this;
    }

    public function getReceptionDate(): ?\DateTimeInterface
    {
        return $this->receptionDate;
    }

    public function setReceptionDate(?\DateTimeInterface $receptionDate): self
    {
        $this->receptionDate = $receptionDate;

        return $this;
    }

    public function getRequestType(): ?string
    {
        return $this->requestType;
    }

    public function setRequestType(?string $requestType): self
    {
        $this->requestType = $requestType;

        return $this;
    }

    public function getRequestDate(): ?\DateTimeInterface
    {
        return $this->requestDate;
    }

    public function setRequestDate(?\DateTimeInterface $requestDate): self
    {
        $this->requestDate = $requestDate;

        return $this;
    }

    public function getCallerName(): ?string
    {
        return $this->callerName;
    }

    public function setCallerName(?string $callerName): self
    {
        $this->callerName = $callerName;

        return $this;
    }

    public function getCallerLastname(): ?string
    {
        return $this->callerLastname;
    }

    public function setCallerLastname(?string $callerLastname): self
    {
        $this->callerLastname = $callerLastname;

        return $this;
    }

    public function getCallerPhone(): ?string
    {
        return $this->callerPhone;
    }

    public function setCallerPhone(?string $callerPhone): self
    {
        $this->callerPhone = $callerPhone;

        return $this;
    }

    public function getVhPlate(): ?string
    {
        return $this->vhPlate;
    }

    public function setVhPlate(?string $vhPlate): self
    {
        $this->vhPlate = $vhPlate;

        return $this;
    }

    public function getVhAddress(): ?string
    {
        return $this->vhAddress;
    }

    public function setVhAddress(?string $vhAddress): self
    {
        $this->vhAddress = $vhAddress;

        return $this;
    }

    public function getVhZipcode(): ?string
    {
        return $this->vhZipcode;
    }

    public function setVhZipcode(?string $vhZipcode): self
    {
        $this->vhZipcode = $vhZipcode;

        return $this;
    }

    public function getVhProvince(): ?Province
    {
        return $this->vhProvince;
    }

    public function setVhProvince(?Province $vhProvince): self
    {
        $this->vhProvince = $vhProvince;

        return $this;
    }

    public function getVhTown(): ?Town
    {
        return $this->vhTown;
    }

    public function setVhTown(?Town $vhTown): self
    {
        $this->vhTown = $vhTown;

        return $this;
    }

    public function getVhLatitude(): ?string
    {
        return $this->vhLatitude;
    }

    public function setVhLatitude(?string $vhLatitude): self
    {
        $this->vhLatitude = $vhLatitude;

        return $this;
    }

    public function getVhLongitude(): ?string
    {
        return $this->vhLongitude;
    }

    public function setVhLongitude(?string $vhLongitude): self
    {
        $this->vhLongitude = $vhLongitude;

        return $this;
    }

    public function getVhParking(): ?bool
    {
        return $this->vhParking;
    }

    public function setVhParking(bool $vhParking): self
    {
        $this->vhParking = $vhParking;

        return $this;
    }

    public function getVhComments(): ?string
    {
        return $this->vhComments;
    }

    public function setVhComments(?string $vhComments): self
    {
        $this->vhComments = $vhComments;

        return $this;
    }

    public function getFailureDescription(): ?string
    {
        return $this->failureDescription;
    }

    public function setFailureDescription(?string $failureDescription): self
    {
        $this->failureDescription = $failureDescription;

        return $this;
    }

    public function getPossibleRIS(): ?bool
    {
        return $this->PossibleRIS;
    }

    public function setPossibleRIS(bool $PossibleRIS): self
    {
        $this->PossibleRIS = $PossibleRIS;

        return $this;
    }

    public function getDestinationName(): ?string
    {
        return $this->destinationName;
    }

    public function setDestinationName(?string $destinationName): self
    {
        $this->destinationName = $destinationName;

        return $this;
    }

    public function getDestinationAddress(): ?string
    {
        return $this->destinationAddress;
    }

    public function setDestinationAddress(?string $destinationAddress): self
    {
        $this->destinationAddress = $destinationAddress;

        return $this;
    }

    public function getDestinationZipcode(): ?string
    {
        return $this->destinationZipcode;
    }

    public function setDestinationZipcode(?string $destinationZipcode): self
    {
        $this->destinationZipcode = $destinationZipcode;

        return $this;
    }

    public function getKm(): ?float
    {
        return $this->km;
    }

    public function setKm(?float $km): self
    {
        $this->km = $km;

        return $this;
    }

    public function getFuel(): ?int
    {
        return $this->fuel;
    }

    public function setFuel(?int $fuel): self
    {
        $this->fuel = $fuel;

        return $this;
    }

    public function getCompanion(): ?bool
    {
        return $this->companion;
    }

    public function setCompanion(bool $companion): self
    {
        $this->companion = $companion;

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

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    public function getDestinationProvince(): ?Province
    {
        return $this->destinationProvince;
    }

    public function setDestinationProvince(?Province $destinationProvince): self
    {
        $this->destinationProvince = $destinationProvince;

        return $this;
    }

    public function getDestinationTown(): ?Town
    {
        return $this->destinationTown;
    }

    public function setDestinationTown(?Town $destinationTown): self
    {
        $this->destinationTown = $destinationTown;

        return $this;
    }

    public function getPhase(): ?Phase
    {
        return $this->phase;
    }

    public function setPhase(?Phase $phase): self
    {
        $this->phase = $phase;

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
            $phaseLog->setIntervention($this);
        }

        return $this;
    }

    public function removePhaseLog(PhaseLog $phaseLog): self
    {
        if ($this->phaseLogs->contains($phaseLog)) {
            $this->phaseLogs->removeElement($phaseLog);
            // set the owning side to null (unless already changed)
            if ($phaseLog->getIntervention() === $this) {
                $phaseLog->setIntervention(null);
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
            $interventionLog->setIntervention($this);
        }

        return $this;
    }

    public function removeInterventionLog(InterventionLog $interventionLog): self
    {
        if ($this->interventionLogs->contains($interventionLog)) {
            $this->interventionLogs->removeElement($interventionLog);
            // set the owning side to null (unless already changed)
            if ($interventionLog->getIntervention() === $this) {
                $interventionLog->setIntervention(null);
            }
        }

        return $this;
    }

    public function getInitConfirmDate(): ?\DateTimeInterface
    {
        return $this->initConfirmDate;
    }

    public function setInitConfirmDate(?\DateTimeInterface $initConfirmDate): self
    {
        $this->initConfirmDate = $initConfirmDate;

        return $this;
    }

    public function getEndConfirmDate(): ?\DateTimeInterface
    {
        return $this->endConfirmDate;
    }

    public function setEndConfirmDate(?\DateTimeInterface $endConfirmDate): self
    {
        $this->endConfirmDate = $endConfirmDate;

        return $this;
    }

    public function getRepairDescription(): ?string
    {
        return $this->repairDescription;
    }

    public function setRepairDescription(?string $repairDescription): self
    {
        $this->repairDescription = $repairDescription;

        return $this;
    }

    public function getDestinationType(): ?string
    {
        return $this->destinationType;
    }

    public function setDestinationType(?string $destinationType): self
    {
        $this->destinationType = $destinationType;

        return $this;
    }

    public function getSignerName(): ?string
    {
        return $this->signerName;
    }

    public function setSignerName(?string $signerName): self
    {
        $this->signerName = $signerName;

        return $this;
    }

    public function getSignerPhone(): ?string
    {
        return $this->signerPhone;
    }

    public function setSignerPhone(?string $signerPhone): self
    {
        $this->signerPhone = $signerPhone;

        return $this;
    }

    public function getSignerEmail(): ?string
    {
        return $this->signerEmail;
    }

    public function setSignerEmail(?string $signerEmail): self
    {
        $this->signerEmail = $signerEmail;

        return $this;
    }

    public function getEquipmentAndObjects(): ?string
    {
        return $this->equipmentAndObjects;
    }

    public function setEquipmentAndObjects(?string $equipmentAndObjects): self
    {
        $this->equipmentAndObjects = $equipmentAndObjects;

        return $this;
    }

    public function getDirtyVh(): ?bool
    {
        return $this->dirtyVh;
    }

    public function setDirtyVh(?bool $dirtyVh): self
    {
        $this->dirtyVh = $dirtyVh;

        return $this;
    }

    public function getScratchesOnVh(): ?bool
    {
        return $this->scratchesOnVh;
    }

    public function setScratchesOnVh(?bool $scratchesOnVh): self
    {
        $this->scratchesOnVh = $scratchesOnVh;

        return $this;
    }

    public function getSignerAcknowledgesScratches(): ?bool
    {
        return $this->signerAcknowledgesScratches;
    }

    public function setSignerAcknowledgesScratches(?bool $signerAcknowledgesScratches): self
    {
        $this->signerAcknowledgesScratches = $signerAcknowledgesScratches;

        return $this;
    }

    public function getSignerIsCompanion(): ?bool
    {
        return $this->signerIsCompanion;
    }

    public function setSignerIsCompanion(?bool $signerIsCompanion): self
    {
        $this->signerIsCompanion = $signerIsCompanion;

        return $this;
    }

    public function getDeliveryName(): ?string
    {
        return $this->deliveryName;
    }

    public function setDeliveryName(?string $deliveryName): self
    {
        $this->deliveryName = $deliveryName;

        return $this;
    }

    public function getDeliveryAddress(): ?string
    {
        return $this->deliveryAddress;
    }

    public function setDeliveryAddress(?string $deliveryAddress): self
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    public function getDeliveryPhone(): ?string
    {
        return $this->deliveryPhone;
    }

    public function setDeliveryPhone(?string $deliveryPhone): self
    {
        $this->deliveryPhone = $deliveryPhone;

        return $this;
    }

    public function getDeliveryLatitude(): ?string
    {
        return $this->deliveryLatitude;
    }

    public function setDeliveryLatitude(?string $deliveryLatitude): self
    {
        $this->deliveryLatitude = $deliveryLatitude;

        return $this;
    }

    public function getDeliveryLongitude(): ?string
    {
        return $this->deliveryLongitude;
    }

    public function setDeliveryLongitude(?string $deliveryLongitude): self
    {
        $this->deliveryLongitude = $deliveryLongitude;

        return $this;
    }

    public function getSignerDni(): ?string
    {
        return $this->signerDni;
    }

    public function setSignerDni(?string $signerDni): self
    {
        $this->signerDni = $signerDni;

        return $this;
    }

    public function getClientSignature(): ?string
    {
        return $this->clientSignature;
    }

    public function setClientSignature(?string $clientSignature): self
    {
        $this->clientSignature = $clientSignature;

        return $this;
    }

    public function getReceiverIsLocated(): ?bool
    {
        return $this->receiverIsLocated;
    }

    public function setReceiverIsLocated(?bool $receiverIsLocated): self
    {
        $this->receiverIsLocated = $receiverIsLocated;

        return $this;
    }

    public function getReceiverName(): ?string
    {
        return $this->receiverName;
    }

    public function setReceiverName(?string $receiverName): self
    {
        $this->receiverName = $receiverName;

        return $this;
    }

    public function getReceiverEmail(): ?string
    {
        return $this->receiverEmail;
    }

    public function setReceiverEmail(?string $receiverEmail): self
    {
        $this->receiverEmail = $receiverEmail;

        return $this;
    }

    public function getKmCheck(): ?float
    {
        return $this->kmCheck;
    }

    public function setKmCheck(?float $kmCheck): self
    {
        $this->kmCheck = $kmCheck;

        return $this;
    }

    public function getFuelCheck(): ?int
    {
        return $this->fuelCheck;
    }

    public function setFuelCheck(?int $fuelCheck): self
    {
        $this->fuelCheck = $fuelCheck;

        return $this;
    }

    public function getEquipmentAndObjectsCheck(): ?string
    {
        return $this->equipmentAndObjectsCheck;
    }

    public function setEquipmentAndObjectsCheck(?string $equipmentAndObjectsCheck): self
    {
        $this->equipmentAndObjectsCheck = $equipmentAndObjectsCheck;

        return $this;
    }

    public function getDirtyVhCheck(): ?bool
    {
        return $this->dirtyVhCheck;
    }

    public function setDirtyVhCheck(?bool $dirtyVhCheck): self
    {
        $this->dirtyVhCheck = $dirtyVhCheck;

        return $this;
    }

    public function getScratchesOnVhCheck(): ?bool
    {
        return $this->scratchesOnVhCheck;
    }

    public function setScratchesOnVhCheck(?bool $scratchesOnVhCheck): self
    {
        $this->scratchesOnVhCheck = $scratchesOnVhCheck;

        return $this;
    }

    public function getReceiverDni(): ?string
    {
        return $this->receiverDni;
    }

    public function setReceiverDni(?string $receiverDni): self
    {
        $this->receiverDni = $receiverDni;

        return $this;
    }

    public function getReceiverSignature(): ?string
    {
        return $this->receiverSignature;
    }

    public function setReceiverSignature(?string $receiverSignature): self
    {
        $this->receiverSignature = $receiverSignature;

        return $this;
    }

    public function getWheelLock(): ?WheelLock
    {
        return $this->wheelLock;
    }

    public function setWheelLock(?WheelLock $wheelLock): self
    {
        $this->wheelLock = $wheelLock;

        return $this;
    }

    public function getDestinationIncidence(): ?bool
    {
        return $this->destinationIncidence;
    }

    public function setDestinationIncidence(?bool $destinationIncidence): self
    {
        $this->destinationIncidence = $destinationIncidence;

        return $this;
    }

    public function getHasIncidence(): ?bool
    {
        return $this->hasIncidence;
    }

    public function setHasIncidence(?bool $hasIncidence): self
    {
        $this->hasIncidence = $hasIncidence;

        return $this;
    }

    public function getHasDestinationFailure(): ?bool
    {
        return $this->hasDestinationFailure;
    }

    public function setHasDestinationFailure(?bool $hasDestinationFailure): self
    {
        $this->hasDestinationFailure = $hasDestinationFailure;

        return $this;
    }

    /**
     * @return Collection|InterventionFails[]
     */
    public function getInterventionFails(): Collection
    {
        return $this->interventionFails;
    }

    public function addInterventionFail(InterventionFails $interventionFail): self
    {
        if (!$this->interventionFails->contains($interventionFail)) {
            $this->interventionFails[] = $interventionFail;
            $interventionFail->setIntervention($this);
        }

        return $this;
    }

    public function removeInterventionFail(InterventionFails $interventionFail): self
    {
        if ($this->interventionFails->contains($interventionFail)) {
            $this->interventionFails->removeElement($interventionFail);
            // set the owning side to null (unless already changed)
            if ($interventionFail->getIntervention() === $this) {
                $interventionFail->setIntervention(null);
            }
        }

        return $this;
    }

    public function getRisCauseOperator(): ?RISCauseOperator
    {
        return $this->risCauseOperator;
    }

    public function setRisCauseOperator(?RISCauseOperator $risCauseOperator): self
    {
        $this->risCauseOperator = $risCauseOperator;

        return $this;
    }

    public function getVhLock(): ?int
    {
        return $this->vhLock;
    }

    public function setVhLock(?int $vhLock): self
    {
        $this->vhLock = $vhLock;

        return $this;
    }

    public function getRefuseDescription(): ?string
    {
        return $this->refuseDescription;
    }

    public function setRefuseDescription(?string $refuseDescription): self
    {
        $this->refuseDescription = $refuseDescription;

        return $this;
    }

    public function getDistance(): ?float
    {
        return $this->distance;
    }

    public function setDistance(?float $distance): self
    {
        $this->distance = $distance;

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

    public function getVhFullAddress(): ?string
    {
        return $this->vhFullAddress;
    }

    public function setVhFullAddress(string $vhFullAddress): self
    {
        $this->vhFullAddress = $vhFullAddress;

        return $this;
    }

    public function getVhUbication(): ?string
    {
        return $this->vhUbication;
    }

    public function setVhUbication(?string $vhUbication): self
    {
        $this->vhUbication = $vhUbication;

        return $this;
    }

    public function getVhSituation(): ?string
    {
        return $this->vhSituation;
    }

    public function setVhSituation(?string $vhSituation): self
    {
        $this->vhSituation = $vhSituation;

        return $this;
    }

    public function getDeliveryTown(): ?string
    {
        return $this->deliveryTown;
    }

    public function setDeliveryTown(?string $deliveryTown): self
    {
        $this->deliveryTown = $deliveryTown;

        return $this;
    }

    public function getDeliveryProvince(): ?string
    {
        return $this->deliveryProvince;
    }

    public function setDeliveryProvince(?string $deliveryProvince): self
    {
        $this->deliveryProvince = $deliveryProvince;

        return $this;
    }

    public function getDeliveryZipcode(): ?string
    {
        return $this->deliveryZipcode;
    }

    public function setDeliveryZipcode(?string $deliveryZipcode): self
    {
        $this->deliveryZipcode = $deliveryZipcode;

        return $this;
    }

    public function getVhColor(): ?string
    {
        return $this->vhColor;
    }

    public function setVhColor(?string $vhColor): self
    {
        $this->vhColor = $vhColor;

        return $this;
    }

    public function getNCompanyPolicy(): ?string
    {
        return $this->nCompanyPolicy;
    }

    public function setNCompanyPolicy(?string $nCompanyPolicy): self
    {
        $this->nCompanyPolicy = $nCompanyPolicy;

        return $this;
    }

    /**
     * @return Collection|Budget[]
     */
    public function getBudgets(): Collection
    {
        return $this->budgets;
    }

    public function addBudget(Budget $budget): self
    {
        if (!$this->budgets->contains($budget)) {
            $this->budgets[] = $budget;
            $budget->setIntervention($this);
        }

        return $this;
    }

    public function removeBudget(Budget $budget): self
    {
        if ($this->budgets->removeElement($budget)) {
            // set the owning side to null (unless already changed)
            if ($budget->getIntervention() === $this) {
                $budget->setIntervention(null);
            }
        }

        return $this;
    }
}
