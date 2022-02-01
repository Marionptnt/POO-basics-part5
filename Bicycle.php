<?php

require_once 'LightableInterface.php';
require_once 'Vehicle.php';

class Bicycle extends Vehicle implements LightableInterface
{
    private string $energy;
    
    public function __construct($color, $nbSeats, $nbWheels, $currentSpeed, $energy)
    {
        parent::__construct($color, $nbSeats, $nbWheels, $currentSpeed, $energy);
        $this->energy = $energy;
    }

    //retourne true seulement si la currentSpeed() est >10km/h
    public function switchOn(): bool
    {
        if ($this->currentSpeed < 10) {
            return false;
        }
        return true;
    }

    // retourne false
    public function switchOff(): bool
    {
        return false;
    }
}
