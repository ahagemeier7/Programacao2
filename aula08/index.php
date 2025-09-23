<?php
require_once 'Cliente.php';
require_once 'Filmes.php';
require_once 'Aluguel.php';

$mensagem = "";
$clientes = [];
$filmes = [];
$aluguels = [];
$favoritos = [];

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
}

// Cadastro de Aluguel
if (isset($_POST['cadastrar_aluguel'])) {
    $idCliente = intval($_POST['id_cliente']);
    $idFilme = intval($_POST['id_filme']);
    if (isset($clientes[$idCliente]) && isset($filmes[$idFilme])) {
        $aluguel = new Aluguel(
            $clientes[$idCliente],
            $filmes[$idFilme],
            $_POST['data_ini'],
            $_POST['data_fim'],
            floatval($_POST['desconto']),
            floatval($_POST['valor_aluguel'])
        );
        $aluguels[] = $aluguel;
        $clientes[$idCliente]->adicionarAluguel($aluguel);
        $filmes[$idFilme]->adicionarAluguel($aluguel);
        $mensagem = "Aluguel cadastrado e associado!";
    } else {
        $mensagem = "Cliente ou Filme não encontrado!";
    }
}

// Cadastro de Favorito (muitos para muitos)
if (isset($_POST['cadastrar_favorito'])) {
    $idCliente = intval($_POST['id_cliente_fav']);
    $idFilme = intval($_POST['id_filme_fav']);
    if (isset($clientes[$idCliente]) && isset($filmes[$idFilme])) {
        $favorito = new Favorito($clientes[$idCliente], $filmes[$idFilme]);
        $favoritos[] = $favorito;
        $clientes[$idCliente]->adicionarFavorito($filmes[$idFilme]);
        $filmes[$idFilme]->adicionarFavoritadoPor($clientes[$idCliente]);
        $mensagem = "Favorito cadastrado!";
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
        ID Cliente: <input name="id_cliente" type="number"><br>
        ID Filme: <input name="id_filme" type="number"><br>
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