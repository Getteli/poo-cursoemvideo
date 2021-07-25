<!DOCTYPE html>
<html>
<head>
	<title>Projeto Banco - POO PHP</title>
</head>
<body>
	<pre>
	<?php
		ini_set( 'error_reporting', E_ALL );
		ini_set( 'display_errors', true );
		
		require_once 'ContaBanco.php';

		$p1 = new ContaBanco(); // Jubileu
		$p2 = new ContaBanco(); // Creuza

		$p1->abrirConta("CC");
		$p1->setDono("Jubileu");
		$p1->setNumConta(1111);
		$p1->depositar(300);

		$p2->abrirConta("CP");
		$p2->setDono("Creuza");
		$p2->setNumConta(2222);
		$p2->depositar(500);
		$p2->sacar(100);

		print_r($p1);
		print_r($p2);
	?>
	</pre>