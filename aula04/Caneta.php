<?php
	/**
	 * 
	 */
	class Caneta
	{
		private $modelo;
		private $cor;
		private $ponta;
		protected $carga;
		protected $tampada;
		
		// getters and setters
		public function getModelo()
		{
			return $this->modelo;
		}
		
		public function setModelo($m)
		{
			$this->modelo = $m;
		}

		public function getCor()
		{
		}
		
		public function setCor($c)
		{
			$this->cor = $c;
		}

		public function getPonta()
		{
		}
		
		public function setPonta($p)
		{
			$this->ponta = $p;
		}

		public function getCarga()
		{
		}
		
		public function setCarga($ca)
		{
			$this->carga = $ca;
		}

		public function getTampada()
		{
		}
		
		public function setTampada($t)
		{
			$this->tampada = $t;
		}

		public function rabiscar()
		{
			if ($this->tampada)
			{
				echo "<p>Erro, nao pode rabiscar por que está tampado.</p>";
			}
			else
			{
				echo "<p>Estou rabiscando...</p>";
			}
		}

		public function tampar()
		{
			$this->tampada = true;
		}

		public function destampar()
		{
			$this->tampada = false;
		}

		function __construct($m, $c, $p)
		{
			$this->setModelo($m);
			$this->setCor($c);
			$this->setPonta($p);
			$this->tampar();
		}
	}
?>