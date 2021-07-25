<?php
	/**
	 * 
	 */
	class ContaBanco
	{
		public $numConta;
		protected $tipo;
		private $dono;
		private $saldo;
		private $status;
		
		// getters and setters
		public function getNumConta()
		{
			return $this->numConta;
		}
		
		public function setNumConta($numc)
		{
			$this->numConta = $numc;
		}

		public function getTipo()
		{
			return $this->tipo;
		}
		
		public function setTipo($t)
		{
			$this->tipo = $t;
		}

		public function getDono()
		{
			return $this->dono;
		}
		
		public function setDono($d)
		{
			$this->dono = $d;
		}

		public function getSaldo()
		{
			return $this->saldo;
		}
		
		public function setSaldo($s)
		{
			$this->saldo = $s;
		}

		public function getStatus()
		{
			return $this->status;
		}
		
		public function setStatus($st)
		{
			$this->status = $st;
		}

		public function abrirConta($t)
		{
			$this->setTipo($t);
			$this->setStatus(true);

			if ($t == "CC")
			{
				$this->setSaldo(50);
			}
			else if ($t == "CP")
			{
				$this->setSaldo(150);
			}
		}

		public function fecharConta()
		{
			if ($this->getSaldo() > 0)
			{
				echo "Conta com dinheiro";
			}
			else if($this->getSaldo() < 0)
			{
				echo "Conta em débito";
			}
			else
			{
				$this->setStatus(false);
				echo "Conta fechada com sucesso";
			}
		}

		public function depositar($v)
		{
			if ($this->getStatus())
			{
				$this->setSaldo($this->getSaldo() + $v);
				echo "<p>Dinheiro depositado por: {$this->getDono()} | valor: {$v} </p>";
			}
			else
			{
				echo "Impossivel depositar, conta fechada";
			}
		}

		public function sacar($v)
		{
			if ($this->getStatus())
			{
				if ($this->getSaldo() >= $v)
				{
					$this->setSaldo($this->getSaldo() - $v);
					echo "<p>Dinheiro sacado por: {$this->getDono()} | valor: {$v} </p>";
				}
				else
				{
					echo "Saldo Insuficiente";
				}
			}
			else
			{
				echo "Impossivel sacar, conta fechada";
			}
		}

		public function pagarMensal()
		{
			$v;

			if ($this->getTipo() == "CC")
			{
				$v = 12;	
			}
			else if ($this->getTipo() == "CP")
			{
				$v = 20;
			}
			if ($this->getStatus())
			{
				if ($this->getSaldo() > $v)
				{
					$this->setSaldo($this->getSaldo() - $v);
				}
				else
				{
					echo "Saldo insuficiente para pagar mensalidade";
				}
			}
			else
			{
				echo "Impossivel pagar mensalidade, conta fechada";
			}
		}

		function __construct()
		{
			$this->setStatus(false);
			$this->setSaldo(0);
		}
	}
?>