<?php

$serverName = "LEONARDO_NOTE\sqlexpress";
$connectionInfo = array("Database"=>"Oficina", "UID"=>"", "PWD"=>"");

$conn = sqlsrv_connect($serverName, $connectionInfo);

$user = $_POST["usuario"];
$pass = $_POST["password"];

$check = "select * from TblUsuario";

$query = sqlsrv_query($conn, $check);

while( $row = sqlsrv_fetch_array( $query, SQLSRV_FETCH_NUMERIC) )
{

    $userCheck = $row[1];
    $passCheck = $row[2];
    if(strtoupper($user) !== $userCheck)
    {
        require "telaDeLogin.php";
        die("<div class='error'><P class='error'>O usuario ou senha incorretos</P></div>");
    }
    elseif($pass !== $passCheck)
    {
        require "telaDeLogin.php";
        die("<div class='error'><P class='error'>O usuario ou senha incorretos</P></div>");
    }
    else
    {
        require "cadastro.php";
        die();
    }



}
?>
