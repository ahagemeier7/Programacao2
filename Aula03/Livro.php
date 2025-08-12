<?php
   
   
class Livro{
    public string $nome;
    public string $autor;
    public string $ano;

    public function __construct(string $nome, string $autor, string $ano){
        $this->nome = $nome;
        $this->autor = $autor;
        $this->ano = $ano;
    }
}

?>