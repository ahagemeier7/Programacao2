<?php
class Person{
    private $name;
    private $age;

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    function DisplayData(): void{
        echo  "Meu nome é $this->name e tenho $this->age anos";
    }

    function GetName(): string{
        return $this->name;
    }

    function GetAge(): int{
        return $this->age;
    }

    function Birthday(): int{
        return $this->age+1;
    }
}

$person = new Person(name: "Joao",age:30);

$person->DisplayData();

echo $person->GetName();
echo"\n\n\n\n";
echo $person->GetAge();
echo"\n\n\n\n";
echo $person->Birthday();

?>