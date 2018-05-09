<?php
header('Content-Type: text/html; charset=utf-8');
// a classe descreve os objetos
// os objetos sao variaveis descritas pelas classes
class Pessoas{
	public $nome;
	public $idade;
	public $sexo;
	public $nacionalidade;
	
	//metodo
	function __construct($a){
		echo "construct criado - e a \$a contem $a<br>";
	}
	
	function __destruct(){
		echo "DESTRUCT<br>";
	}
	
	function teste(){
		echo "função teste<br>";
	}
}


//operador new é o construtor de objetos
$edu = new Pessoas("Otávio");
$edu->nome = "Eduardo";
$edu->idade = 57;
echo $edu->idade;

var_dump($edu);
##########################################################
echo "<hr>";

$otavio = new Pessoas("Bolsomito");
$otavio->nome = "Otávio";
$otavio->idade = 19;
echo $otavio->idade;
$otavio->teste();

var_dump($otavio);
##########################################################
echo "<hr>";

echo gettype($otavio)."<br>";//object
echo is_object($otavio)."<br>";//1
unset($edu);
echo "<hr>";