<?php

final class Skateboard extends Vehicle
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
        return true;
    }

    public function switchOff()
    {
        return false;
    }
}