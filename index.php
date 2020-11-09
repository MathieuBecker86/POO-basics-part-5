<?php

require_once 'Vehicle.php';
require_once 'Bike.php';

$Bike = new Bike("black", 5, 4);

$Bike->setCurrentSpeed(20);

echo "Le vélo roule à " . $Bike->getCurrentSPeed() . " Km/h <br/>";
if ($Bike->switchOn() == true)
{
    echo "Les lumières sont allumées!";
}
else
{
    echo "Les lumières sont éteintes!";
}