<?php

class Pagamento {
    public $valor;
    public $metodo;

    public function processarPagamento() {
        return "Processando pagamento de R$ {$this->valor} via {$this->metodo}.";
    }
}

class CartaoCredito extends Pagamento {
    public $numeroCartao;

    public function processarPagamento() {
        return "Validando cartão de crédito: {$this->numeroCartao}.";
    }
}

class Boleto extends Pagamento {
    public $codigoBarras;

    public function processarPagamento() {
        return "Gerando boleto com código de barras: {$this->codigoBarras}.";
    }
}

class Pix extends Pagamento {
    public $chavePix;

    public function processarPagamento() {
        return "Enviando pagamento via Pix para a chave: {$this->chavePix}.";
    }
}

?>