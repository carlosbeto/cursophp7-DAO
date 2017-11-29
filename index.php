<?php

require_once("config.php");

$root = new Usuario();

$root -> loadById(3);

echo $root;

/*Esemplo anterior, antes da evolução do curso...
/*$sql = new sql(); 

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

?>