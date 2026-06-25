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

    <form action="Servicos.php" method="post">

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
                    <input type="button" onclick="callInsertFornecedor()" class="crud" id="inserir" name="inserir" value="inserir">
                    <input type="button" onclick="callAlterarFornecedor()" class="crud" id="alterar" name="alterar" value="alterar">
                    <input type="button" onclick="callDeletarFornecedor()" class="crud" id="deletar" name="deletar" value="deletar">
                </div>

            </div>


        </div>

    </form>



<?php

require "../DataBase/Connection.php";

echo "<table> <tr id='theader'>
    <th><input type='radio' name='index' id='cod_servico' value='CdServico'><label for='cod_servico'>Cód Serviço</label></th>
    <th><input type='radio' name='index' id='cod_cliente' value='cdcliente'><label for='cod_cliente'>Cód Cliente</label></th>
    <th><input type='radio' name='index' id='razao_social' value='DsRazao'><label for='razao_social'>Razão Social</label></th>
    <th><input type='radio' name='index' id='cod_veiculo' value='cdveiculo'><label for='cod_veiculo'>Cód Veículo</label></th>
    <th><input type='radio' name='index' id='km_atual' value='NrKmAtual'><label for='km_atual'>KM Atual</label></th>
    <th><input type='radio' name='index' id='status' value='InStatus'><label for='status'>Status</label></th>
    <th><input type='radio' name='index' id='situacao' value='InSituacao'><label for='situacao'>Situação</label></th>
    <th><input type='radio' name='index' id='oleo_trocado' value='InTrocaoleo'><label for='oleo_trocado'>Óleo Trocado</label></th>
    <th><input type='radio' name='index' id='data_os' value='DtOrdemServico'><label for='data_os'>Data Ordem de Serviço</label></th>
    <th><input type='radio' name='index' id='data_entrada' value='DtEntrada'><label for='data_entrada'>Data de Entrada</label></th>
    <th><input type='radio' name='index' id='data_prevista' value='DtPrevisto'><label for='data_prevista'>Entrega Prevista</label></th>
    <th><input type='radio' name='index' id='data_saida' value='DtSaida'><label for='data_saida'>Data Saída</label></th>
    <th><input type='radio' name='index' id='valor_antecipado' value='VlordemServicoPgAntecipado'><label for='valor_antecipado'>Valor Pago Antecipado</label></th>
    <th><input type='radio' name='index' id='falta_pagar' value='VlordemServicofaltaPagar'><label for='falta_pagar'>Falta Pagar</label></th>
</tr>";

$stmt = "select * from TblServicos";

if(isset($_POST['pesquisar']))
{
    if(!empty($_POST['index']) && !empty($_POST['pesquisa']))
    {
        $index = $_POST['index'];
        $pesquisa = $_POST['pesquisa'];
        $stmt = "select * from TblServicos where $index like '%$pesquisa%'";
    }
}

$result = $conn->query($stmt)->fetchAll();


foreach( $result as $row ) {
    $stmt = "select * from TblClientes where TblClientes.CdCliente = $row[cdcliente]";
    $cliente = $conn->query($stmt)->fetch();

    echo "<tr>
                <td> $row[CdServico]  </td>
                <td> $row[cdcliente]  </td>
                <td> $cliente[DsRazao]  </td>
                <td> $row[cdveiculo]  </td>
                <td> $row[NrKmAtual]  </td>
                <td> $row[InStatus]  </td>
                <td> $row[InSituacao]  </td>
                <td> $row[InTrocaoleo]  </td>
                <td> $row[DtOrdemServico]  </td>
                <td> $row[DtEntrada]  </td>
                <td> $row[DtPrevisto]  </td>
                <td> $row[DtSaida]  </td>
                <td> $row[VlordemServicoPgAntecipado]  </td>
                <td> $row[VlordemServicofaltaPagar]  </td>
           </tr>";
}
echo "</table>";

$stmt = null;


?>

</div>

<h1>Serviços</h1>

</body>
</html>
