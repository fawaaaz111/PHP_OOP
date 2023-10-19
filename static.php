<?php


class Car {
    public $color = 'red';
    private $weight = 2000;

    static $counter = 0;
    public $myCounter = 0;

    static public $avialableColors = [
        'red', 'white', 'green'
    ];

    public function __construct()
    {
        self::$counter++;
        $this->myCounter++;
    }

}

$myCar = new Car();
echo Car::$counter.' '.$myCar->myCounter++.PHP_EOL;
$myCar2 = new Car();
echo Car::$counter.' '.$myCar2->myCounter++.PHP_EOL;

?>