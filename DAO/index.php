<?php  
require_once("config.php");
/*
$root = new Usuario();
$root->loadbyID(2);
echo $root;
------------------------------------------
Carrega uma lista de Usuarios
$lista = Usuario::getList();
echo json_encode($lista);
------------------------------------------
Carrega uma lista de usuários buscando pelo login
$search = Usuario::search("lu");
echo json_encode($search);
-------------------------------------------
Carrega um usuário usando o login and senha
$usuario = new Usuario();
$usuario->login("root", "@!#$");
echo $usuario;
Criando um novo usuário
$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;
Alterar um usuario
$usuario = new Usuario();
$usuario->loadById(9);
$usuario->update("professor", "!@#$%");
echo $usuario;
*/
$usuario = new Usuario();
$usuario->loadById(7);
$usuario->delete();
echo $usuario;