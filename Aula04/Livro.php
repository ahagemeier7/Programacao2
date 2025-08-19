<?php

class Livro{
    private string $titulo;
    private string $autor;
    private int $anoPublicacao;
    private int $numeroPaginas;
    private bool $disponivel;

    public function getTitulo(): string {
        return $this->titulo;
    }
    public function getAutor(): string {
        return $this->autor;
    }
    public function getanoPublicacao(): int {
        return $this->anoPublicacao;
    }
    public function getNumeroPaginas(): int {
        return $this->numeroPaginas;
    }
    public function isDisponivel(): bool {
        return $this->disponivel;
    }
    public function setTitulo(string $titulo): void {
        if(empty($titulo)) {
            throw new Exception("Título não pode ser vazio.");
        }
        $this->titulo = $titulo;
    }
    public function setAutor(string $autor): void {
        if(empty($autor)) {
            throw new Exception("Autor não pode ser vazio.");
        }
        $this->autor = $autor;
    }
    public function setAnoPublicacao(int $ano): void {
        if ($ano > (int)date("Y")) {
            throw new Exception("Ano de publicação inválido.");
        }

        $this->anoPublicacao = $ano;
    }
    public function setNumeroPaginas(int $paginas): void {
        if($paginas <= 0) {
            throw new Exception("Número de páginas deve ser maior que zero.");
        }

        $this->numeroPaginas = $paginas;
    }
    public function setDisponivel(bool $disponivel): void {
        $this->disponivel = $disponivel;
    }


}

?>