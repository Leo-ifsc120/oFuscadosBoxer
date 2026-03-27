<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>OFuscadosBoxer</title>
    <link rel="stylesheet" href="../../CSS/styleTabelas.css">
</head>
<body>

<header>
    <img alt="" src="../../img/Imagens/oFuscadosLogo.jpg" id="logo">
    <p id="title"><strong>OFuscadosBoxer</strong></p>
</header>

<div class="container">

    <div class="button">

        <form action="tabelas.php" method="post">

            <input type="submit" id="clientes" name="clientes" value=""></input>
            <input type="submit" id="fornecedores" name="fornecedores" value=""></input>
            <input type="submit" id="produtos" name="produtos" value=""></input>
            <input type="submit" id="servicos" name="servicos" value=""></input>
            <input type="submit" id="veiculos" name="veiculos" value=""></input>

        </form>

    </div>



    <?php

    require "../DataBase/Connection.php";

    $btnVeiculos = isset($_POST["veiculos"]);
    $btnClientes = isset($_POST["clientes"]);
    $btnFornecedores = isset($_POST["fornecedores"]);
    $btnProdutos = isset($_POST["produtos"]);
    $btnServicos = isset($_POST["servicos"]);



    if($btnVeiculos == true)
    {
        require "Veiculos.php";
    }

    if($btnClientes == true)
    {
        require "Clientes.php";
    }

    if($btnFornecedores == true)
    {
        require "Fornecedores.php";
    }

    if($btnProdutos == true)
    {
        require "Produtos.php";
    }

    if($btnServicos == true)
    {
        require "Servicos.php";
    }

    ?>
</div>

</body>
</html>
