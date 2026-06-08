<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>OFuscadosBoxer</title>
    <link rel="stylesheet" href="../../CSS/styleTabelas.css">
</head>
<body>

<script src="../../JavaScript/Node.js"></script>

<header>
    <img alt="" src="../../img/Imagens/oFuscadosLogo.jpg" id="logo">
    <p id="title"><strong>OFuscadosBoxer</strong></p>
</header>

<div class="container">
    <div class="cabecalho">
        <h1>Cadastro de Fornecedores</h1>

            <form action="../Tables/tabelas.php" method="post">

                <div class="insertform">

                    <label for="razaoSocial">Razão Social: </label>
                    <input id="insertinput" type="text" name="razaoSocial" required>
                    <label for="fatasia">Fantasia:</label>
                    <input id="insertinput" type="text" name="fantasia" required>
                    <label for="cnpjCpf">Cnpj/cpf:</label>
                    <input id="insertinput" type="text" name="cnpjcpf" required>
                    <label>Inscrição Estadual:</label>
                    <input id="insertinput" type="text" name="inscricao" required>
                    <label>E-Mail:</label>
                    <input id="insertinput" type="text" name="email" required>
                    <label>Telefone:</label>
                    <input id="insertinput" type="text" name="telefone" required>
                    <label>WhatsApp:</label>
                    <input id="insertinput" type="text" name="whatsApp" required>
                    <label>Endereço:</label>
                    <input id="insertinput" type="text" name="endereco" required>
                    <label>CEP:</label>
                    <input id="insertinput" type="text" name="CEP" required>
                    <label>Bairro:</label>
                    <input id="insertinput" type="text" name="Bairro" required>
                    <label>Cidade:</label>
                    <input id="insertinput" type="text" name="Cidade" required>
                    <label>UF/Região:</label>
                    <input id="insertinput" type="text" name="UF" required>

                    <button id="insertbutton" name="insertFornecedor" id="insertbutton">Inserir cadastro</button>
                    <button id="cancelarbutton" type="submit" name="cancelarFornecedor" id="cancelarbutton">Cancelar Cadastro</button>

                </div>

            </form>
    </div>
</div>

<?php

require "../DataBase/Connection.php";
require "../DataBase/Fornecedores.php";

$fornecedor = new Fornecedores();

$fornecedor->receberDados();


?>


</body>
</html>