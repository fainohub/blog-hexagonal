<?php

declare(strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

class Car {

    public $car = 'teste';
}

$car = new Car();

echo $car->car;