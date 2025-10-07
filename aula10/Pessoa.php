<?php

class Coracao{
    private int $Id;

    public function Batimento(){
        return  "batendo";
    }

}

class Pessoa{
    public string $Name;
    private Coracao $Coracao;

    public function __construct(){
        $this->Coracao = new Coracao();
    }

    public function Batendo(){
        return $this->Coracao->Batimento();
    }

}


?>