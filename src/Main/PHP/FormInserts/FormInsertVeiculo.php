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
        <h1>Cadastro de Veículos</h1>

            <form action="FormInsertVeiculo.php" method="post">

                <div class="form">

                    <label id="insertLabel">Descrição: </label>
                    <input id="insertinput" type="text" name="descricao" required>
                    <label id="insertLabel">Embalagem:</label>
                    <input id="insertinput" type="text" name="embalagem" required>
                    <label id="insertLabel">Produto:</label>
                    <input id="insertinput" type="text" name="produto" required>
                    <label id="insertLabel">Fabricante:</label>
                    <input id="insertinput" type="text" name="fabricante" required>
                    <label id="insertLabel">Fornecedor:</label>
                    <input id="insertinput" type="text" name="fornecedor" required>
                    <label id="insertLabel">Estoque:</label>
                    <input id="insertinput" type="text" name="estoque" required>
                    <label id="insertLabel">Aplicação:</label>
                    <input id="insertinput" type="text" name="aplicacao" required>
                    <label id="insertLabel">Ano de Aplicação:</label>
                    <input id="insertinput" type="text" name="anoaplicacao" required>
                    <label id="insertLabel">Usado:</label>
                    <input id="insertinput" type="text" name="usado" required>
                    <label id="insertLabel">Estoque Mínimo:</label>
                    <input id="insertinput" type="text" name="estoqueminimo" required>
                </div>
                <div id="buttons">
                    <button id="insertbutton" name="insertVeiculo" id="insertbutton">Inserir cadastro</button>
                    <button id="cancelarbutton" type="submit" onclick="callVeiculos()" name="cancelarVeiculo" id="cancelarbutton">Cancelar Cadastro</button>
                </div>

            </form>
    </div>
</div>

<?php

require "../DataBase/Banco.php";
require "../DataBase/Veiculos.php";

$banco = new Banco();
$conexao = $banco->connect();

$veiculo = new Veiculos();

$btnInsert = isset($_POST['insertVeiculo']);
$btnCancelar = isset($_POST['cancelarVeiculo']);

if ($btnInsert)
{
    $veiculo->receberDados($conexao);
    $veiculo->inserirVeiculo($conexao);
}

?>


</body>
</html>
