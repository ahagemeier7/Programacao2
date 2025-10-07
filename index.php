<?php
session_start();
require_once 'Cliente.php';
require_once 'Filmes.php';
require_once 'Aluguel.php';
require_once 'Multa.php';

// Agora sim, recupere os arrays da sessão:
$clientes = $_SESSION['clientes'] ?? [];
$filmes = $_SESSION['filmes'] ?? [];
$aluguels = $_SESSION['aluguels'] ?? [];
$favoritos = $_SESSION['favoritos'] ?? [];

$cliente = null;
$filme = null;
$aluguel = null;
$mensagem = "";

// Cadastro de Cliente
if (isset($_POST['cadastrar_cliente'])) {
    $cliente = new Cliente(
        $_POST['nome'],
        $_POST['cpf'],
        $_POST['email'],
        $_POST['cep'],
        $_POST['endereco'],
        intval($_POST['numero']),
        $_POST['bairro'],
        $_POST['cidade'],
        $_POST['estado']
    );
    $clientes[$cliente->getId()] = $cliente;
    $mensagem = "Cliente cadastrado!";
    // Salva todos os arrays
    $_SESSION['clientes'] = $clientes;
    $_SESSION['filmes'] = $filmes;
    $_SESSION['aluguels'] = $aluguels;
    $_SESSION['favoritos'] = $favoritos;
}

// Cadastro de Filme
if (isset($_POST['cadastrar_filme'])) {
    $filme = new Filmes(
        $_POST['nome_filme'],
        $_POST['genero'],
        intval($_POST['duracao']),
        $_POST['diretor'],
        floatval($_POST['valor_filme'])
    );
    $filmes[$filme->getId()] = $filme;
    $mensagem = "Filme cadastrado!";
    // Salva todos os arrays
    $_SESSION['clientes'] = $clientes;
    $_SESSION['filmes'] = $filmes;
    $_SESSION['aluguels'] = $aluguels;
    $_SESSION['favoritos'] = $favoritos;
}

// Cadastro de Aluguel
if (isset($_POST['cadastrar_aluguel'])) {
    $idCliente = intval($_POST['id_cliente']);
    $idFilme = intval($_POST['id_filme']);
    if (isset($clientes[$idCliente]) && isset($filmes[$idFilme])) {
        $aluguel = new Aluguel(
            $clientes[$idCliente],
            [$filmes[$idFilme]],
            $_POST['data_ini'],
            $_POST['data_fim'],
            floatval($_POST['desconto']),
            floatval($_POST['valor_aluguel'])
        );
        $aluguels[] = $aluguel;
        $mensagem = "Aluguel cadastrado!";
        // Salva todos os arrays
        $_SESSION['clientes'] = $clientes;
        $_SESSION['filmes'] = $filmes;
        $_SESSION['aluguels'] = $aluguels;
        $_SESSION['favoritos'] = $favoritos;
    } else {
        $mensagem = "Cliente ou Filme não encontrado!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laragon Interativo</title>
</head>
<body>
    <h2>Cadastro de Cliente</h2>
    <form method="post">
        Nome: <input name="nome"><br>
        CPF: <input name="cpf"><br>
        Email: <input name="email"><br>
        CEP: <input name="cep"><br>
        Endereço: <input name="endereco"><br>
        Número: <input name="numero" type="number"><br>
        Bairro: <input name="bairro"><br>
        Cidade: <input name="cidade"><br>
        Estado: <input name="estado"><br>
        <button type="submit" name="cadastrar_cliente">Cadastrar Cliente</button>
    </form>

    <h2>Cadastro de Filme</h2>
    <form method="post">
        Nome: <input name="nome_filme"><br>
        Gênero: <input name="genero"><br>
        Duração (min): <input name="duracao" type="number"><br>
        Diretor: <input name="diretor"><br>
        Valor: <input name="valor_filme" type="number" step="0.01"><br>
        <button type="submit" name="cadastrar_filme">Cadastrar Filme</button>
    </form>

    <h2>Cadastro de Aluguel</h2>
    <form method="post">
        ID Cliente:
        <select name="id_cliente">
            <?php foreach ($clientes as $id => $c): ?>
                <option value="<?= $id ?>"><?= $id ?> - <?= $c->getNome() ?></option>
            <?php endforeach; ?>
        </select><br>
        ID Filme:
        <select name="id_filme">
            <?php foreach ($filmes as $id => $f): ?>
                <option value="<?= $id ?>"><?= $id ?> - <?= $f->getNome() ?></option>
            <?php endforeach; ?>
        </select><br>
        Data Início: <input name="data_ini" type="date"><br>
        Data Fim: <input name="data_fim" type="date"><br>
        Desconto: <input name="desconto" type="number" step="0.01"><br>
        Valor: <input name="valor_aluguel" type="number" step="0.01"><br>
        <button type="submit" name="cadastrar_aluguel">Cadastrar Aluguel</button>
    </form>

    <h3><?php echo $mensagem; ?></h3>
    <?php
    if ($cliente) echo $cliente->exibirInfo() . "<br>";
    if ($filme) echo $filme->exibirInfo() . "<br>";
    if ($aluguel) echo $aluguel->exibirInfo() . "<br>";
    ?>
</body>
</html>