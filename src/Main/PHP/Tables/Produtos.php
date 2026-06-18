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
    <p id="title"><strong>OFuscadosBoxer</strong></p>
</header>

<div class="container">

    <form action="Produtos.php" method="post">

        <div class="button">

            <div id="tables">
                <input type="button" onclick="callClientes()" id="clientes" name="clientes">
                <input type="button" onclick="callFornecedores()" id="fornecedores" name="fornecedores">
                <input type="button" onclick="callProdutos()" id="produtos" name="produtos">
                <input type="button" onclick="callServicos()" id="servicos" name="servicos">
                <input type="button" onclick="callVeiculos()" id="veiculos" name="veiculos">
            </div>


            <div id="crud">

                <div id="search">
                    <input type="button" class="crud" id="pesquisar">
                    <input type="text" name="pesquisa" id="pesquisa">
                </div>

                <div id="mod">
                    <input type="button" onclick="callInsertFornecedor()" class="crud" id="inserir" name="inserir" value="inserir">
                    <input type="button" onclick="callAlterarFornecedor()" class="crud" id="alterar" name="alterar" value="alterar">
                    <input type="button" onclick="callDeletarFornecedor()" class="crud" id="deletar" name="deletar" value="deletar">
                </div>

            </div>


        </div>

    </form>



<?php

require "../DataBase/Connection.php";

echo "<table> <tr id='theader'><th>Id</th><th>Código de Barras</th><th>Descrição</th><th>Embalagem</th><th>Estoque</th><th>Fabricantes</th><th>Código dos Fabricantes</th><th>Aplicação</th><th>Ano da Aplicação</th><th>Estado</th><th>Estoque Minimo</th><th>Foto do Produto</th></tr>";

$stmt = "select * from TblProdutos";
$result = $conn->query($stmt)->fetchAll();

foreach($result as $row) {

    echo "<tr>
                <td> $row[0]  </td>
                <td> $row[14] </td>
                <td> $row[1]  </td>
                <td> $row[2]  </td>
                <td> $row[3] </td>
                <td> $row[4] </td>
                <td> $row[5] </td>
                <td> $row[8] </td>
                <td> $row[9] </td>
                <td> $row[10] </td>
                <td> $row[12] </td>
                <td> Foto</td>
              </tr>";
}
echo "</table>";
$stmt = null;

?>

</div>

<h1>Produtos</h1>

</body>
</html>
