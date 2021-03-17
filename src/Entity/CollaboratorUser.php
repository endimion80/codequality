<?php

namespace App\Entity;

use App\Repository\CollaboratorUserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=CollaboratorUserRepository::class)
 */
class CollaboratorUser implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\ManyToOne(targetEntity=Collaborator::class, inversedBy="collaboratorUsers")
     */
    private $collaborator;

    /**
     * @ORM\Column(type="string", length=100, nullable=true, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $cif;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $creationDate;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $deletionDate;

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
     * @ORM\OneToMany(targetEntity=InterventionLog::class, mappedBy="collaboratorUser")
     */
    private $interventionLogs;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $dateFormat = 'Y-m-d H:i:s';

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email_notification;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $email_notification_active = false;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $dateFormatSql = '%Y-%m-%d';

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $hourFormat = 'H:i';

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $hourFormatSql = '%H:%i';

    

    public function __construct()
    {
        $this->interventionLogs = new ArrayCollection();

        $this->creationDate = new \DateTime();
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
        $roles[] = 'ROLE_USER';

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


    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCif(): ?string
    {
        return $this->cif;
    }

    public function setCif(?string $cif): self
    {
        $this->cif = $cif;

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
            $interventionLog->setCollaboratorUser($this);
        }

        return $this;
    }

    public function removeInterventionLog(InterventionLog $interventionLog): self
    {
        if ($this->interventionLogs->contains($interventionLog)) {
            $this->interventionLogs->removeElement($interventionLog);
            // set the owning side to null (unless already changed)
            if ($interventionLog->getCollaboratorUser() === $this) {
                $interventionLog->setCollaboratorUser(null);
            }
        }

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

    public function getDateFormat(): ?string
    {
        return $this->dateFormat;
    }

    public function setDateFormat(?string $dateFormat): self
    {
        $this->dateFormat = $dateFormat;

        return $this;
    }

    public function getEmailNotification(): ?string
    {
        return $this->email_notification;
    }

    public function setEmailNotification(?string $email_notification): self
    {
        $this->email_notification = $email_notification;

        return $this;
    }

    public function getEmailNotificationActive(): ?bool
    {
        return $this->email_notification_active;
    }

    public function setEmailNotificationActive(?bool $email_notification_active): self
    {
        $this->email_notification_active = $email_notification_active;

        return $this;
    }

    public function getDateFormatSql(): ?string
    {
        return $this->dateFormatSql;
    }

    public function setDateFormatSql(?string $dateFormatSql): self
    {
        $this->dateFormatSql = $dateFormatSql;

        return $this;
    }

    public function getHourFormat(): ?string
    {
        return $this->hourFormat;
    }

    public function setHourFormat(?string $hourFormat): self
    {
        $this->hourFormat = $hourFormat;

        return $this;
    }

    public function getHourFormatSql(): ?string
    {
        return $this->hourFormatSql;
    }

    public function setHourFormatSql(?string $hourFormatSql): self
    {
        $this->hourFormatSql = $hourFormatSql;

        return $this;
    }

    public function getFullDateFormat(){
        $dateFormat = "";
        if ($this->dateFormat != '')
            $dateFormat .= $this->dateFormat;
        else 
            $dateFormat .= "Y-m-d"; 
        
        if ($this->hourFormat != '')
            $dateFormat .= " " . $this->hourFormat;
        else 
            $dateFormat .= " H:i";
        return $dateFormat;
    }

    public function getFullDateFormatSql(){
        $dateFormatSql = "";
        if ($this->dateFormatSql != '')
            $dateFormatSql .= $this->dateFormatSql;
        else 
            $dateFormatSql .= "%Y-%m-%d"; 
        
        if ($this->hourFormatSql != '')
            $dateFormatSql .= " " . $this->hourFormatSql;
        else 
            $dateFormatSql .= " %H:%i";
        return $dateFormatSql;
    }
}
