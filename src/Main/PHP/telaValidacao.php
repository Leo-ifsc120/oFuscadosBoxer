<?php

$serverName = "LEONARDO_NOTE\sqlexpress";
$connectionInfo = array("Database"=>"Oficina", "UID"=>"", "PWD"=>"");

$conn = sqlsrv_connect($serverName, $connectionInfo);

$user = $_POST["usuario"];
$pass = $_POST["password"];

$check = "select Dsusuario, Dssenha from TblUsuario where Dsususario = $user and Dssenha = $pass";

$query = sqlsrv_query($conn, $check);
while( $row = sqlsrv_fetch_array($query) )
{
    $userCheck = $row[0];
    $passcheck = $row[2];
}


echo "<p> $usercheck $passCheck </p>"


?>
