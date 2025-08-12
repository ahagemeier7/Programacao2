<?php

class Carro{
    public string $marca;
    public string $modelo;
    public int $ano;

    public function exibirInformacoes(){
        echo "Marca: $this->marca\n Modelo: $this->modelo\n Ano: $this->ano";
    }
}


?>