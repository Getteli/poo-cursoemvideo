<?php
require_once "IPublicacao.php";
require_once "Pessoa.php";
/**
 * 
 */
class Livro implements IPublicacao
{
	private $titulo;
	private $autor;
	private $totPaginas;
	private $pagAtual;
	private $aberto;
	private $leitor;

	function __construct($t, $a, $totpa, $l)
	{
		$this->setTitulo($t);
		$this->setAutor($a);
		$this->setTotPaginas($totpa);
		$this->setPagAtual(0);
		$this->setAberto(false);
		$this->setLeitor($l);
	}

	public function detalhes()
	{
		echo "<p>
		Livro: {$this->getTitulo()}, escrito por: {$this->getAutor()} <br/>
		Quantidade de Páginas: {$this->getTotPaginas()} <br/>
		Sendo lido por: {$this->leitor->getNome()}
		</p>";
	}

	public function getTitulo()
	{
		return $this->titulo;
	}
	public function setTitulo($t)
	{
		$this->titulo = $t;
	}
	public function getAutor()
	{
		return $this->autor;
	}
	public function setAutor($a)
	{
		$this->autor = $a;
	}
	public function getTotPaginas()
	{
		return $this->totPaginas;
	}
	public function setTotPaginas($tp)
	{
		$this->totPaginas = $tp;
	}
	public function getPagAtual()
	{
		return $this->pagAtual;
	}
	public function setPagAtual($pa)
	{
		$this->pagAtual = $pa;
	}
	public function getAberto()
	{
		return $this->aberto;
	}
	public function setAberto($a)
	{
		$this->aberto = $a;
	}
	public function getLeitor()
	{
		return $this->leitor;
	}
	public function setLeitor($l)
	{
		$this->leitor = $l;
	}

	public function abrir()
	{
		$this->setAberto(true);
	}
	
	public function fechar()
	{
		$this->setAberto(false);
	}

	public function folhear($pag)
	{
		if ($this->getAberto())
		{	
		 	// 987 > 1000
			if ($this->getTotPaginas() >= $pag) {
				$this->setPagAtual($pag);
			}
			else
			{
				echo "<p>Página não encontrada</p>";
			}
		}
		else
		{
			echo "<p>Livro Fechado, não pode folhear</p>";
		}
	}

	public function avancarPag()
	{
		if ($this->getAberto())
		{
			if ($this->getPagAtual() < $this->getTotPaginas() ) {
				$this->setPagAtual($this->getPagAtual() + 1);
			}
			else
			{
				echo "<p>Fim do livro</p>";
			}
		}
		else
		{
			echo "<p>Livro Fechado, não pode folhear</p>";
		}
	}

	public function voltarPag()
	{
		if ($this->getAberto())
		{
			if ($this->getPagAtual() > 0 ) {
				$this->setPagAtual($this->getPagAtual() - 1);
			}
			else
			{
				echo "<p>Inicio do Livro</p>";
			}
		}
		else
		{
			echo "<p>Livro Fechado, não pode folhear</p>";
		}
	}
}
?>