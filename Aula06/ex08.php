<?php

class Aluno{
    private static int $id;
    public string $nome;
    private array $notas = [];

    public function getNotas(): array {
        return $this->notas;
    }

    public function setNotas(float $nota): void {
        if($nota >= 0 && $nota <= 10){
            $this->notas[] = $nota;
        }
    }
}

?>