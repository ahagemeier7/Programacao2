<?php

class Student{
    public string $nome;
    public float $media;

    public function verificarAprovacao(){
        if($this->media <= 7){
            echo"$this->nome reprovado!";
        }else{
            echo "$this->nome aprovado!";
        }
    }
}

?>