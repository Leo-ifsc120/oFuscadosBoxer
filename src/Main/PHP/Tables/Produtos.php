<?php


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