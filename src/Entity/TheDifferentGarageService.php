<?php

namespace App\Entity;

use App\Repository\TheDifferentGarageServiceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: TheDifferentGarageServiceRepository::class)]
class TheDifferentGarageService
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $electricCarSale = null;

    #[ORM\Column(length: 255)]
    private ?string $vehiclePurchase = null;

    #[ORM\Column(length: 255)]
    private ?string $bioethanol = null;

    #[ORM\Column(length: 255)]
    private ?string $vehicleMaintenance = null;

    #[ORM\Column(length: 255)]
    private ?string $vehicleRepair = null;

    #[ORM\Column(length: 255)]
    private ?string $repair = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getElectricCarSale(): ?string
    {
        return $this->electricCarSale;
    }

    public function setElectricCarSale(string $electricCarSale): static
    {
        $this->electricCarSale = $electricCarSale;

        return $this;
    }

    public function getVehiclePurchase(): ?string
    {
        return $this->vehiclePurchase;
    }

    public function setVehiclePurchase(string $vehiclePurchase): static
    {
        $this->vehiclePurchase = $vehiclePurchase;

        return $this;
    }

    public function getBioethanol(): ?string
    {
        return $this->bioethanol;
    }

    public function setBioethanol(string $bioethanol): static
    {
        $this->bioethanol = $bioethanol;

        return $this;
    }

    public function getVehicleMaintenance(): ?string
    {
        return $this->vehicleMaintenance;
    }

    public function setVehicleMaintenance(string $vehicleMaintenance): static
    {
        $this->vehicleMaintenance = $vehicleMaintenance;

        return $this;
    }

    public function getVehicleRepair(): ?string
    {
        return $this->vehicleRepair;
    }

    public function setVehicleRepair(string $vehicleRepair): static
    {
        $this->vehicleRepair = $vehicleRepair;

        return $this;
    }

    public function getRepair(): ?string
    {
        return $this->repair;
    }

    public function setRepair(string $repair): static
    {
        $this->repair = $repair;

        return $this;
    }
}
