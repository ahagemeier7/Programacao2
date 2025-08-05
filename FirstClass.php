<?php
class Person{
    public $name;
    public $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function DisplayData(): void{
        echo  "Meu nome é $this->name e tenho $this->age anos\n";
    }
}

$person = new Person(name: "Joao",age:30);

$person->DisplayData();

?>