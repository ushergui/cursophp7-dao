<?php
require_once("config.php");

/*Carregar somente um usuário
$root = new Usuario();

$root->loadById(5);

echo $root;

*/

//Carrega uma lista de usuários
/*
$lista = Usuario::getList();

echo json_encode($lista);

*/

/*Carrega uma lista de usuários buscando pelo login

$search = Usuario::search("jo");

echo json_encode($search);
*/

//Carrega um usuário usando o login e a senha
/*
$usuario = new Usuario();
$usuario->login("root", "654321");

echo $usuario;

*/
//Criando um novo usuário
/*

$aluno = new Usuario();

$aluno->setDeslogin("alunos");
$aluno->setDessenha("@#$%1234");

$aluno->insert();

echo $aluno;

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
*/
/*Fazendo o update

$usuario = new Usuario();

$usuario->loadById(12);

$usuario->update("professor", "aijsdhiuas");

echo $usuario;
*/

$usuario = new Usuario();

$usuario->loadById(12);

$usuario->delete();

echo $usuario;

?> 