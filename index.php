<?php
    require_once("config.php");

//Carrega um usário
//$gabriel = new Usuario();
//$gabriel->loadbyId(4);
//echo $root;

//Carrega uma lista usuáros
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pleo login
//$search = Usuario::search("Jhon");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("Jhon", "1111");
echo $usuario;

?>