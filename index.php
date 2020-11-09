<?php

require_once  'Vehicle.php';
require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$car = new Car('green', 4, 'electric');
$bicycleLight = new Bicycle('red', 2);

$bicycleLight->setCurrentSpeed(3);
var_dump($bicycleLight->switchOn());