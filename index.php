<?php

require_once("config.php");

//carrega um usuario conforme o ID - descomente as próximas 3 linhas
//$root = new Usuario();
//$root -> loadById(3);
//echo $root;

//Carrega uma lista de usuários - descomente as próximas 2 linhas

//$lista = Usuario::getList();
//echo json_encode($lista); 

// Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("ro");
echo json_encode($search);


/*Esemplo anterior, antes da evolução do curso...
/*$sql = new sql(); 

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

?>