<?php
require_once "Animal.php";
/**
 * 
 */
class Mamifero extends Animal
{
	private $corPelo;

	public function getCorPelo()
	{
		return $this->corPelo;
	}

	public function setCorPelo($cp)
	{
		$this->corPelo = $cp;
	}

	// override
	public function locomover()
	{
		echo "Andar";
	}
	// override
	public function alimentar()
	{
		echo "mamando";
	}
	// override
	public function emitirSom()
	{
		echo "som de mamifero";
	}
}
?>