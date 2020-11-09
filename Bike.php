<?php

final class Bike extends Vehicle
{
    protected $color;

    protected $nbSeats;

    protected $nbWheels;

    public function __construct($color, $nbSeats, $nbWheels)
    {
        parent:: __construct($color, $nbSeats, $nbWheels);
    }

    public function switchOn()
    {
        if ($this->currentSpeed > 10)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function switchOff()
    {
        return false;
    }

}
