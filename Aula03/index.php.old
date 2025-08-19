<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    
    require_once 'FirstClass.php';
    $carro = new Carro();
    $carro->marca = 'Fiat';
    $carro->modelo = 'Uno';
    $carro->ano = 2005;
    
    require_once 'Student.php';
    $aluno = new Student();
    $aluno->nome = 'joao';
    $aluno->media = 6.5;
    
    require_once 'ContaBancaria.php';
    $conta = new ContaBancaria();
    $conta->titular = 'joao';
    $conta->saldo = 500;

    require_once 'Calculadora.php';
    $calculadora = new Calculadora();

    require_once 'Agenda.php';
    $agenda1 = new Agenda(nome: "person1",telefone: 99999999,email: "joao@a1235");
    $agenda2 = new Agenda(nome: "person2",telefone: 35331234,email: "joao@a1234");
    $agenda3 = new Agenda(nome: "person3",telefone:49999123,email: "joao@a123");

    $agendaArray = [$agenda1,$agenda2,$agenda3];

    require_once 'Retangulo.php';
    $retangulo = new Retangulo();
    $retangulo->altura = 2;
    $retangulo->largura = 4;

    require_once 'Funcionario.php';
    $funcionario = new Funcionario();
    $funcionario->nome = 'joao';
    $funcionario->salario = 1000;

    require_once 'Carrinho.php';
    $carrinho = new Carrinho([]);
    $item1 = new Item(1, "item1",10);
    $item2 = new Item(1, "item2",30);

    $carrinho->itens = [$item1,$item2];

    require_once 'Livro.php';
    $livro1 = new Livro("Livro 1", "Autor 1", 2000);
    $livro2 = new Livro("Livro 2", "Autor 2", 2016);
    $livro3 = new Livro("Livro 3", "Autor 3", 2018);

    $estante = [$livro1, $livro2, $livro3];

    require_once 'Conversor.php';
    $conversor = new Conversor();
    $conversor->celsius = 25;

    
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
        <p>
            <?php
                $carro->exibirInformacoes();
                echo "--------------------------------------\n";
                $aluno->verificarAprovacao();
                echo "--------------------------------------\n";
                $conta->depositar(200);
                echo "$conta->saldo";
                echo "\n";
                $conta->sacar(500);
                echo "$conta->saldo";
                echo "--------------------------------------\n";
                echo "\n";
                echo "\n";
                $calculadora->soma(1,1);
                echo "\n";
                $calculadora->subtracao(5,1);
                echo "\n";
                $calculadora->multiplicacao(2,1);
                echo "\n";
                $calculadora->divisao(10,1);
                echo "\n";
                echo "$conta->saldo";
                echo "--------------------------------------\n";
                foreach ($agendaArray as $agendas ){
                    $agendas->lista();
                }
                echo "--------------------------------------\n";
                $retangulo->calculaArea();
                echo "\n";
                $retangulo->calculaPerimetro();
                echo "--------------------------------------\n";
                $funcionario->reajuste(10);
                echo "--------------------------------------\n";
                $valorToral = 0;
                    foreach ($carrinho->itens as $item) {
                        $valorToral += $item->valor;
                        echo $item->valor;
                        echo "\n";

                    }
                echo $valorToral;
                echo "--------------------------------------\n";
                foreach ($estante as $livro) {
                    if($livro->ano > 2015) {
                        echo "Título: {$livro->nome}, Autor: {$livro->autor}, Ano: {$livro->ano}\n";
                    }
                }
                echo "--------------------------------------\n";
                echo $conversor->conversor();

                ?>
        </p>
    </div>
</body>

</html>