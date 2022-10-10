<?php

// Bike
require_once 'Bicycle.php';
$bike = new Bicycle('blue');

$bike->setCurrentSpeed(0);
$bike->setNbSeats(1);
$bike->setnbWheels(2);

var_dump($bike);


// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();



// Car
require_once 'Car.php';
$car = new Car('Red', 4, 'Hybrid' );

$car->setCurrentSpeed(0);
$car->setNbSeats(5);
$car->setNbWheels(4);
$car->setLevelFuel(100);


var_dump($car);

// Moving Car
echo $car->start();
echo '<br>';
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();