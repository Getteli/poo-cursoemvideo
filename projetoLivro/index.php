<!DOCTYPE html>
<html>
<head>
	<title>Aula 09 - POO PHP</title>
</head>
<body>
	<h1>Projeto Livro</h1>
	<pre>
	<?php
		ini_set( 'error_reporting', E_ALL );
		ini_set( 'display_errors', true );
		require_once 'Livro.php';
		require_once 'Pessoa.php';

		$pessoa = array();
		$livro = array();

		$pessoa[0] = new Pessoa("Douglas", 24, "M");
		$pessoa[1] = new Pessoa("Daniela", 28, "F");

		$livro[0] = new Livro("Hamlet I", "Sheakspear", 987, $pessoa[1]);
		$livro[1] = new Livro("PHP Avançado", "Gustavo G.", 400, $pessoa[0]);

		$livro[0]->abrir();
		$livro[0]->folhear(986);
		$livro[0]->detalhes();

		print_r($livro[0]);
	?>
	</pre>
