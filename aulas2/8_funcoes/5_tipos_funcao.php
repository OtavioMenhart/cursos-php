<?php
header('Content-Type: text/html; charset=utf-8'); 
##############################################
### VALOR PADR�O ##################
//N�o colocar padr�o � esquerda, sempre � direita
//Posso ter quantos eu quiser
function aulas($aluno,$professor="Eduardo"){
	echo "$aluno - $professor<br>";
}
aulas("Adilson");
aulas("Otavio");
aulas("Otavio","Sandra");
echo "<hr>";
###################################################
#########passar ARGUMENTOS por refer�ncia##############
//Um argumento passado por refer�ncia faz com que a vari�vel que est� no argumento
//seja modificada fora da fun��o
$nome = "Otavio";
function formata(&$a){
	$a = "<span style=\"color:red;font-size:40px\">$a</span>";
	//$a = "Bolsomito";
	echo $a;
}
formata($nome);
echo "<hr>";
//echo $a;
echo $nome;
echo "<hr>";

##################################################

/* Vari�veis fun�oes - sempre que o PHP encontra uma vari�vel seguida de parenteses, procura uma fun�ao culo nome � dado pelo valor da vari�vel e executa essa fun�ao.
 */
 function ola(){
 	$a="oi";
 	echo "esta função é a função:". __FUNCTION__;
 }
 //ola();
 $a = "ola";
 $a();
 #######################################################################################
echo "<hr>";
$c = function (){
	echo "função anônima"."<br>";
};
$c();



/////////////////////////////////////////////////////////////////////////////////////////
?>