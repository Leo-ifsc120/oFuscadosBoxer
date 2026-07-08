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

    <form action="TblVeiculos.php" method="post">

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
                    <input type="submit" class="crud" id="pesquisar" name="pesquisar" value="Pesquisar">
                    <input type="text" name="pesquisa" id="pesquisa" placeholder="Digite aqui...">
                </div>

                <div id="mod">
                    <input type="button" onclick="callInsertVeiculo()" class="crud" id="inserir" name="inserir" value="inserir">
                    <input type="button" onclick="callAlterarVeiculo()" class="crud" id="alterar" name="alterar" value="alterar">
                    <input type="button" onclick="callDeletarVeiculo()" class="crud" id="deletar" name="deletar" value="deletar">
                </div>

            </div>


        </div>

    </form>

<?php

require "../DataBase/Connection.php";

echo "<table> <tr id='theader'>
    <th><input type='radio' name='index' id='cod' value='CdVeiculo'><label for='cod'>Cod</label></th>
    <th><input type='radio' name='index' id='descricao' value='DsVeiculo'><label for='descricao'>Descrição</label></th>
    <th><input type='radio' name='index' id='embalagem' value='DsEmbalagem'><label for='embalagem'>Embalagem</label></th>
    <th><input type='radio' name='index' id='produto' value='DsProduto'><label for='produto'>Produto</label></th>
    <th><input type='radio' name='index' id='fabricante' value='DsFabricante'><label for='fabricante'>Fabricante</label></th>
    <th><input type='radio' name='index' id='fornecedor' value='DsFornecedor'><label for='fornecedor'>Fornecedor</label></th>
    <th><input type='radio' name='index' id='estoque' value='NrEstoque'><label for='estoque'>Estoque</label></th>
    <th><input type='radio' name='index' id='aplicacao' value='DsAplicacao'><label for='aplicacao'>Aplicação</label></th>
    <th><input type='radio' name='index' id='ano_aplicacao' value='NrAnoAplicacao'><label for='ano_aplicacao'>Ano da Aplicação</label></th>
    <th><input type='radio' name='index' id='usado' value='InUsado'><label for='usado'>Usado</label></th>
    <th><input type='radio' name='index' id='estoque_minimo' value='NrEstoqueMinimo'><label for='estoque_minimo'>Estoque minimo</label></th>
    <th>Foto</th>
</tr>";

$stmt = "select * from tblVeiculos";

if(isset($_POST['pesquisar']))
{
    if(!empty($_POST['index']) && !empty($_POST['pesquisa']))
    {
        $index = $_POST['index'];
        $pesquisa = $_POST['pesquisa'];
        $stmt = "select * from tblVeiculos where $index like '%$pesquisa%'";
    }
}

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
