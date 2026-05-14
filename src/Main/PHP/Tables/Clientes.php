<?php

echo "<table> <tr id='theader'><th>Id</th><th>Razão social/Nome</th><th>E-mail</th><th>Telefone</th><th>Whatsapp</th><th>Cnpj/Cpf</th><th>Endereço</th><th>Nu Endereço</th><th>Bairro</th><th>Cidade</th><th>Região</th><th>Complemento</th><th>CEP</th><th>Fantasia</th><th>Data Cadastro</th></tr>";

$stmt = "select * from TblClientes";
$result = $conn->query($stmt)->fetchAll();

foreach( $result as $row ) {
    

    echo "<tr>
                <td> $row[0]  </td>
                <td> $row[1]  </td>
                <td> $row[6]  </td>
                <td> $row[3]  </td>
                <td> $row[12] </td>
                <td> $row[10] </td>
                <td> $row[4]  </td>
                <td> $row[5]  </td>
                <td> $row[7]  </td>
                <td> $row[8]  </td>
                <td> $row[9]  </td>
                <td> $row[15] </td>
                <td> $row[5]  </td>
                <td> $row[2]  </td>
                <td> $row[13]   </td>
              </tr>";
}
echo "</table>";
$stmt = null;