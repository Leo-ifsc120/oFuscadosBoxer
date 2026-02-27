<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>OFuscadosBoxer</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>

<header>
    <img alt="" src="../img/oFuscadosLogo.jpg">
    <p id="title"><strong>OFuscadosBoxer</strong></p>
</header>

<div class="container">

    <?php

    $serverName = "LEONARDO_NOTE\sqlexpress";
    $connectionInfo = array("Database"=>"aula", "UID"=>"", "PWD"=>"");

    $conn = sqlsrv_connect($serverName, $connectionInfo);
    if( $conn ) {
        echo "<p>Connection established.</p><br>";
    }else{
        echo "<p>Connection could not be established.</p><br>";
        die( print_r( sqlsrv_errors(), true));
    }

    echo "<table> <tr><td>id</td><td>nome</td><td>idade</td></tr> ";
    $stmt = sqlsrv_query($conn, "select * from aluno");
    if( $stmt === false) {
        die( print_r( sqlsrv_errors(), true) );
    }

    while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) {
        echo "<tr><td>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
    }



    ?>
</div>

</body>
</html>
