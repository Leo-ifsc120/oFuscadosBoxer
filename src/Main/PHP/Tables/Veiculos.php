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

    <div class="button">

        <form action="../Tables/tabelas.php" method="post">
            <div class="button">

                <div id="tables">

                    <input type="button" onclick="callClientes()" id="clientes" name="clientes">
                    <input type="button" onclick="callFornecedores()" id="fornecedores" name="fornecedores">
                    <input type="button" onclick="callProdutos()" id="produtos" name="produtos">
                    <input type="button" onclick="callServicos()" id="servicos" name="servicos">
                    <input type="button" onclick="callVeiculos()" id="veiculos" name="veiculos">

                </div>


                <div id="crud">

                    <input type="button" onclick="callInsertFornecedor()" id="inserir" name="inserir" value="inserir">
                    <input type="button" onclick="callAlterarFornecedor()" id="alterar" name="alterar" value="alterar">
                    <input type="button" onclick="callDeletarFornecedor()" id="deletar" name="deletar" value="deletar">


                </div>


            </div>

        </form>

    </div>



<?php

require "../DataBase/Connection.php";

echo "<table> <tr id='theader'><th>Cod</th><th>Descrição</th><th>Embalagem</th><th>Produto</th><th>Fabricante</th><th>Fornecedor</th><th>Estoque</th><th>Aplicação</th><th>Ano da Aplicação</th><th>Usado</th><th>Estoque minimo</th><th>fotopro</th></tr>";

$stmt = "select * from tblVeiculos";
$result = $conn->query($stmt)->fetchAll();

foreach($result as $row) {
    echo "<tr>
                <td> $row[0] </td>
                <td> $row[1] </td>
                <td> $row[2] </td>
                <td> $row[3] </td>
                <td> $row[4] </td>
                <td> $row[6] </td>
                <td> $row[7] </td>
                <td> $row[8] </td>
                <td> $row[9] </td>
                <td> $row[10] </td>
                <td> $row[12] </td>
                <td> <img src='$row[13]' alt=''></td>
              </tr>";
}
echo "</table>";
$stmt = null;

?>

</div>

<h1>Veiculos</h1>

</body>
</html>
