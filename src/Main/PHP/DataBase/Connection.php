<?php

$serverName = "LEONARDO_NOTE\SQLEXPRESS";
$connectionInfo = array( "Database"=>"Oficina");
$conn = new PDO("sqlsrv:server=$serverName;Database=Oficina", "", "");
//$conn = sqlsrv_connect( $serverName, $connectionInfo);

