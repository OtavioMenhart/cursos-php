<?php
header('Content-Type: text/html; charset=utf-8');
// a classe descreve os objetos
// os objetos sao variaveis descritas pelas classes
class Pessoas{
	//propriedades ou atributos
	public $nome;
	public $idade;
	public $sexo;
	public $nacionalidade;
	
	function teste(){
		echo "função teste";
	}
}


//operador new é o construtor de objetos
$edu = new Pessoas;
$edu->nome = "Eduardo";
$edu->idade = 57;
echo $edu->idade;

var_dump($edu);
##########################################################
echo "<hr>";

$otavio = new Pessoas;
$otavio->nome = "Otávio";
$otavio->idade = 19;
echo $otavio->idade;
echo "<br>";
$otavio->teste();

var_dump($otavio);
##########################################################
echo "<hr>";

echo gettype($otavio)."<br>";//object
echo is_object($otavio);//1

