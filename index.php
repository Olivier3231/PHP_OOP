<?php
//index.php

require 'Bicycle.php';
require 'Car.php';

$bike = new Bicycle('red');

$bike->setCurrentSpeed(10);

var_dump($bike);

echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed(). '  km/h' . '<br>';

echo $bike->forward();

echo $bike->brake();


$myCar = new Car('Blue', 5, 'gasoline');

$myCar->setCarCurrentSpeed(10);

var_dump($myCar);

echo '<br> Vitesse du véhicule : ' . $myCar->getCarCurrentSpeed(). '  km/h' . '<br>';

echo $myCar->carStart();

echo $myCar->carForward();

echo $myCar->carBrake();

