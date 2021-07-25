<?php
require_once "Pessoa.php";
/**
 * 
 */
class Funcionario extends Pessoa
{
	private $trabalhando;
	private $setor;
	
	public function mudarTrabalho($tr)
	{
		$this->setSetor($tr);
	}

	public function getTrabalhando()
	{
		return $this->trabalhando;
	}
	public function setTrabalhando($e)
	{
		$this->trabalhando = $e;
	}

	public function getSetor()
	{
		return $this->setor;
	}
	public function setSetor($s)
	{
		$this->setor = $s;
	}
}
?>