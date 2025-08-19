<?php

class Aluno {
    public string $nome;
    private static int $matricula;
    private array $notas = [];
    private float $media = 0.0;

    public function __construct(string $nome){
        $this->nome = $nome;
        $this->matricula = $this->matricula + 1;
    }

    public function getMatricula(){
        echo "Matrícula: $this->matricula";
    }

    public function adicionarNota(float $nota){
        $this->notas[] = $nota;
    }

    private function calcularMedia(){
        foreach ($this->notas as $nota) {
            $this->media += $nota;
        }
        $this->media = $this->media / count($this->notas);
        echo "Média: $this->media\n";
    }

    public function situacao(){
        $this->calcularMedia();
        if($this->media >= 7){
            echo "Aprovado";
        } else {
            echo "Reprovado";
        }
    }
}

?>
