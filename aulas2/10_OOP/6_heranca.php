<?php
class Mae {
	public $um;
	protected $dois;
	private $tres;
	
	function semSegredo() {
		echo "isso todos podem saber<br>";
	}
	
	protected function segredoFamiliar(){
		echo "isso eu e minhas filhas temos acesso<br>";
	}
	
	private function meuSegredo(){
		echo "isso somente eu sei<br>";
	}
	
	/*
	public function contaTudo(){
		$this->segredoFamiliar();
		$this->meuSegredo();
	} */
}

#####################################################################

class Filha extends Mae{
	public $show = "sertanejo";
	
	public function contaTudo(){
		$this->segredoFamiliar();
		//$this->meuSegredo();
	}
}

$a = new Filha();
var_dump($a);
$a->semSegredo();
//$a->segredoFamiliar(); Fatal error: Call to protected method Mae::segredoFamiliar() 
//$a->meuSegredo(); Fatal error: Call to private method Mae::meuSegredo() 
$a->contaTudo();





