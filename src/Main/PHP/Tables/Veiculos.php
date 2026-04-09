<?php

echo "<table> <tr id='theader'><th>Cod</th><th>Descrição</th><th>Embalagem</th><th>Produto</th><th>Fabricante</th><th>Fornecedor</th><th>Estoque</th><th>Aplicação</th><th>Ano da Aplicação</th><th>Usado</th><th>Estoque minimo</th><th>fotopro</th></tr>";
$stmt = sqlsrv_query($conn, "select * from TblVeiculos");
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
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