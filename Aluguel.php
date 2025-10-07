<?php
class Aluguel {
    private static int $nextId = 1;
    private int $Id;
    private Cliente $cliente;
    private array $filme = [];
    private string $DataIni;
    private string $DataFim;
    private float $Desconto;
    private float $Valor;
    private Multa $Multa;

    public function __construct(
        Cliente $cliente,
        array $filme,
        string $DataIni,
        string $DataFim,
        float $Desconto,
        float $Valor
    ) {
        $this->Id = self::$nextId++;
        $this->cliente = $cliente;
        $this->filme= $filme;
        $this->DataIni = $DataIni;
        $this->DataFim = $DataFim;
        $this->Desconto = $Desconto;
        $this->Valor = $Valor;
    }

    public static function Create(
        Cliente $cliente,
        array $filme,
        string $DataIni,
        string $DataFim,
        float $Desconto,
        float $Valor
    ) {
        return new self($cliente, $filme, $DataIni, $DataFim, $Desconto, $Valor);
    }

    public function getCliente(): Cliente {
        return $this->cliente;
    }

    public function getFilme(): array {
        return $this->filme;
    }

public function exibirInfo(): string {
    $nomes = [];
    foreach ($this->filme as $filme) {
        $nomes[] = $filme->getNome();
    }
    $listaFilmes = implode(', ', $nomes);
    return "Aluguel #{$this->Id}: Cliente {$this->cliente->getNome()}, Filme(s): {$listaFilmes}, Início {$this->DataIni}, Fim {$this->DataFim}, Desconto {$this->Desconto}, Valor {$this->Valor}";
}
}