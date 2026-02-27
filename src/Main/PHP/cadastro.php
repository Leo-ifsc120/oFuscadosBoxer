<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>OFuscadosBoxer</title>
    <link rel="stylesheet" href="../CSS/styleUsuarios.css">
</head>
<body>

<header>
    <img alt="" src="../img/oFuscadosLogo.jpg">
    <p id="title"><strong>OFuscadosBoxer</strong></p>
</header>

<div class="container">

    <?php

    $serverName = "LEONARDO_NOTE\sqlexpress";
    $connectionInfo = array("Database"=>"Oficina", "UID"=>"", "PWD"=>"");

    $conn = sqlsrv_connect($serverName, $connectionInfo);


    echo "<table> <tr id='theader'><td>Id</td><td>Descrição</td><td>Embalagem</td><td>Produto</td><td>Fabricante</td><td>Fornecedor</td><td>Estoque</td><td>Aplicação</td><td>Ano da Aplicação</td><td>Usado</td><td>Estoque minimo</td><td>fotopro</td></tr>";
    $stmt = sqlsrv_query($conn, "select * from TblProdutos");
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
        echo "<tr><td>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "<td>" . $row[3] . "</td>";
        echo "<td>" . $row[4] . "</td>";
        echo "<td>" . $row[6] . "</td>";
        echo "<td>" . $row[7] . "</td>";
        echo "<td>" . $row[8] . "</td>";
        echo "<td>" . $row[9] . "</td>";
        echo "<td>" . $row[10] . "</td>";
        echo "<td>" . $row[12] . "</td>";
        echo "<td> <img alt='' src='$row[13]'> </td> </tr>";
    }



    ?>
</div>

</body>
</html>
