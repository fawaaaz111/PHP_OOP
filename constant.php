<?php 

class Car {
    
    public $color;
    public $manufacture;

    const MANUFACTURER_BMW = 'BMW';
    const MANUFACTURER_MERCEDES = 'mercedes';
    const MANUFACTURER_TESLA = 'tesla';

    const COLOR_RED = 'red';
    const COLOR_GREEN = 'green';
    const COLOR_BLUE = 'blue';

    public function __construct($color, $manufacture)
    {
        $this->color = $color;
        $this->manufacture = $manufacture;


    }

}

$myCar = new Car(Car::COLOR_GREEN, Car::MANUFACTURER_MERCEDES);
var_dump($myCar);


?>