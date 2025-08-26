<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    //ex02
    require_once 'TrabalhoAula05/Produto01.php';
    $produto01 = new Produto();
    $produto01->nome = "Notebook";
    $produto01->preco = 2500.00;

    //Ex02
    require_once 'TrabalhoAula05/Produto02.php';
    $produto02 = new Produto2();
    $produto02->nome = "Smartphone";
    $produto02->setpreco(1500.00);
    $produto03 = new Produto2();
    $produto03->nome = "Geladeira";
    $produto03->setpreco(5000.00);

    //Ex03
    require_once 'TrabalhoAula05/ContaBancaria03.php';
    $contaBancaria = new ContaBancaria();
    $contaBancaria->Depositar(1000.00);
    $contaBancaria->Sacar(500.00);
    
    //Ex04
    require_once 'TrabalhoAula05/Funcionario04.php';
    $funcionario = new Funcionario();
    $funcionario->setName("João Silva");
    $funcionario->setSalario(3000.00);
    $gerente = new Gerente();

    $gerente->setName("Maria Souza");
    $gerente->setSalario(5000.00);
    
    //Ex05
    require_once 'TrabalhoAula05/Usuario05.php';
    $usuario = new Usuario();
    $usuario->setNome("João Silva");
    $usuario->setEmail("joao@silva.com");
    $usuario->setSenha("123456teste");
    
    //Ex06
    require_once 'TrabalhoAula05/Config06.php';
    $usuarioAdmin = new UsuarioAdmin();
    $usuarioAdmin->setParametros("teste");
    $usuarioAdmin->setParametros("teste2");
    
    //Ex07
    require_once 'TrabalhoAula05/Pedido07.php';
    $pedido = new Pedido();
    $pedido->setProduto($produto02);
    $pedido->setProduto($produto03);

    //Ex08
    require_once 'TrabalhoAula05/Cliente08.php';
    $cliente = new Cliente();
    $cliente->nome = "Ana Maria";
    $cliente->setcpf("12345678901");    
    $cliente->setTelefone("11987654321");

    //Ex09
    //Já foi implementado na classe ContaBancaria03.php

    //Ex10
    require_once 'TrabalhoAula05/ConexaoBD10.php';
    $conexao = new ConexaoBD();
    



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
            Exercicio 01
            <br/>
            <?php

                echo "O produto " . $produto01->nome . " custa R$ " . number_format($produto01->preco, 2);
            ?>
        </p>
        <br/>
        <p>
            Exercicio 02
            <br/>
            <?php
                echo "O produto " . $produto02->nome . " custa R$ " . number_format($produto02->getpreco(), 2);
            ?>
        </p>
        <br/>
        <p>
            Exercicio 03
            <br/>
            <?php
                echo "O saldo da conta bancaria é R$ " . $contaBancaria->getSaldo()
            ?>
        </p>
        <br/>
        <p>
            Exercicio 04
            <br/>
            <?php
                echo "O salário do funcionário " . $funcionario->getName() . " é R$ " . number_format($funcionario->getSalario(), 2);
                echo "\n";
                echo "O salário do gerente " . $gerente->getName() . " é R$ " . number_format($gerente->getSalario(), 2);
                echo "\n";
                $gerente->aumentarSalario($funcionario, 500);
                echo "O salário do funcionário " . $funcionario->getName() . " após aumento é R$ " . number_format($funcionario->getSalario(), 2);
            ?>
        </p>
        <br/>
        <p>
            Exercicio 05
            <br/>
            <?php
                echo "Nome: " . $usuario->getNome() . "<br/>";
                echo "Email: " . $usuario->getEmail() . "<br/>";
                // Para segurança, não exibimos a senha
                echo "Senha testada: 123456teste" . "<br/>"; 
                $senhatestada = "123456teste";
                echo "Senha correta? " . ($usuario->verificarSenha($senhatestada) ? "Sim" : "Não");
            ?>
        </p>
        <br/>
        <p>
            Exercicio 06
            <br/>
            <?php
                echo "Parâmetros do usuário admin: <br/>";
                foreach($usuarioAdmin->getParametros() as $parametro){
                    echo $parametro . " ";
                }
                echo "Deletando o parâmetro teste2" . "<br/>";
                $usuarioAdmin->deleteParametros("teste");
                echo "parametros após deletar o teste<br/>";
                foreach($usuarioAdmin->getParametros() as $parametro){
                    echo $parametro . " ";
                }



            ?>
        </p>
        <br/>
        <p>
            Exercicio 07
            <br/>
            <?php
                echo "Produtos no pedido: ";
                foreach ($pedido->getProduto() as $produto) {
                    echo $produto->nome . " - R$ " . $produto->getpreco();
                }
                echo "<br/>";
            ?>
        </p>
        <br/>
        <p>
            Exercicio 08
            <br/>
            <?php
                echo "Nome: " . $cliente->nome . "<br/>";
                echo "CPF: " . $cliente->getcpf() . "<br/>";
                echo "Telefone: " . $cliente->getTelefone() . "<br/>";
                echo "tentando alterar o cpf diretamente: para teste";
                $cliente->setcpf("teste"); // Isso não deve funcionar, pois
            ?>
        </p>
        <br/>
        <p>
            Exercicio 09
            <br/>
            <?php
                echo $contaBancaria->getSaldo() . "<br/>";
                $contaBancaria->Sacar(600.00);
                
            ?>
        </p>
        <br/>
        <p>
            Exercicio 10
            <br/>
            <?php
                echo $conexao->getConexao() . "<br/>";
            ?>
        </p>

    </div>
</body>

</html>