<?php
    require_once('database.php');

    function insert_professor($sql) {
        // conecta com a base de dados
        $conn = db_connect();
        
        // executa o comando SQL
        mysqli_query($conn, $sql) or die('Erro na rotina de inserção: '.mysqli_error($conn));        
    }
        

    function createTableProfessor() {
        $conn = db_connect();
        $query = "SELECT ID FROM PROFESSORES";
        $result = mysqli_query($conn, $query);

        if(empty($result)) {
                $query = "CREATE TABLE PROFESSORES (
                          ID int(11) AUTO_INCREMENT,
                          NOME varchar(255) NOT NULL,
                          CPF varchar(14) NOT NULL,
                          MAIORTITULACAO varchar(255) NOT NULL,
                          AREAFORMACAO varchar(255) NOT NULL,
                          LINKLATTES varchar(255) NOT NULL,
                          DATAATUALIZACAO varchar(10) NOT NULL,
                          PRIMARY KEY  (ID)
                          )";
                $result = mysqli_query($conn, $query);
        }
    }
    createTableProfessor();

?>
