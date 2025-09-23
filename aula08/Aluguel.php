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
    private Multa $Multa

    public function __construct(
        Cliente $cliente,
        Filmes $filme,
        string $DataIni,
        string $DataFim,
        float $Desconto,
        float $Valor
    ) {
        $this->Id = self::$nextId++;
        $this->cliente = $cliente;
        $this->filme = $filme;
        $this->DataIni = $DataIni;
        $this->DataFim = $DataFim;
        $this->Desconto = $Desconto;
        $this->Valor = $Valor;
    }

    public static function Create(
        Cliente $cliente,
        Filmes $filme,
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

    public function getFilme(): Filmes {
        return $this->filme;
    }

    public function exibirInfo(): string {
        return "Aluguel #{$this->Id}: Cliente {$this->cliente->getNome()}, Filme {$this->filme->getNome()}, Início {$this->DataIni}, Fim {$this->DataFim}, Desconto {$this->Desconto}, Valor {$this->Valor}";
    }
}