<?php

namespace App\Entity;

use App\Repository\BranchOfficeRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BranchOfficeRepository::class)
 */
class BranchOffice
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Collaborator::class, inversedBy="branchOffices")
     */
    private $collaborator;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="datetime", nullable = true)
     */
    private $lastSyncDate;

    /**
     * @ORM\OneToMany(targetEntity=BranchOfficeCrane::class, mappedBy="branchOffice")
     */
    private $branchOfficeCranes;

    /**
     * @ORM\OneToMany(targetEntity=BranchOfficeOperator::class, mappedBy="branchOffice")
     */
    private $branchOfficeOperators;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $code;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $zone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sinisterEmail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $invoicingEmail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contactPerson;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephone2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephone3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $address;
    

    /**
     * @ORM\OneToMany(targetEntity=Attachment::class, mappedBy="branchOffice")
     */
    private $attachments;

    /**
     * @ORM\OneToMany(targetEntity=Intervention::class, mappedBy="branchOffice")
     */
    private $interventions;

    /**
     * @ORM\ManyToOne(targetEntity=Town::class, inversedBy="branchOffices")
     */
    private $town;

    /**
     * @ORM\ManyToOne(targetEntity=Province::class, inversedBy="branchOffices")
     */
    private $province;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $zipCode;

    /**
     * @ORM\OneToMany(targetEntity=Phone::class, mappedBy="branchOffice")
     */
    private $phones;

    /**
     * @ORM\OneToMany(targetEntity=Contact::class, mappedBy="branchOffice")
     */
    private $contacts;

    /**
     * @ORM\OneToMany(targetEntity=BranchOfficeService::class, mappedBy="branchOffice")
     */
    private $branchOfficeServices;

    /**
     * @ORM\OneToMany(targetEntity=RequestCrane::class, mappedBy="branchOffice")
     */
    private $requestCranes;

    /**
     * @ORM\OneToMany(targetEntity=Activity::class, mappedBy="branchOffice")
     */
    private $activities;

    public function __construct()
    {
        $this->branchOfficeCranes = new ArrayCollection();
        $this->branchOfficeOperators = new ArrayCollection();
        $this->attachments = new ArrayCollection();
        $this->interventions = new ArrayCollection();
        $this->phones = new ArrayCollection();
        $this->contacts = new ArrayCollection();
        $this->branchOfficeServices = new ArrayCollection();
        $this->requestCranes = new ArrayCollection();
        $this->activities = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLastSyncDate(): ?\DateTimeInterface
    {
        return $this->lastSyncDate;
    }

    public function setLastSyncDate(\DateTimeInterface $lastSyncDate): self
    {
        $this->lastSyncDate = $lastSyncDate;

        return $this;
    }

    /**
     * @return Collection|BranchOfficeCrane[]
     */
    public function getBranchOfficeCranes(): Collection
    {
        return $this->branchOfficeCranes;
    }

    public function addBranchOfficeCrane(BranchOfficeCrane $branchOfficeCrane): self
    {
        if (!$this->branchOfficeCranes->contains($branchOfficeCrane)) {
            $this->branchOfficeCranes[] = $branchOfficeCrane;
            $branchOfficeCrane->setBranchOffice($this);
        }

        return $this;
    }

    public function removeBranchOfficeCrane(BranchOfficeCrane $branchOfficeCrane): self
    {
        if ($this->branchOfficeCranes->contains($branchOfficeCrane)) {
            $this->branchOfficeCranes->removeElement($branchOfficeCrane);
            // set the owning side to null (unless already changed)
            if ($branchOfficeCrane->getBranchOffice() === $this) {
                $branchOfficeCrane->setBranchOffice(null);
            }
        }

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
            $branchOfficeOperator->setBranchOffice($this);
        }

        return $this;
    }

    public function removeBranchOfficeOperator(BranchOfficeOperator $branchOfficeOperator): self
    {
        if ($this->branchOfficeOperators->contains($branchOfficeOperator)) {
            $this->branchOfficeOperators->removeElement($branchOfficeOperator);
            // set the owning side to null (unless already changed)
            if ($branchOfficeOperator->getBranchOffice() === $this) {
                $branchOfficeOperator->setBranchOffice(null);
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

    public function getZone(): ?string
    {
        return $this->zone;
    }

    public function setZone(?string $zone): self
    {
        $this->zone = $zone;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getSinisterEmail(): ?string
    {
        return $this->sinisterEmail;
    }

    public function setSinisterEmail(string $sinisterEmail): self
    {
        $this->sinisterEmail = $sinisterEmail;

        return $this;
    }

    public function getInvoicingEmail(): ?string
    {
        return $this->invoicingEmail;
    }

    public function setInvoicingEmail(string $invoicingEmail): self
    {
        $this->invoicingEmail = $invoicingEmail;

        return $this;
    }

    public function getContactPerson(): ?string
    {
        return $this->contactPerson;
    }

    public function setContactPerson(string $contactPerson): self
    {
        $this->contactPerson = $contactPerson;

        return $this;
    }

    public function getTelephone2(): ?string
    {
        return $this->telephone2;
    }

    public function setTelephone2(?string $telephone2): self
    {
        $this->telephone2 = $telephone2;

        return $this;
    }

    public function getTelephone3(): ?string
    {
        return $this->telephone3;
    }

    public function setTelephone3(?string $telephone3): self
    {
        $this->telephone3 = $telephone3;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

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
            $attachment->setBranchOffice($this);
        }

        return $this;
    }

    public function removeAttachment(Attachment $attachment): self
    {
        if ($this->attachments->contains($attachment)) {
            $this->attachments->removeElement($attachment);
            // set the owning side to null (unless already changed)
            if ($attachment->getBranchOffice() === $this) {
                $attachment->setBranchOffice(null);
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
            $intervention->setBranchOffice($this);
        }

        return $this;
    }

    public function removeIntervention(Intervention $intervention): self
    {
        if ($this->interventions->contains($intervention)) {
            $this->interventions->removeElement($intervention);
            // set the owning side to null (unless already changed)
            if ($intervention->getBranchOffice() === $this) {
                $intervention->setBranchOffice(null);
            }
        }

        return $this;
    }

    public function getTown(): ?Town
    {
        return $this->town;
    }

    public function setTown(?Town $town): self
    {
        $this->town = $town;

        return $this;
    }

    public function getProvince(): ?Province
    {
        return $this->province;
    }

    public function setProvince(?Province $province): self
    {
        $this->province = $province;

        return $this;
    }

    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    public function setZipCode(?string $zipCode): self
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * @return Collection|Phone[]
     */
    public function getPhones(): Collection
    {
        return $this->phones;
    }

    public function addPhone(Phone $phone): self
    {
        if (!$this->phones->contains($phone)) {
            $this->phones[] = $phone;
            $phone->setBranchOffice($this);
        }

        return $this;
    }

    public function removePhone(Phone $phone): self
    {
        if ($this->phones->contains($phone)) {
            $this->phones->removeElement($phone);
            // set the owning side to null (unless already changed)
            if ($phone->getBranchOffice() === $this) {
                $phone->setBranchOffice(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Contact[]
     */
    public function getContacts(): Collection
    {
        return $this->contacts;
    }

    public function addContact(Contact $contact): self
    {
        if (!$this->contacts->contains($contact)) {
            $this->contacts[] = $contact;
            $contact->setBranchOffice($this);
        }

        return $this;
    }

    public function removeContact(Contact $contact): self
    {
        if ($this->contacts->contains($contact)) {
            $this->contacts->removeElement($contact);
            // set the owning side to null (unless already changed)
            if ($contact->getBranchOffice() === $this) {
                $contact->setBranchOffice(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|BranchOfficeService[]
     */
    public function getBranchOfficeServices(): Collection
    {
        return $this->branchOfficeServices;
    }

    public function addBranchOfficeService(BranchOfficeService $branchOfficeService): self
    {
        if (!$this->branchOfficeServices->contains($branchOfficeService)) {
            $this->branchOfficeServices[] = $branchOfficeService;
            $branchOfficeService->setBranchOffice($this);
        }

        return $this;
    }

    public function removeBranchOfficeService(BranchOfficeService $branchOfficeService): self
    {
        if ($this->branchOfficeServices->contains($branchOfficeService)) {
            $this->branchOfficeServices->removeElement($branchOfficeService);
            // set the owning side to null (unless already changed)
            if ($branchOfficeService->getBranchOffice() === $this) {
                $branchOfficeService->setBranchOffice(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|RequestCrane[]
     */
    public function getRequestCranes(): Collection
    {
        return $this->requestCranes;
    }

    public function addRequestCrane(RequestCrane $requestCrane): self
    {
        if (!$this->requestCranes->contains($requestCrane)) {
            $this->requestCranes[] = $requestCrane;
            $requestCrane->setBranchOffice($this);
        }

        return $this;
    }

    public function removeRequestCrane(RequestCrane $requestCrane): self
    {
        if ($this->requestCranes->removeElement($requestCrane)) {
            // set the owning side to null (unless already changed)
            if ($requestCrane->getBranchOffice() === $this) {
                $requestCrane->setBranchOffice(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Activity[]
     */
    public function getActivities(): Collection
    {
        return $this->activities;
    }

    public function addActivity(Activity $activity): self
    {
        if (!$this->activities->contains($activity)) {
            $this->activities[] = $activity;
            $activity->setBranchOffice($this);
        }

        return $this;
    }

    public function removeActivity(Activity $activity): self
    {
        if ($this->activities->removeElement($activity)) {
            // set the owning side to null (unless already changed)
            if ($activity->getBranchOffice() === $this) {
                $activity->setBranchOffice(null);
            }
        }

        return $this;
    }
}
