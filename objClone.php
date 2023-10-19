<?php 

class Car{
    public $color = 'red';
    public $year;
    public $weight;

}

$car = new Car('white', 2000);

$car2 = & $car;
$car = null;
// $car->color = 'green';

var_dump($car2);

?>