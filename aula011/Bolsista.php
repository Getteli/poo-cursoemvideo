<?php
require_once "Aluno.php";
/**
 * 
 */
class Bolsista extends Aluno
{
	private $bolsa;
	
	public function getBolsa()
	{
		return $this->bolsa;
	}

	public function setBolsa($b)
	{
		$this->bolsa = $b;
	}

	public function renovarBolsa()
	{
		echo "<p>Bolsa Renovada</p>";
	}

	// override is default from PHP
	public function pagarMensalidade()
	{
	}

}
?>