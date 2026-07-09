<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>OFuscadosBoxer</title>
    <link rel="stylesheet" href="../../CSS/styleForm.css">
</head>
<body>

<script src="../../JavaScript/Script.js"></script>

<header>
    <img alt="" src="../../img/Imagens/oFuscadosLogo.jpg" id="logo">
    <p id="title"><strong>OFuscadosBoxer</strong></p>
</header>

<div class="container">
    <div class="cabecalho">
        <h1>Cadastro de Produtos</h1>

            <form action="FormInsertProduto.php" method="post">

                <div class="form">

                    <label id="insertLabel">Código de Barras: </label>
                    <input id="insertinput" type="text" name="codbarras" required>
                    <label id="insertLabel">Observação:</label>
                    <input id="insertinput" type="text" name="observacao" required>
                    <label id="insertLabel">Embalagem:</label>
                    <input id="insertinput" type="text" name="embalagem" required>
                    <label id="insertLabel">Estoque:</label>
                    <input id="insertinput" type="text" name="estoque" required>
                    <label id="insertLabel">Fabricante:</label>
                    <input id="insertinput" type="text" name="fabricante" required>
                    <label id="insertLabel">Código Fabricante:</label>
                    <input id="insertinput" type="text" name="cdfabricante" required>
                    <label id="insertLabel">Aplicação:</label>
                    <input id="insertinput" type="text" name="aplicacao" required>
                    <label id="insertLabel">Ano de Aplicação:</label>
                    <input id="insertinput" type="text" name="anoaplicacao" required>
                    <label id="insertLabel">Estado:</label>
                    <input id="insertinput" type="text" name="estado" required>
                    <label id="insertLabel">Estoque Mínimo:</label>
                    <input id="insertinput" type="text" name="estoqueminimo" required>
                </div>
                <div id="buttons">
                    <button id="insertbutton" name="insertProduto" id="insertbutton">Inserir cadastro</button>
                    <button id="cancelarbutton" type="submit" onclick="callProdutos()" name="cancelarProduto" id="cancelarbutton">Cancelar Cadastro</button>
                </div>

            </form>
    </div>
</div>

<?php

require "../DataBase/Banco.php";
require "../DataBase/Produtos.php";

$banco = new Banco();
$conexao = $banco->connect();

$produto = new Produtos();

$btnInsert = isset($_POST['insertProduto']);
$btnCancelar = isset($_POST['cancelarProduto']);

if ($btnInsert)
{
    $produto->receberDados($conexao);
    $produto->inserirProduto($conexao);
}

?>


</body>
</html>
