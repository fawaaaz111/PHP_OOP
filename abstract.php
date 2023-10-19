<?php

abstract class Shape
{
    public $color;
    abstract public function getArea(): float;

    public function __construct($color)
    {
        $this->color = $color;
    }
}

class Circle extends Shape {
    public $radius;

    public function __construct($color, $radius)
    {
        parent::__construct($color);
        $this->radius = $radius;
    }

    public function getArea(): float
    {
        return $this->radius * $this->radius * 3.14;
    }
}

class Rectangle extends Shape {
    public $width;
    public $length;

    public function __construct($color, $width, $length)
    {
        parent::__construct($color);
        $this->width = $width;
        $this->length = $length;
    }
    
    public function getArea(): float
    {
        return $this->width * $this->length;
    }
}

$t = new Rectangle('red', 40, 34);
echo $t->getArea().PHP_EOL;
$c = new Circle('red', 39);
echo $c->getArea().PHP_EOL;