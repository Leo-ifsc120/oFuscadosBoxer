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

echo "<table> <tr id='theader'><th>Cód Serviço</th><th>Cód Cliente</th><th>Razão Social</th><th>Cód Veículo</th><th>KM Atual</th><th>Status</th><th>Situação</th><th>Óleo Trocado</th><th>Data Ordem de Serviço</th><th>Data de Entrada</th><th>Entrega Prevista</th><th>Data Saída</th><th>Valor Pago Antecipado</th><th>Falta Pagar</th></tr>";
$stmt = "select * from TblServicos";
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
