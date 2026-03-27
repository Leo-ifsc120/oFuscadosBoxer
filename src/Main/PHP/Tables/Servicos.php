<?php


echo "<table> <tr id='theader'><th>Id</th><th>Razão social/Nome</th><th>Fantasia</th><th>Cnpj/CPF</th><th>Telefone</th><th>Endereço</th><th>CEP</th><th>E-Mail</th><th>Bairro</th><th>Cidade</th><th>UF/Região</th><th>Inscrição Estadual</th><th>WhatsApp</th><th>Contato</th><th>Data Cadastro</th><th>Nu Endereço</th><th>Complemento</th></tr>";
$stmt = sqlsrv_query($conn, "select * from TblFornecedores");

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {

    $date = $row[14]->format('d/m/Y');

    echo "<tr>
                <td> $row[0]  </td>
                <td> $row[1]  </td>
                <td> $row[2]  </td>
                <td> $row[10]  </td>
                <td> $row[3]  </td>
                <td> $row[4]  </td>
                <td> $row[5]  </td>
                <td> $row[6]  </td>
                <td> $row[7]  </td>
                <td> $row[8]  </td>
                <td> $row[9]  </td>
                <td> $row[11]  </td>
                <td> $row[12]  </td>
                <td> $row[13]  </td>
                <td> $date  </td>
                <td> $row[15]  </td>
                <td> $row[16]  </td>

           </tr>";

}
echo "</table>";
$stmt = null;