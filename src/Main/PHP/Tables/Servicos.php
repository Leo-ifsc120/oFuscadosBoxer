<?php

echo "<div id='status'> <select name='status' ><option value='ativo'>Ativo</option><option value='inativo'>Inativo</option><option value='todos'>Todos</option></select></div>";

$status = $_GET['status'];



echo "<table> <tr id='theader'><th>Cód Serviço</th><th>Cód Cliente</th><th>Razão Social</th><th>Cód Veículo</th><th>KM Atual</th><th>Status</th><th>Situação</th><th>Óleo Trocado</th><th>Data Ordem de Serviço</th><th>Data de Entrega</th><th>Entrega Prevista</th><th>Data Saída</th><th>Valor Pago Antecipado</th><th>Falta Pagar</th></tr>";
$stmt = sqlsrv_query($conn, "select * from TblServicos where status = $status");

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {



    echo "<tr>
                <td> $row[0]  </td>
                <td> $row[1]  </td>
                <td> $row[0]  </td>
                <td> $row[2]  </td>
                <td> $row[3]  </td>
                <td> $row[4]  </td>
                <td> $row[5]  </td>
                <td> $row[6]  </td>
                <td> $row[7]  </td>
                <td> $row[8]  </td>

           </tr>";

}
echo "</table>";
$stmt = null;