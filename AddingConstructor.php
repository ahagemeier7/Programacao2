<?php
class Person{
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function DisplayData($name,$age): void{
        echo  "Meu nome é $name e tenho $age anos";
    }
}

$person = new Person(name: "Joao",age:30);

$person->DisplayData(name: $person->name,age: $person->age);

?>