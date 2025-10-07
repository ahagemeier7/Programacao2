<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);   

    require_once __DIR__ . '/aula07/Animal.php';
    require_once __DIR__ . '/aula07/Calculadora.php';
    require_once __DIR__ . '/aula07/Pagamento.php';
    require_once __DIR__ . '/aula07/Notificacao.php';
    require_once __DIR__ . '/aula07/FiguraGeometrica.php';
    require_once __DIR__ . '/aula07/Relatorio.php';
    require_once __DIR__ . '/aula07/Veiculo.php';
    require_once __DIR__ . '/aula07/Impressora.php';
    require_once __DIR__ . '/aula07/Mensagem.php';
    require_once __DIR__ . '/aula07/Transporte.php';

    if (! empty($_GET['q'])) {
        $query = htmlspecialchars($_GET['q'], ENT_QUOTES, 'UTF-8');

        switch ($query) {
            case 'info':
                phpinfo();
                exit;
            default:
                header("HTTP/1.0 404 Not Found");
                echo "Invalid query parameter.";
                exit;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laragon</title>
    <style>
    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        font-weight: 100;
        background-color: #f9f9f9;
        color: #333;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
        text-align: center;
    }

    .content {
        max-width: 800px;
        padding: 100px;
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .title {
        font-size: 60px;
        margin: 0;

    }

    .info {
        margin-top: 20px;
        line-height: 1.6;
    }

    .info a {
        color: #007bff;
        text-decoration: none;
    }

    .info a:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    .opt {
        margin-top: 30px;
    }

    .opt a {
        color: #007bff;
        font-size: 14px;
        text-decoration: none;
    }

    .opt a:hover {
        color: #0056b3;
        text-decoration: underline;
    }


    button {
        display: flex;
        height: 3em;
        width: 200px;
        align-items: center;
        justify-content: center;
        background-color: #eeeeee4b;
        border-radius: 3px;
        letter-spacing: 1px;
        transition: all 0.2s linear;
        cursor: pointer;
        border: none;
        background: #fff;
        box-shadow: 6px 6px 30px #d1d1d1, -6px -6px 30px #ffffff;
        transform: translateY(-1px);
    }

    
    </style>
</head>

<body>
    <div>
        <div>
            <h2>Testes das Classes - Trabalho2</h2>
            <h3>Animal</h3>
            <?php
                $dog = new Cachorro();
                $cat = new Gato();
                echo "Cachorro: " . $dog->falar() . "<br>";
                echo "Gato: " . $cat->falar() . "<br>";
            ?>
            <h3>Calculadora</h3>
            <?php
                $calc = new Calculadora();
                echo "1 + 2 = " . $calc->somar(1, 2) . "<br>";
                echo "1 + 2 + 3 = " . $calc->somar(1, 2, 3) . "<br>";
            ?>
            <h3>Pagamento</h3>
            <?php
                $cartao = new CartaoCredito();
                $cartao->valor = 100;
                $cartao->metodo = "Cartão de Crédito";
                $cartao->numeroCartao = "1234 5678 9012 3456";
                echo $cartao->processarPagamento() . "<br>";

                $boleto = new Boleto();
                $boleto->valor = 50;
                $boleto->metodo = "Boleto";
                $boleto->codigoBarras = "12345678901234567890";
                echo $boleto->processarPagamento() . "<br>";

                $pix = new Pix();
                $pix->valor = 75;
                $pix->metodo = "Pix";
                $pix->chavePix = "chave@pix.com";
                echo $pix->processarPagamento() . "<br>";
            ?>
            <h3>Notificação</h3>
            <?php
                $email = new email();
                $email->destinatario = "usuarioteste.com";
                $email->mensagem = "Bem-vindo!";
                $email->definirAssunto("Teste assunto");
                echo $email->enviar() . "<br>";

                $sms = new SMS();
                $sms->definirNumero("49999999999");
                $sms->mensagem = "Seu código é 1234";
                echo $sms->enviar() . "<br>";

                $push = new Push();
                $push->definirApp("MeuApp");
                $push->destinatario = "Usuário";
                $push->mensagem = "Nova notificação!";
                echo $push->enviar() . "<br>";
            ?>
            <h3>Figuras Geométricas</h3>
            <?php
                $quad = new Quadrado();
                $quad->lado = 5;
                echo "Área do quadrado (lado 5): " . $quad->calcularArea() . "<br>";

                $circ = new Circulo();
                $circ->raio = 3;
                echo "Área do círculo (raio 3): " . round($circ->calcularArea(),2) . "<br>";

                $ret = new Retangulo();
                $ret->largura = 4;
                $ret->altura = 6;
                echo "Área do retângulo (4x6): " . $ret->calcularArea() . "<br>";
            ?>
            <h3>Relatório</h3>
            <?php
                $rel = new Relatorio();
                echo $rel->__call('gerar', ['boletos']) . "<br>";
                echo $rel->__call('gerar', ['boletos', '2023']) . "<br>";
                echo $rel->__call('gerar', ['boletos', '2023', 'Pago']) . "<br>";
                echo $rel->__call('gerarteste', ['boletos', '2023', 'Pago']) . "<br>";
                ?>
            <h3>Veículo</h3>
            <?php
                $carro = new Carro();
                $bike = new Bicicleta();
                $aviao = new Aviao();
                echo $carro->mover() . "<br>";
                echo $bike->mover() . "<br>";
                echo $aviao->mover() . "<br>";
            ?>
            <h3>Impressora</h3>
            <?php
                $pdf = new PDF();
                $txt = new Texto();
                $img = new Imagem();
                echo $pdf->imprimir("Documento") . "<br>";
                echo $txt->imprimir("Relatório") . "<br>";
                echo $img->imprimir("Foto") . "<br>";
            ?>
            <h3>Mensagem</h3>
            <?php
                $maiusc = new Maiusculo();
                $minusc = new Minusculo();
                $cap = new Capitalizar();
                $msg = "teste da classe mensagem";
                echo "Mensagem original: " . $msg . "<br>";
                echo "Maiúsculo: " . $maiusc->formatarMensagem($msg) . "<br>";
                echo "Minúsculo: " . $minusc->formatarMensagem($msg) . "<br>";
                echo "Capitalizar: " . $cap->formatarMensagem($msg) . "<br>";
            ?>
            <h3>Transporte</h3>
            <?php
                $onibus = new Onibus();
                $taxi = new Taxi();
                $metro = new Metro();
                echo "Ônibus: " . $onibus->calcularTarifa(4.5) . "<br>";
                echo "Táxi: " . $taxi->calcularTarifa(5, 10,"noturno") . "<br>";
                echo "Metrô: " . $metro->calcularTarifa(3.5) . "<br>";
            ?>
        </div>
    </div>
</body>

</html>