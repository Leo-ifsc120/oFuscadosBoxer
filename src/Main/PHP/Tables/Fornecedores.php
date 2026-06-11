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


        <form action="../Tables/tabelas.php" method="post">

            <div class="button">

                <div id="tables">

                <input type="button" onclick="callClientes()" id="clientes" name="clientes">
                <input type="button" onclick="callFornecedores()" id="fornecedores" name="fornecedores">
                <input type="button" onclick="callProdutos()" id="produtos" name="produtos">
                <input type="button" onclick="callServicos()" id="servicos" name="servicos">
                <input type="button" onclick="callVeiculos()" id="veiculos" name="veiculos">

                </div>


                <div id="crud">

                    <input type="button" onclick="callInsertFornecedor()" id="inserir" name="inserir" value="inserir">
                    <input type="button" onclick="callAlterarFornecedor()" id="alterar" name="alterar" value="alterar">
                    <input type="button" onclick="callDeletarFornecedor()" id="deletar" name="deletar" value="deletar">


                </div>


            </div>

        </form>





<?php

require "../DataBase/Connection.php";

echo "<table> <tr id='theader'><th>Id</th><th>Razão social/Nome</th><th>Fantasia</th><th>Cnpj/CPF</th><th>Telefone</th><th>Endereço</th><th>CEP</th><th>E-Mail</th><th>Bairro</th><th>Cidade</th><th>UF/Região</th><th>Inscrição Estadual</th><th>WhatsApp</th><th>Contato</th><th>Data Cadastro</th><th>Nu Endereço</th><th>Complemento</th></tr>";
$stmt = "select * from TblFornecedores";
$result = $conn->query($stmt)->fetchAll();

foreach ($result as $row) {



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
                <td> $row[14]  </td>
                <td> $row[15]  </td>
                <td> $row[16]  </td>

           </tr>";
}

echo "</table>";
$stmt = null;

?>

</div>

<h1>Fornecedores</h1>

</body>
</html>
