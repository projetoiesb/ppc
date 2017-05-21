<?php

 require '../db/db_config.php';

 $id  = $_POST["id"];

 $sql = "DELETE FROM disciplinas WHERE id = '".$id."'";

 $result = $mysqli->query($sql);

 echo json_encode([$id]);

?>