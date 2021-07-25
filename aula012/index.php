<!DOCTYPE html>
<html>
<head>
	<title>Aula 12 - POO PHP</title>
</head>
<body>
	<h1>Projeto Animal</h1>
	<pre>
	<?php
		ini_set( 'error_reporting', E_ALL );
		ini_set( 'display_errors', true );
		require_once 'Mamifero.php';
		require_once 'Reptil.php';

		$animais = array();

		$animais[0] = new Mamifero();
		$animais[1] = new Reptil();

		$animais[0]->locomover();
		echo "<br>";
		$animais[1]->locomover();
		echo "<br>";

		print_r($animais);
	?>
	</pre>
