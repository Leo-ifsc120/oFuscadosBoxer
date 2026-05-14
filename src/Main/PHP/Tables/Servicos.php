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