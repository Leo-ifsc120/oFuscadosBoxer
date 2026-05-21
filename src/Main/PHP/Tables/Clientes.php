<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>OFuscadosBoxer</title>
    <link rel="stylesheet" href="../../CSS/styleTabelas.css">
</head>
<body>

<script src="../../JavaScript/Node.js"></script>

<header>
    <img alt="" src="../../img/Imagens/oFuscadosLogo.jpg" id="logo">
    <p id="title"><strong>OFuscadosBoxer</strong></p>
</header>

<div class="container">

    <div class="button">

        <form action="../Tables/tabelas.php" method="post">

            <input type="button" onclick="callClientes()" id="clientes" name="clientes">
            <input type="button" onclick="callFornecedores()" id="fornecedores" name="fornecedores">
            <input type="button" onclick="callProdutos()" id="produtos" name="produtos">
            <input type="button" onclick="callServicos()" id="servicos" name="servicos">
            <input type="button" onclick="callVeiculos()" id="veiculos" name="veiculos">

            <input type="button" id="inserir" name="inserir" value="inserir">

        </form>

    </div>



<?php

require "../DataBase/Connection.php";

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

?>

</div>

<h1>Clientes</h1>

</body>
</html>
