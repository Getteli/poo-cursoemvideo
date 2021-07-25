<!DOCTYPE html>
<html>
<head>
	<title>Aula 03 - POO PHP</title>
</head>
<body>
	<pre>
	<?php
		ini_set( 'error_reporting', E_ALL );
		ini_set( 'display_errors', true );
		require_once 'Caneta.php';

		$c1 = new Caneta("Bic", "Azul", 0.5);

		print_r($c1);

		echo "<hr>";
		echo "Eu tenho uma Caneta de modelo {$c1->getModelo()}";
	?>
	</pre>