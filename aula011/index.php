<!DOCTYPE html>
<html>
<head>
	<title>Aula 011 - POO PHP</title>
</head>
<body>
	<h1>Aula 011</h1>
	<pre>
	<?php
		ini_set( 'error_reporting', E_ALL );
		ini_set( 'display_errors', true );
		require_once 'Aluno.php';
		require_once 'Pessoa.php';
		require_once 'Professor.php';
		require_once 'Visitante.php';
		require_once 'Bolsista.php';

		$pessoa = array();

		$pessoa[0] = new Bolsista();
		$pessoa[1] = new Aluno();
		$pessoa[2] = new Professor();
		$pessoa[3] = new Visitante();

		$pessoa[1]->setNome("Maria");
		$pessoa[1]->setCurso("Informática");

		$pessoa[2]->setNome("Douglas");
		$pessoa[2]->setSalario("3500.00");


		$pessoa[3]->setNome("Claudia");

		print_r($pessoa);
	?>
	</pre>
