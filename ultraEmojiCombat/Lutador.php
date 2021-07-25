<?php
	/**
	 * 
	 */
	class Lutador
	{
		private $nome;
		private $nacionalidade;
		private $idade;
		private $altura;
		private $peso;
		private $categoria;
		private $vitoria;
		private $derrota;
		private $empate;

		function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
		{
			$this->nome = $no;
			$this->nacionalidade = $na;
			$this->idade = $id;
			$this->altura = $al;
			$this->setPeso($pe);
			$this->vitoria = $vi;
			$this->derrota = $de;
			$this->empate = $em;
		}

		public function getNome()
		{
			return $this->nome;
		}
		public function setNome($nome)
		{
			$this->nome = $nome;
		}

		public function getNacionalidade()
		{
			return $this->nacionalidade;
		}
		public function setNacionalidade($nacionalidade)
		{
			$this->nacionalidade = $nacionalidade;
		}


		public function getIdade()
		{
			return $this->idade;
		}
		public function setIdade($idade)
		{
			$this->idade = $idade;
		}

		public function getAltura()
		{
			return $this->altura;
		}
		public function setAltura($altura)
		{
			$this->altura = $altura;
		}


		public function getPeso()
		{
			return $this->peso;
		}
		public function setPeso($peso)
		{
			$this->peso = $peso;
			$this->setCategoria();
		}

		public function getCategoria()
		{
			return $this->categoria;
		}
		private function setCategoria()
		{
			if ($this->peso < 52.2)
			{
				$this->categoria = "Inválido";
			}
			else if($this->peso <= 70.3)
			{
				$this->categoria = "Leve";
			}
			else if($this->peso <= 83.9)
			{
				$this->categoria = "Médio";
			}
			else if($this->peso <= 120.2)
			{
				$this->categoria = "Pesado";
			}			
			else
			{
				$this->categoria = "inválido";
			}
		}

		public function getVitoria()
		{
			return $this->vitoria;
		}
		public function setVitoria($vitoria)
		{
			$this->vitoria = $vitoria;
		}

		public function getDerrota()
		{
			return $this->derrota;
		}
		public function setDerrota($derrota)
		{
			$this->derrota = $derrota;
		}


		public function getEmpate()
		{
			return $this->empate;
		}
		public function setEmpate($empate)
		{
			$this->empate = $empate;
		}

		public function apresentar()
		{
			echo "<p> Lutador: {$this->getNome()}</p>";
			echo "<p> Origem: {$this->getNacionalidade()}</p>";
			echo "<p> {$this->getIdade()} anos</p>";
			echo "<p> {$this->getAltura()} m de altura</p>";
			echo "<p> Pesando: {$this->getPeso()} kg</p>";
			echo "<p> ganhou: {$this->getVitoria()}</p>";
			echo "<p> Perdeu: {$this->getDerrota()}</p>";
			echo "<p> Empatou: {$this->getEmpate()}</p>";
		}

		public function status()
		{
			echo "<p> {$this->getNome()} </p>";
			echo "<p> É um peso {$this->getCategoria()} </p>";
			echo "<p> {$this->getVitoria()} vitórias</p>";
			echo "<p> {$this->getDerrota()} derrotas</p>";
			echo "<p> {$this->getEmpate()} empates</p>";
		}

		public function ganharLuta()
		{
			$this->setVitoria($this->getVitoria() + 1);
		}

		public function perderLuta()
		{
			$this->setDerrota($this->getDerrota() + 1);
		}

		public function empatarLuta()
		{
			$this->setEmpate($this->getEmpate() + 1);
		}
	}
?>