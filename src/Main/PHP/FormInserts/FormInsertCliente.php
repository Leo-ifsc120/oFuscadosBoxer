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
        <h1>Cadastro de Clientes</h1>

            <form action="FormInsertCliente.php" method="post">

                <div class="form">

                    <label id="insertLabel">Razão Social: </label>
                    <input id="insertinput" type="text" name="razaoSocial" required>
                    <label id="insertLabel">Fantasia:</label>
                    <input id="insertinput" type="text" name="fantasia" required>
                    <label id="insertLabel">Cnpj/cpf:</label>
                    <input id="insertinput" type="text" name="cnpjcpf" required>
                    <label id="insertLabel">Inscrição Estadual:</label>
                    <input id="insertinput" type="text" name="inscricao" required>
                    <label id="insertLabel">E-Mail:</label>
                    <input id="insertinput" type="text" name="email" required>
                    <label id="insertLabel">Telefone:</label>
                    <input id="insertinput" type="text" name="telefone" required>
                    <label id="insertLabel">WhatsApp:</label>
                    <input id="insertinput" type="text" name="whatsApp" required>
                    <label id="insertLabel">Endereço:</label>
                    <input id="insertinput" type="text" name="endereco" required>
                    <label id="insertLabel">CEP:</label>
                    <input id="insertinput" type="text" name="CEP" required>
                    <label id="insertLabel">Bairro:</label>
                    <input id="insertinput" type="text" name="Bairro" required>
                    <label id="insertLabel">Cidade:</label>
                    <input id="insertinput" type="text" name="Cidade" required>
                    <label id="insertLabel">UF/Região:</label>
                    <input id="insertinput" type="text" name="UF" required>
                </div>
                <div id="buttons">
                    <button id="insertbutton" name="insertCliente" id="insertbutton">Inserir cadastro</button>
                    <button id="cancelarbutton" type="submit" onclick="callClientes()" name="cancelarCliente" id="cancelarbutton">Cancelar Cadastro</button>
                </div>

            </form>
    </div>
</div>

<?php

require "../DataBase/Banco.php";
require "../DataBase/Clientes.php";

$banco = new Banco();
$conexao = $banco->connect();

$cliente = new Clientes();

$btnInsert = isset($_POST['insertCliente']);
$btnCancelar = isset($_POST['cancelarCliente']);

if ($btnInsert)
{
    $cliente->receberDados($conexao);
    $cliente->inserirCliente($conexao);
}

?>


</body>
</html>
