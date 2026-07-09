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

    <form action="TblProdutos.php" method="post">

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
                    <input type="button" onclick="callInsertProduto()" class="crud" id="inserir" name="inserir" value="inserir">
                    <input type="button" onclick="callAlterarProduto()" class="crud" id="alterar" name="alterar" value="alterar">
                    <input type="button" onclick="callDeletarProduto()" class="crud" id="deletar" name="deletar" value="deletar">
                </div>

            </div>


        </div>

    </form>



<?php

require "../DataBase/Banco.php";

$banco = new Banco();
$conn = $banco->connect();

echo "<table> <tr id='theader'>
    <th><input type='radio' name='index' id='id' value='CdProduto'><label for='id'>ID</label></th>
    <th><input type='radio' name='index' id='cod_barras' value='CodBarras'><label for='cod_barras'>Código de Barras</label></th>
    <th><input type='radio' name='index' id='descricao' value='DsObservacao'><label for='descricao'>Descrição</label></th>
    <th><input type='radio' name='index' id='embalagem' value='DsEmbalagem'><label for='embalagem'>Embalagem</label></th>
    <th><input type='radio' name='index' id='estoque' value='NrEstoque'><label for='estoque'>Estoque</label></th>
    <th><input type='radio' name='index' id='fabricantes' value='DsFabricante'><label for='fabricantes'>Fabricantes</label></th>
    <th><input type='radio' name='index' id='cod_fabricantes' value='CdFabricante'><label for='cod_fabricantes'>Código dos Fabricantes</label></th>
    <th><input type='radio' name='index' id='aplicacao' value='DsAplicacao'><label for='aplicacao'>Aplicação</label></th>
    <th><input type='radio' name='index' id='ano_aplicacao' value='NrAnoAplicacao'><label for='ano_aplicacao'>Ano da Aplicação</label></th>
    <th><input type='radio' name='index' id='estado' value='InEstado'><label for='estado'>Estado</label></th>
    <th><input type='radio' name='index' id='estoque_minimo' value='NrEstoqueMinimo'><label for='estoque_minimo'>Estoque Minimo</label></th>
    <th>Foto do Produto</th>
</tr>";

$stmt = "select * from TblProdutos";

if(isset($_POST['pesquisar']))
{
    if(!empty($_POST['index']) && !empty($_POST['pesquisa']))
    {
        $index = $_POST['index'];
        $pesquisa = $_POST['pesquisa'];
        $stmt = "select * from TblProdutos where $index like '%$pesquisa%'";
    }
}

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
