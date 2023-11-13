<?php

namespace App\Entity;

use App\Repository\ServicesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServicesRepository::class)]
class Services
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $electrique = null;

    #[ORM\Column(length: 255)]
    private ?string $vehicule = null;

    #[ORM\Column(length: 255)]
    private ?string $maintenance = null;

    #[ORM\Column(length: 255)]
    private ?string $reparation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getElectrique(): ?string
    {
        return $this->electrique;
    }

    public function setElectrique(string $electrique): static
    {
        $this->electrique = $electrique;

        return $this;
    }

    public function getVehicule(): ?string
    {
        return $this->vehicule;
    }

    public function setVehicule(string $vehicule): static
    {
        $this->vehicule = $vehicule;

        return $this;
    }

    public function getMaintenance(): ?string
    {
        return $this->maintenance;
    }

    public function setMaintenance(string $maintenance): static
    {
        $this->maintenance = $maintenance;

        return $this;
    }

    public function getRéparation(): ?string
    {
        return $this->reparation;
    }

    public function setRéparation(string $réparation): static
    {
        $this->reparation = $réparation;

        return $this;
    }

    public function getReparation(): ?string
    {
        return $this->reparation;
    }

    public function setReparation(string $reparation): static
    {
        $this->reparation = $reparation;

        return $this;
    }
}
