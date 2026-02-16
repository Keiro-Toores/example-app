<?php

class Car{
    public $brand;
    public $color;
    public $year;

    public function start()
    {
        return "The car is starting.";
    }

    public function getDescription()
    {
        return "This is a {$this->color} {$this->brand}.    ";
    }
}

$myCar = new Car();

$myCar->brand = "Mercedes-Benz";
$myCar->color = "Black";
$myCar->year = 1991;

echo $myCar->start();
echo $myCar->getDescription();