<?php 

class Car{
    private $color = 'red';
    private $weight = 2000;

    public function __construct($color = 'yellow', $weight= 1500)
    {
        // echo "I am created";
        $this->color = $color;
        $this->weight = $weight;
    }

    public function getColor(){
        return $this->color;
    }

    public function __destruct()
    {
        echo "I am destroyed ".$this->color."\n";
    }
}

$myCar = new Car('green', 1000);
$myCar2 = new Car('white', 500);

echo $myCar->getColor().PHP_EOL;
echo $myCar2->getColor().PHP_EOL;

unset($myCar);
sleep(3);

?>