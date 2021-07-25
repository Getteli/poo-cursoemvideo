<!DOCTYPE html>
<html>
<head>
	<title>Aula 06 - POO PHP</title>
</head>
<body>
	<h1>Projeto Controle Remoto</h1>
	<pre>
	<?php
		ini_set( 'error_reporting', E_ALL );
		ini_set( 'display_errors', true );
		require_once 'ControleRemoto.php';

		$c = new ControleRemoto();

		// $c->ligar();

		$c->play();

		$c->maisVolume();
		$c->maisVolume();

		$c->abrirMenu();

		print_r($c);
	?>
	</pre>