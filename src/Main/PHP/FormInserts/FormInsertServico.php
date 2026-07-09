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
        <h1>Cadastro de Serviços</h1>

            <form action="FormInsertServico.php" method="post">

                <div class="form">

                    <label id="insertLabel">Código Cliente: </label>
                    <input id="insertinput" type="text" name="cdcliente" required>
                    <label id="insertLabel">Razão:</label>
                    <input id="insertinput" type="text" name="razao" required>
                    <label id="insertLabel">Código Veículo:</label>
                    <input id="insertinput" type="text" name="cdveiculo" required>
                    <label id="insertLabel">KM Atual:</label>
                    <input id="insertinput" type="text" name="kmatual" required>
                    <label id="insertLabel">Status:</label>
                    <input id="insertinput" type="text" name="status" required>
                    <label id="insertLabel">Situação:</label>
                    <input id="insertinput" type="text" name="situacao" required>
                    <label id="insertLabel">Troca de Óleo:</label>
                    <input id="insertinput" type="text" name="trocaoleao" required>
                    <label id="insertLabel">Data Ordem de Serviço:</label>
                    <input id="insertinput" type="text" name="dtordemservico" required>
                    <label id="insertLabel">Data Entrada:</label>
                    <input id="insertinput" type="text" name="dtentrada" required>
                    <label id="insertLabel">Data Prevista:</label>
                    <input id="insertinput" type="text" name="dtprevisto" required>
                    <label id="insertLabel">Data Saída:</label>
                    <input id="insertinput" type="text" name="dtsaida" required>
                    <label id="insertLabel">Valor Antecipado:</label>
                    <input id="insertinput" type="text" name="valorantecipado" required>
                    <label id="insertLabel">Valor Falta Pagar:</label>
                    <input id="insertinput" type="text" name="valorfaltapagar" required>
                </div>
                <div id="buttons">
                    <button id="insertbutton" name="insertServico" id="insertbutton">Inserir cadastro</button>
                    <button id="cancelarbutton" type="submit" onclick="callServicos()" name="cancelarServico" id="cancelarbutton">Cancelar Cadastro</button>
                </div>

            </form>
    </div>
</div>

<?php

require "../DataBase/Banco.php";
require "../DataBase/Servicos.php";

$banco = new Banco();
$conexao = $banco->connect();

$servico = new Servicos();

$btnInsert = isset($_POST['insertServico']);
$btnCancelar = isset($_POST['cancelarServico']);

if ($btnInsert)
{
    $servico->receberDados($conexao);
    $servico->inserirServico($conexao);
}

?>


</body>
</html>
