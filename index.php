<?php 

	require_once("config.php");

	//Carrega um usuário
	/*$user = new Usuario();
	
	$user->loadbyId(1);
	
	echo $user;*/

	//Carreta uma lista de usuários
	/*$lista = Usuario::getList();

	echo json_encode($lista);*/

	//Carrega uma lista de usuários buscando pelo login
	/*$search = Usuario::search("jo");

	echo json_encode($search);*/

	//Carrega um usuário usando o login e a senha
	/*$usuário = new Usuario();

	$usuário->login("root", "123");

	echo $usuário;*/

	//Criando um novo usuário
	/*$aluno = new Usuario("aluno", "5459");

	$aluno->insert();

	echo $aluno;*/

	$usuario = new Usuario();

	$usuario->loadById(17);

	$usuario->update("professor", "75856");

	echo $usuario;

 ?>