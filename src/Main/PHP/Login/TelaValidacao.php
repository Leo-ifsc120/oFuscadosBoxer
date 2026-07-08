<?php
require '../DataBase/Connection.php';
$user = $_POST["usuario"];
$pass = $_POST["password"];



$check = "select Dsusuario, Dssenha from TblUsuario where Dsusuario = 'strtoupper($user)' and Dssenha = $pass";

$resultado = $conn->query($check)->fetchAll();

if ($resultado = null)
{
    require "TelaDeLogin.php";
    die("<div id='error'><p id='error'>Login ou Senha incorretos</p></div>");

}
else
{
    require "../Tables/Tabelas.php";
}



