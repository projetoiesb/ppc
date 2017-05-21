<?php

require '../db/db_config.php';

  $post = $_POST;
  $sql = "INSERT INTO disciplinas (nome,
                                   descricao,
                                   codigo,
                                   semestre,
                                   carga_horaria) 
            VALUES ('".$post['nome']."','
                     ".mysql_real_escape_string($post['descricao'])."','
                     ".$post['codigo']."','
                     ".$post['semestre']."','
                     ".$post['carga_horaria']."')";

  $result = $mysqli->query($sql);
  $sql = "SELECT * FROM disciplinas Order by id desc LIMIT 1"; 
  $result = $mysqli->query($sql);
  $data = $result->fetch_assoc();

  echo json_encode($data);

?>