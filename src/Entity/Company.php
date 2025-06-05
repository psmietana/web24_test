<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\CompanyRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CompanyRepository::class)]
#[ApiResource]
class Company
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $name = null;

    #[ORM\Column(length: 15)]
    #[Assert\NotBlank]
    #[Assert\Length(max: 15)]
    private ?string $nip = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $address = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank]
    private ?string $city = null;

    #[ORM\Column(length: 6)]
    #[Assert\NotBlank]
    #[Assert\Length(max: 6)]
    private ?string $postalCode = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getNip(): ?string
    {
        return $this->nip;
    }

    public function setNip(string $nip): static
    {
        $this->nip = $nip;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): static
    {
        $this->city = $city;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode): static
    {
        $this->postalCode = $postalCode;

        return $this;
    }
}
