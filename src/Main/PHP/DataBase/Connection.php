<?php

$dataBase = "Oficina";
$username = "";
$password = "";
$serverName = "LEONARDO_NOTE\sqlexpress";

$connectionInfo = array("Database"=>$dataBase, "UID"=>$username, "PWD"=>$password, "CharacterSet"=>"UTF-8");

$conn = sqlsrv_connect($serverName, $connectionInfo);

