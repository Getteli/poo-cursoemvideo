<!DOCTYPE html>
<html>
<head>
	<title>Aula 02 - POO PHP</title>
</head>
<body>
	<?php
		require_once 'Caneta.php';

		$c1 = new Caneta();
		$c1->cor = "Azul";
		$c1->ponta = 0.5;
		$c1->tampar();
		$c1->rabiscar();
		print_r($c1);

		$c2 = new Caneta();
		$c2->cor = "Vermelho";
		$c2->ponta = 1.0;
		$c2->carga = 50;
		$c2->destampar();
		$c2->rabiscar();
		print_r($c2);
	?>