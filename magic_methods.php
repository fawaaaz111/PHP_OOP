<?php

class Person
{
    public $name = 'jane';
    private $phone = 1234;

    public function __call($name, $arguments)
    {
        // var_dump($name, $arguments);
        if ($name == 'getMobilePhone'){
            return $this->getPhone();
        }
    }

    public function getPhone(){
        return $this->phone;
    }
}

$p = new Person();
echo $p->getPhone().PHP_EOL;
echo $p->getMobilePhone().PHP_EOL;


// set magic method
// class Person
// {
//     public $name = 'jane';
//     private $phone = 1234;

//     public function __set($name, $value)
//     {
//         // var_dump($name, $value);
//         // throw new Exception("\"$name\" does not Lexist");
//         if ($name === 'username'){
//             $this->name = $value;
//         }
//     }

// }

// $p = new Person();
// $p->username = 'Marry';
// echo $p->name;

// __set magic method
// class Person {

//     public $name = 'jane';
//     private $phone = 1234;

//     public function __get($name)
//     {
//         if ($name === 'username'){
//             return $this->name;
//         }
//         return "property \"$name\" does not exist";
//     }


// }

// $p = new Person();
// echo $p->username1;



//__to_string method

// class Person {

//     public $name = 'jane';
//     private $phone = 12345;

//     public function __construct()
//     {
//         echo "__cnostruct is called".PHP_EOL;
//     }
//     public function __destruct()
//     {
//         echo PHP_EOL."__destruct is called".PHP_EOL;
//     }

//     public function __toString()
//     {
//         return "Name: $this->name, Phone: $this->phone";
//     }

// }

// $p = new Person();
// echo $p;





?>