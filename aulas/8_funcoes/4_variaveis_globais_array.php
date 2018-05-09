<?php
header('Content-Type: text/html; charset=utf-8');
 function altera(){
		$cont=10;
		$resposta=10;
		
		return $resposta;
}
$cont = 1;
print "Chamando a função pela $cont vez: ". altera()."<br>";
$cont++;
print "Chamando a função pela $cont vez: ". altera()."<br>";
print "<hr>";
#######################################################################################
function altera2(){
		global $cont;
		$cont=10;
		$resposta=10;
		echo $_GET['nome'];//array superglobal
		return $resposta;
}
$cont = 1;
print "Chamando a função pela $cont vez: ".altera2()."<br>";
$cont++;
print "Chamando a função pela $cont vez: ". altera2()."<br>";
print "<hr>";
######################################################################
/*
O escopo de uma vari�vel � o contexto onde ela foi definida. A maior parte das vari�veis do PHP tem somente escopo local. Este escopo local inclui os arquivos inclu�dos. Por exemplo

Variaveis globais: $GLOBALS
Nota: $GLOBALS foi disponibilizada desde a versao 3.0.0. 

Um array associativo contendo referencias para todas as vari�veis atualmente definidas no escopo global do script. Os nomes das vari�veis sao as chaves do array. 

Esta � uma vari�vel 'superglobal', ou automaticamente global. Isto significa que ela � dispon�vel em todos os escopos (n�veis) de um script. Voce nao precisa fazer um global $GLOBALS; para pode acess�-la dentro de fun�oes ou m�todos. 

A mensagem de 
 */
$a=5;
$b=7;

function teste(){
 		
 		global $voce, $mae;
		$voce="olá";
		$mae = 5;
		$a = "local";
 		print  $a."<br>"; 
 		print  $GLOBALS['a']."<br>"; 
		print  $GLOBALS['a']+ $GLOBALS['b'];
		
}
teste();
print $eu;
print $mae;
print "<br>";
var_dump($GLOBALS);
?>