<?php
require_once "Animal.php";
/**
 * 
 */
class Reptil extends Animal
{
	private $corEscama;

	public function getCorEscama()
	{
		return $this->corEscama;
	}

	public function setCorEscama($ce)
	{
		$this->corEscama = $ce;
	}
	// override
	public function locomover()
	{
		echo "rastejar";
	}
	// override
	public function alimentar()
	{
		echo "comer vegetal";
	}
	// override
	public function emitirSom()
	{
		echo "som de reptil";
	}
}
?>