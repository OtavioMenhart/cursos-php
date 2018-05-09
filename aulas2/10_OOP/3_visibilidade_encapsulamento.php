<?php
class Visibilidade {
	//pode ser acessada pelo objeto
	public $nome;
	
	//não pode ser acessada pelo objeto - a diferença se fará em herança
	//somente será acessada por elementos (metodos/funcoes) da própria classe
	protected $idade;
	private $fone;
}

$casa = new Visibilidade();
$predio = new Visibilidade();

$casa->nome = "Av Paulista";
$predio->nome = "Numa de Oliveira";

var_dump($casa);
var_dump($predio);

//$casa->idade = 255;  Cannot access protected property Visibilidade::$idade 
//$casa->fone = 255255; Cannot access protected property Visibilidade::$idade 







