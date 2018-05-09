<?php
class Numeros {
	static public $numeros;
	static public $pares;
	static protected  $impares;
	
	static public function setImpares($a){
		//this aponta para o objeto que chamou o método
		if ($a % 2 != 0){
			//Numeros::$impares = $a;
			self::$impares = $a;
		}
	}
	
	static public function getImpares(){
		//return Numeros::$impares;
		return self::$impares;
	}
	
}

Numeros::$numeros = 24;
echo Numeros::$numeros;

Numeros::setImpares(31);
echo Numeros::getImpares();


