<?php

require_once 'Cars.php';
require_once 'Bicycle.php';
require_once 'Skateboard.php';

$skate = new Skateboard('orange', 1, 5, 10);
$car = new Car('blue', 4, 4, 70, 'fuel');
$bikeOne = new Bicycle('red', 1, 2, 12, 'electric');

echo 'Le skate ' . $skate->getColor() . ' n\'a pas d\'éclairage' . '<br>' . '<br>';

var_dump($car);
echo $car->switchOn();

var_dump($bikeOne);
echo $bikeOne->switchOn();
  
$bikeTwo = new Bicycle('pink', 1, 2, 5, 'electric');

var_dump($bikeTwo);
echo $bikeTwo->switchOn();

