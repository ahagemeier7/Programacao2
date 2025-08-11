<?php
class Product{

    public string $name;
    public float $price;
    public float $quantity;

    function __construct($name, $price, $quantity){
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }

    function TotalValue(): float{
        return $this->price * $this->quantity;
    }

    function ShowDetails(): string{
        return "Produto: $this->name\nValor:$this->price\nEstoque: $this->quantity";
    }
}

?>