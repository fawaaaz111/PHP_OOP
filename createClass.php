<?php

class Car {
    private $color = 'red';
    public $weight;
    private $year;
    private $availbaleColors = [
        'red', 'white', 'green'
    ];

    public function setYear($theYear){
        $this->year = $theYear;
    }

    public function getYear(){
        return $this->year;
    }


    public function setColor($color){
        if(in_array($color, $this->availbaleColors)){
            $this->color = $color;
        }
    }
    public function getColor(){
        return $this->color;
    }
}

$mynewCar = new Car();


$mynewCar->setYear(2002);
// echo $mynewCar->getYear();
$mynewCar->setColor('green');
echo $mynewCar->getColor();

?>