<?php

class ParentClass {
    public $prop = '1';
    protected $prop2 = '2';
    private $prop3 = '3';

    public function getProp2() {
        var_dump($this);
        return $this->prop2;
    }

} 
class ChildClass extends ParentClass {

    protected $prop2 = '22';
}


$obj = new ChildClass();
// echo $obj->getProp2();
echo $obj->getProp2();

?>