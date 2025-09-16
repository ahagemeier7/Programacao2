<?php

class Notificacao {
    public $mensagem;
    public $destinatario;

    public function enviar() {
        return "Enviando para {$this->destinatario} com a mensagem: {$this->mensagem}.";
    }
}

class email extends Notificacao {
    public $assunto;

    public function definirAssunto($assunto) {
        $this->assunto = $assunto;
    }

    public function enviar() {
        return "Enviando email para {$this->destinatario} com o assunto '{$this->assunto}' e a mensagem: {$this->mensagem}.";
    }
}

class SMS extends Notificacao {
    public $numeroTelefone;

    public function definirNumero($numero) {
        $this->numeroTelefone = $numero;
    }

    public function enviar() {
        return "Enviando SMS para {$this->numeroTelefone} com a mensagem: {$this->mensagem}.";
    }
}

class Push extends Notificacao {
    public $app;

    public function definirApp($app) {
        $this->app = $app;
    }

    public function enviar() {
        return "Enviando notificação push via {$this->app} para {$this->destinatario} com a mensagem: {$this->mensagem}.";
    }
}

?>