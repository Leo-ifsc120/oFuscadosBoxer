<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>OFuscadosBoxer</title>
    <link rel="stylesheet" href="../../CSS/styleTabelas.css">
</head>
<body>

<script src="../../JavaScript/Script.js"></script>

<header>
    <img alt="" src="../../img/Imagens/oFuscadosLogo.jpg" id="logo">
    <h1 id="title"><strong>OFuscadosBoxer</strong></h1>
</header>

<div class="container">

    <div class="button">

        <form action="../Tables/Tabelas.php" method="post">
            <div class="button">

                <div id="tables">

                    <input type="button" onclick="callClientes()" id="clientes" name="clientes">
                    <input type="button" onclick="callFornecedores()" id="fornecedores" name="fornecedores">
                    <input type="button" onclick="callProdutos()" id="produtos" name="produtos">
                    <input type="button" onclick="callServicos()" id="servicos" name="servicos">
                    <input type="button" onclick="callVeiculos()" id="veiculos" name="veiculos">

                </div>

            </div>

        </form>

    </div>

</div>

</body>
</html>
