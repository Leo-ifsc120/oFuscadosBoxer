<?php

class Banco
{

    public $serverName = "LEONARDO_NOTE\SQLEXPRESS";

    function connect()
    {
        $conn = new PDO("sqlsrv:server=$this->serverName;Database=Oficina", "", "");
        return $conn;
    }

}