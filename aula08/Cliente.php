<?php

class Cliente {
    private static int $nextId = 1;
    private int $Id;
    private string $nome;
    private string $cpf;
    private string $email;
    private string $cep;
    private string $endereco;
    private int $numero;
    private string $bairro;
    private string $cidade;
    private string $estado;
    private array $aluguels = [];
    private array $filmes = [];

    public function adicionarFilmes(Filmes $filme) {
        $this->Filme[] = $filme;
    }

    public function getFilme(): array {
        return $this->Filme;
    }
    
    public function adicionarAluguel(Aluguel $aluguel) {
        $this->aluguels[] = $aluguel;
    }

    public function getAluguels(): array {
        return $this->aluguels;
    }

    public function __construct(
        string $nome,
        string $cpf,
        string $email,
        string $cep,
        string $endereco,
        int $numero,
        string $bairro,
        string $cidade,
        string $estado
    ) {
        $this->Id = self::$nextId++;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->cep = $cep;
        $this->endereco = $endereco;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
    }

    public function getId(): int { return $this->Id; }
    public function getNome(): string { return $this->nome; }
    public function setNome(string $nome) { $this->nome = $nome; }
    public function getCpf(): string { return $this->cpf; }
    public function setCpf(string $cpf) { $this->cpf = $cpf; }
    public function getEmail(): string { return $this->email; }
    public function setEmail(string $email) { $this->email = $email; }
    public function getCep(): string { return $this->cep; }
    public function setCep(string $cep) { $this->cep = $cep; }
    public function getEndereco(): string { return $this->endereco; }
    public function setEndereco(string $endereco) { $this->endereco = $endereco; }
    public function getNumero(): int { return $this->numero; }
    public function setNumero(int $numero) { $this->numero = $numero; }
    public function getBairro(): string { return $this->bairro; }
    public function setBairro(string $bairro) { $this->bairro = $bairro; }
    public function getCidade(): string { return $this->cidade; }
    public function setCidade(string $cidade) { $this->cidade = $cidade; }
    public function getEstado(): string { return $this->estado; }
    public function setEstado(string $estado) { $this->estado = $estado; }

    public function exibirInfo(): string {
        return "Cliente: {$this->nome}, CPF: {$this->cpf}, Email: {$this->email}, Endereço: {$this->endereco}, Nº: {$this->numero}, Bairro: {$this->bairro}, Cidade: {$this->cidade}, Estado: {$this->estado}, CEP: {$this->cep}";
    }

    public function atualizarDados(array $dados) {
        if (isset($dados['nome'])) $this->nome = $dados['nome'];
        if (isset($dados['cpf'])) $this->cpf = $dados['cpf'];
        if (isset($dados['email'])) $this->email = $dados['email'];
        if (isset($dados['cep'])) $this->cep = $dados['cep'];
        if (isset($dados['endereco'])) $this->endereco = $dados['endereco'];
        if (isset($dados['numero'])) $this->numero = $dados['numero'];
        if (isset($dados['bairro'])) $this->bairro = $dados['bairro'];
        if (isset($dados['cidade'])) $this->cidade = $dados['cidade'];
        if (isset($dados['estado'])) $this->estado = $dados['estado'];
    }
}

?>