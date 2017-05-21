<?php require_once('../database.php');

    function insert_disciplina($sql) {
        // conecta com a base de dados
        $conn = db_connect();
        
        // executa o comando SQL
        mysqli_query($conn, $sql) or die('Erro na rotina de inserção: '.mysqli_error($conn));        
    }
        

    function createTableDisciplinas() {
        $conn = db_connect();
        $query = "SELECT id FROM disciplinas";
        $result = mysqli_query($conn, $query);

        if(empty($result)) {
                $query = "CREATE TABLE discplinas (
                          id int(11) AUTO_INCREMENT,
                          nome varchar(255) NOT NULL,
                          descricao varchar(14) NOT NULL,
                          codigo varchar(255) NOT NULL,
                          semestre varchar(255) NOT NULL,
                          carga_horaria varchar(255) NOT NULL,
                          PRIMARY KEY  (id)
                          )";
                $result = mysqli_query($conn, $query);
        }
    }
    createTableDisciplinas();

?>
