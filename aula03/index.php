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

		$c1 = new Caneta();
		$c1->modelo = "BIC Cristal";
		$c1->cor = "Azul";
		// $c1->ponta = 0.5; erro pois ponta é privado
		
		// $c1->carga = 99; erro pois carga é protegido

		$c1->tampar();

		print_r($c1);
	?>
	</pre>