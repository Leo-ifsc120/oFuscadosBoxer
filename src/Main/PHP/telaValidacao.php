<?php

$serverName = "LEONARDO_NOTE\sqlexpress";
$connectionInfo = array("Database"=>"Oficina", "UID"=>"", "PWD"=>"");

$conn = sqlsrv_connect($serverName, $connectionInfo);

$user = $_POST["usuario"];
$pass = $_POST["password"];

$check = "select Dsusuario, Dssenha from TblUsuario";

$query = sqlsrv_query($conn, $check);
$row = sqlsrv_fetch_array($query);
do
{
    $userCheck = $row[0];
    $passCheck = $row[1];
    if($userCheck == strtoupper($user))
    {
        if ($passCheck == $pass)
        {
            require "cadastro.php";
            die();
        }
    }

}while( $row = sqlsrv_fetch_array($query));

require "telaDeLogin.php";
die("<div id='error'><p id='error'>Login ou Senha incorretos</p></div>");





?>
