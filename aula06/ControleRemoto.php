<?php
	require_once 'Icontrolador.php';
	/**
	 * 
	 */
	class ControleRemoto implements Icontrolador
	{
		// atributos
		private $volume;
		private $ligado;
		private $tocando;

		// construtor
		function __construct()
		{
			$this->volume = 50;
			$this->ligado = false;
			$this->tocando = false;
		}

		// metodos especiais
		private function getVolume()
		{
			return $this->volume;
		}
		private function setVolume($v)
		{
			$this->volume = $v;
		}
		
		private function getLigado()
		{
			return $this->ligado;
		}
		private function setLigado($l)
		{
			$this->ligado = $l;
		}

		private function getTocando()
		{
			return $this->tocando;
		}
		private function setTocando($t)
		{
			$this->tocando = $t;
		}

		// sobreescrever os metodos abstratos da interface
		public function ligar()
		{
			$this->setLigado(true);
		}

		public function desligar()
		{
			$this->setLigado(false);
		}

		public function abrirMenu()
		{
			$volume = "";
			for ($v = 0; $v < $this->getVolume(); $v = $v + 10) { 
				$volume .= "| ";
			}

			echo "<p>Status: " . ($this->getLigado() ? "Ligado":"Desligado") . "</p>";
			echo "<p>Volume: {$this->getVolume()} = {$volume}</p>";
			echo "<p>Tocando: " . ($this->getTocando() ? "Sim": "Mudo") . "</p>";
		}

		public function fecharMenu()
		{
			echo "<p>Fechar Menu.</p>";
		}

		public function maisVolume()
		{
			if ($this->getLigado()) {
				$this->setVolume($this->getVolume() + 5);
			}
		}

		public function menosVolume()
		{
			if ($this->getLigado()) {
				$this->setVolume($this->getVolume() - 5);
			}
		}

		public function ligarMudo()
		{
			if ($this->getLigado() && $this->getVolume() > 0) {
				$this->setVolume(0);
			}
		}

		public function desligarMudo()
		{
			if ($this->getLigado() && $this->getVolume() == 0) {
				$this->setVolume(50);
			}
		}

		public function play()
		{
			if ($this->getLigado() && !$this->getTocando()) {
				$this->setTocando(true);
			}
		}

		public function pause()
		{
			if ($this->getLigado() && $this->getTocando()) {
				$this->setTocando(false);
			}
		}
	}
?>