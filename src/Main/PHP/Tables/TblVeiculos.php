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

        <table> <tr id='theader'>
                <th><input type='radio' name='index' id='cd_veiculo' value='CdVeiculo'><label for='cd_veiculo'>ID Veículo</label></th>
                <th><input type='radio' name='index' id='cd_cliente' value='CdCliente'><label for='cd_cliente'>ID Cliente</label></th>
                <th><input type='radio' name='index' id='veiculo' value='DsVeiculo'><label for='veiculo'>Veículo</label></th>
                <th><input type='radio' name='index' id='proprietario' value='Dsproprietario'><label for='proprietario'>Proprietário</label></th>
                <th><input type='radio' name='index' id='placa' value='DsPlaca'><label for='placa'>Placa</label></th>
                <th><input type='radio' name='index' id='renavam' value='Dsrenavam'><label for='renavam'>Renavam</label></th>
                <th><input type='radio' name='index' id='marca' value='DsMarca'><label for='marca'>Marca</label></th>
                <th><input type='radio' name='index' id='modelo' value='DsModelo'><label for='modelo'>Modelo</label></th>
                <th><input type='radio' name='index' id='apelido' value='DsApelido'><label for='apelido'>Apelido</label></th>
                <th><input type='radio' name='index' id='cor' value='DsCor'><label for='cor'>Cor</label></th>
                <th><input type='radio' name='index' id='combustivel' value='DsCombustivel'><label for='combustivel'>Combustível</label></th>
                <th><input type='radio' name='index' id='cilindrada' value='DsCilindrada'><label for='cilindrada'>Cilindrada</label></th>
                <th><input type='radio' name='index' id='motor' value='Dsmotor'><label for='motor'>Motor</label></th>
                <th><input type='radio' name='index' id='hp' value='DsHp'><label for='hp'>HP</label></th>
                <th><input type='radio' name='index' id='ano_fabricacao' value='DtAnoFabricacao'><label for='ano_fabricacao'>Ano Fabricação</label></th>
                <th><input type='radio' name='index' id='modelo_dt' value='Dtmodelo'><label for='modelo_dt'>Modelo Data</label></th>
                <th><input type='radio' name='index' id='km_inicial' value='NrKmInicial'><label for='km_inicial'>KM Inicial</label></th>
                <th><input type='radio' name='index' id='km_atual' value='NrKmAtual'><label for='km_atual'>KM Atual</label></th>
                <th><input type='radio' name='index' id='status' value='InStatus'><label for='status'>Status</label></th>
                <th><input type='radio' name='index' id='uf_local' value='CdUFLocal'><label for='uf_local'>UF Local</label></th>
                <th><input type='radio' name='index' id='observacao' value='DsObservacao'><label for='observacao'>Observação</label></th>
                <th><input type='radio' name='index' id='data_cadastro' value='dtcadastro'><label for='data_cadastro'>Data Cadastro</label></th>
            </tr>

    </form>

<?php

require "../DataBase/Banco.php";

$banco = new Banco();
$conn = $banco->connect();

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

    foreach ($result as $row) {
        echo "<tr>
                <td> $row[CdVeiculo] </td>
                <td> $row[CdCliente] </td>
                <td> $row[DsVeiculo] </td>
                <td> $row[Dsproprietario] </td>
                <td> $row[DsPlaca] </td>
               <td> $row[Dsrenavam] </td>
               <td> $row[DsMarca] </td>
               <td> $row[DsModelo] </td>
               <td> $row[DsApelido] </td>
               <td> $row[DsCor] </td>
               <td> $row[DsCombustivel] </td>
               <td> $row[DsMarca] </td>
               <td> $row[DsCilindrada] </td>
               <td> $row[Dsmotor] </td>
               <td> $row[DsHp] </td>
               <td> $row[DtAnoFabricacao] </td>
               <td> $row[Dtmodelo] </td>
               <td> $row[NrKmInicial] </td>
               <td> $row[NrKmAtual] </td>
               <td> $row[InStatus] </td>
               <td> $row[CdUFLocal] </td>
               <td> $row[DsObservacao] </td>
               <td> $row[dtcadastro] </td>
             </tr>";
    }
    echo "</table>";
    $stmt = null;

?>

</div>

<h1>Veiculos</h1>

</body>
</html>
