<?php

namespace App\Entity;

use App\Repository\SurveyRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SurveyRepository::class)
 */
class Survey
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    
    private $email;

    /**
     * @ORM\Column(type="datetime_immutable", nullable=true)
     */
    private $createdAt;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $market;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $clothes = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $specialists = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $hospitals = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $aids = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $digits = [];

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $politics = [];

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getMarket(): ?string
    {
        return $this->market;
    }

    public function setMarket(?string $market): self
    {
        $this->market = $market;

        return $this;
    }

    public function getClothes(): array
    {
        return $this->clothes;
    }

    public function setClothes(?array $clothes): self
    {
        $this->clothes = $clothes;

        return $this;
    }

    public function getSpecialists(): array
    {
        return $this->specialists;
    }

    public function setSpecialists(?array $specialists): self
    {
        $this->specialists = $specialists;

        return $this;
    }

    public function getHospitals(): array
    {
        return $this->hospitals;
    }

    public function setHospitals(?array $hospitals): self
    {
        $this->hospitals = $hospitals;

        return $this;
    }

    public function getAids(): array
    {
        return $this->aids;
    }

    public function setAids(?array $aids): self
    {
        $this->aids = $aids;

        return $this;
    }

    public function getDigits(): array
    {
        return $this->digits;
    }

    public function setDigits(?array $digits): self
    {
        $this->digits = $digits;

        return $this;
    }

    public function getPolitics(): array
    {
        return $this->politics;
    }

    public function setPolitics(?array $politics): self
    {
        $this->politics = $politics;

        return $this;
    }
}
