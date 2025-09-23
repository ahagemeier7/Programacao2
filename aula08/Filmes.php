<?php

class Filmes {
    private static int $nextId = 1;
    private int $Id;
    private string $Nome;
    private string $Genero;
    private int $Duracao;
    private string $Diretor;
    private float $Valor;
    private array $aluguels = [];
    private array $clientes = [];

    public function adicionarClientes(Cliente $cliente) {
        $this->Clientes[] = $cliente;
    }

    public function getClientes(): array {
        return $this->Clientes;
    }

    public function adicionarAluguel(Aluguel $aluguel) {
        $this->aluguels[] = $aluguel;
    }

    public function getAluguels(): array {
        return $this->aluguels;
    }

    public function __construct(string $Nome, string $Genero, int $Duracao, string $Diretor, float $Valor) {
        $this->Id = self::$nextId++;
        $this->Nome = $Nome;
        $this->Genero = $Genero;
        $this->Duracao = $Duracao;
        $this->Diretor = $Diretor;
        $this->Valor = $Valor;
    }

    public function getId(): int {
        return $this->Id;
    }

    public function getNome(): string {
        return $this->Nome;
    }

    public function setNome(string $Nome) {
        $this->Nome = $Nome;
    }

    public function getGenero(): string {
        return $this->Genero;
    }

    public function setGenero(string $Genero) {
        $this->Genero = $Genero;
    }

    public function getDuracao(): int {
        return $this->Duracao;
    }

    public function setDuracao(int $Duracao) {
        $this->Duracao = $Duracao;
    }

    public function getDiretor(): string {
        return $this->Diretor;
    }

    public function setDiretor(string $Diretor) {
        $this->Diretor = $Diretor;
    }

    public function getValor(): float {
        return $this->Valor;
    }

    public function setValor(float $Valor) {
        $this->Valor = $Valor;
    }

    public function exibirInfo(): string {
        return "Filme: {$this->Nome}, Gênero: {$this->Genero}, Duração: {$this->Duracao} min, Diretor: {$this->Diretor}, Valor: R$ {$this->Valor}";
    }

    public function atualizarDados(array $dados) {
        if (isset($dados['Nome'])) $this->Nome = $dados['Nome'];
        if (isset($dados['Genero'])) $this->Genero = $dados['Genero'];
        if (isset($dados['Duracao'])) $this->Duracao = $dados['Duracao'];
        if (isset($dados['Diretor'])) $this->Diretor = $dados['Diretor'];
        if (isset($dados['Valor'])) $this->Valor = $dados['Valor'];
    }
}

?>