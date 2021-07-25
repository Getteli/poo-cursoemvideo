<!DOCTYPE html>
<html>
<head>
	<title>Ultra Emoji Combat - POO PHP</title>
</head>
<body>
	<pre>
	<?php
		ini_set( 'error_reporting', E_ALL );
		ini_set( 'display_errors', true );
		
		require_once 'Lutador.php';
		require_once 'Luta.php';

		$l = array();

		$l[0] = new Lutador("Douglas", "Brasileiro", 24, 1.75, 80.9, 10, 0, 3);
		
		$l[1] = new Lutador("Matheus Chagas", "Brasileiro", 26, 1.95, 75.9, 10, 0, 3);

		$UEC01 = new Luta();
		$UEC01->marcarLuta($l[0], $l[1]);
		$UEC01->lutar();
	?>
	</pre>