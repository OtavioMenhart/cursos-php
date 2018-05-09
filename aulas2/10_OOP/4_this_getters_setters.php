<?php
class Numeros {
	public $numeros;
	public $pares;
	protected  $impares;
	
	public function setImpares($a){
		//this aponta para o objeto que chamou o método
		if ($a % 2 != 0){
			$this->impares = $a;
		}
	}
	
	public function getImpares(){
		return $this->impares;
	}
	
}
$num = new Numeros;
$num->numeros = 654.99;//acesso para escrita - atribuição de valores
echo $num->numeros;//acesso para leitura - recuperação de valores

$num->setImpares(23);
echo $num->getImpares();
var_dump($num);

$num1 = new Numeros;
$nome = "otavio";
$num1->setImpares(45);
echo $num1->getImpares();
var_dump($num1);

//$num->impares = 25; Fatal error: Cannot access protected property Numeros::$impares
