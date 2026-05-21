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

                    <label>Razão Social</label>
                    <input type="text" name="razaoSocial" required>
                    <label>Fantasia</label>
                    <input type="text" name="fantasia" required>
                    <label>Cnpj/Cpf</label>
                    <input type="text" name="cnpjCpf" required>
                    <label>Inscrição Estadual</label>
                    <input type="text" name="inscricaoEstadual" required>
                    <label>E-Mail</label>
                    <input type="text" name="email" required>
                    <label>Telefone</label>
                    <input type="text" name="telefone" required>
                    <label>WhatsApp</label>
                    <input type="text" name="WhatsApp" required>
                    <label>Endereço</label>
                    <label>CEP</label>
                    <label>Bairro</label>
                    <label>Cidade</label>
                    <label>UF/Região</label>

                </div>
            </form>
    </div>







<?php
