<?php

// Bike
require_once 'Bicycle.php';
$bike = new Bicycle('blue');

$bike->setCurrentSpeed(0);
$bike->setNbSeats(1);
$bike->setnbWheels(2);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> <br>';

// RedCar
require_once 'Car.php';
$redCar = new Car('Red', 4, 'Hybrid' );

$redCar->setCurrentSpeed(0);
$redCar->setNbSeats(5);
$redCar->setNbWheels(4);
$redCar->setLevelFuel(100);


// Moving redCar
echo '<br> Let\'s take the red car today';
echo '<br>' . $redCar->start();
echo '<br> Vitesse de la voiture : ' . $redCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $redCar->brake();
echo '<br> Vitesse de la voiture : ' . $redCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $redCar->brake();
echo '<br> <br>';


// BlueCar
require_once 'Car.php';
$blueCar = new $redCar('Blue', 4, 'Power of love' );

$blueCar->setCurrentSpeed(0);
$blueCar->setNbSeats(3);
$blueCar->setNbWheels(4);
$blueCar->setLevelFuel(999);

// Moving blueCar
echo '<br> Blue car better cause I\'m blue (dabedidabedaï)';
echo '<br>' . $blueCar->start();
echo '<br> Vitesse de la voiture : ' . $blueCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $blueCar->brake();
echo '<br> Vitesse de la voiture : ' . $blueCar->getCurrentSpeed() . ' km/h' . '<br>';
echo $blueCar->brake();
echo '<br> <br>';
