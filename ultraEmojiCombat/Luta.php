<?php
require_once "Lutador.php";
/**
 * 
 */
class Luta
{
	private $desafiado;
	private $desafiante;
	private $rounds;
	private $aprovada;

	public function marcarLuta($l1, $l2)
	{
		if ( ( $l1->getCategoria() === $l2->getCategoria() ) && ( $l1 != $l2 ))
		{
			$this->aprovada = true;
			$this->desafiante = $l1;
			$this->desafiado = $l2;			
		}
		else
		{
			$this->aprovada = false;
			$this->desafiante = null;
			$this->desafiado = null;
		}
	}

	public function lutar()
	{
		if ($this->aprovada)
		{
			$this->desafiado->apresentar();
			$this->desafiante->apresentar();
			$vencedor = rand(0,2);
			switch ($vencedor) {
				case 0:
					echo "<p> Empatou !</p>";
					$this->desafiado->empatarLuta();
					$this->desafiante->empatarLuta();
					break;
				case 1:
					echo "<p> {$this->desafiado->getNome()}</p>";
					$this->desafiado->ganharLuta();
					$this->desafiante->perderLuta();
					$this->desafiado->status();
					break;
				case 2:
					echo "<p> {$this->desafiante->getNome()}</p>";
					$this->desafiante->ganharLuta();
					$this->desafiado->perderLuta();
					$this->desafiante->status();
					break;
			}
		}
		else
		{
			echo "<p> Luta não pode acontecer</p>";
		}
	}

	public function getDesafiante()
	{
		return $this->desafiante;
	}
	public function setDesafiante($de)
	{
		$this->desafiante = $de;
	}

	public function getDesafiado()
	{
		return $this->desafiante;
	}
	public function setDesafiado($de)
	{
		$this->desafiado = $de;
	}

	public function getRounds()
	{
		return $this->rounds;
	}
	public function setRounds($r)
	{
		$this->rounds = $r;
	}

	public function getAprovada()
	{
		return $this->aprovada;
	}
	public function setAprovada($a)
	{
		$this->aprovada = $a;
	}
}
?>