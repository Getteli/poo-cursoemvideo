<!DOCTYPE html>
<html>
<head>
	<title>Projeto Pessoa - POO PHP</title>
</head>
<body>
	<h1>Projeto Pessoa</h1>
	<pre>
	<?php
		ini_set( 'error_reporting', E_ALL );
		ini_set( 'display_errors', true );
		require_once 'Aluno.php';
		require_once 'Pessoa.php';
		require_once 'Professor.php';
		require_once 'Funcionario.php';

		$pessoa = array();

		$pessoa[0] = new Pessoa();
		$pessoa[1] = new Aluno();
		$pessoa[2] = new Professor();
		$pessoa[3] = new Funcionario();

		$pessoa[0]->setNome("Pedro");
		
		$pessoa[1]->setNome("Maria");
		$pessoa[1]->setCurso("Informática");

		$pessoa[2]->setNome("Douglas");
		$pessoa[2]->setSalario("3500.00");


		$pessoa[3]->setNome("Claudia");
		$pessoa[3]->setSetor("Biblioteca");

		print_r($pessoa);
	?>
	</pre>
