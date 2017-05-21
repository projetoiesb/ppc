<?php

require '../db/db_config.php';

  $id  = $_POST["id"];
  $post = $_POST;
  $sql = "UPDATE disciplinas SET nome = '".$post['nome']."',
                                 descricao = '".$post['descricao']."', 
                                 codigo = '".$post['codigo']."',
                                 semestre = '".$post['semestre']."',
                                 carga_horaria = '".$post['carga_horaria']."'
                             WHERE id = '".$id."'";

$result = $mysqli->query($sql);
$sql = "SELECT * FROM disciplinas WHERE id = '".$id."'"; 
$result = $mysqli->query($sql);
$data = $result->fetch_assoc();
echo json_encode($data);

?>