<?php 

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/

/*
carrega um usuario
$root = new Usuario();

$root->loadById(3);

echo $root;
*/
/*
//lista de usuarios
$lista = Usuario::getList();

echo json_encode($lista);

*/
/*
//carrega uma lista de usuarios buscando pelo login
$search = Usuario::search("jo");

echo json_encode($search);
*/

//carrega usu usando login e senha
$user = new Usuario();
$user->login("root","56789");
echo $user;
?>