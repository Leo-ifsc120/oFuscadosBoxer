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
    if($user = $userCheck)
    {
        require "cadastro.php";
    }

}
?>
