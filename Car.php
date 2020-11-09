<?php

require_once 'Vehicle.php';

class Car extends Vehicle
require_once 'LightableInterface.php';

class Car extends Vehicle implements LightableInterface
{

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    protected $hasParkBrake = true;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }
    public function getHasParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    public function switchOn(): boolean
    {
        return true;
    }

    public function switchOff(): boolean
    {
        return false;
    }

    public function setHasParkBrake($hasParkBreak)
    {
        $this->hasParkBrake = $hasParkBreak;
    }
    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function start(): string
    {
        if ($this->hasParkBrake === true)
            throw(new Exception("Frein à main bloqué."));
        else
            $this->currentSpeed = 3; // Car starts to roll forward, like in "real life"
        return "Car started !";
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function switchOn()
    {
        return true;
    }

    public function switchOff()
    {
        return false;
    }
}