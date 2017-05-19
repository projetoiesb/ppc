<?php

    function db_connect() {
        
        static $conn;

        $banco   = 'ppc';
        $usuario = 'root';
        $senha   = '';
        $host    = 'localhost';
        $conn = mysqli_connect($host, $usuario, $senha) or die('Erro na rotina de conexão: '.mysql_error());
        mysqli_select_db($conn, $banco) or die('Erro ao selecionar o banco de dados: '.mysql_error());
        mysqli_query($conn, "SET NAMES 'utf8'");
        mysqli_query($conn, "SET character_set_connection=utf8");
        mysqli_query($conn, "SET character_set_client=utf8");
        mysqli_query($conn, "SET character_set_results=utf8");

        return $conn;
    }

?>
