<?php
class User{
	public $name;
	public $email;
	public $age;

	function __construct($name,$email,$age){
		$this->name = $name;
		$this->email = $email;
		$this->age = $age;
	}
    function PrintData($n,$e,$a): void{
	    echo "Nome: $n, Email: $e, Idade: $a\n\n";
    }

    function CheckAge($a): bool{
	    return $a >= 18;
    }
}

$user = new User( name: "jao", email: "joaozinho123", age: 30);

$user->PrintData(n: $user->name, e: $user->email, a: $user->age);

echo $user->CheckAge(a: $user->age);	

$teste = $user->CheckAge(a: $user->age);

?>