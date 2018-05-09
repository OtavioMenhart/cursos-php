<?php
header('Content-Type: text/html; charset=utf-8');
define("HR","<hr>");
#####################################
$palavra="EdUaRdO";
$frase="esta é uma frase em php, esta é uma frase em php, esta é uma frase em php";
$nome ="Eduardo Pretel Filho";
$branco="            Edu              ";

print $palavra;
print HR;

print strtoupper($palavra);// para maiusculas
print HR;

print strtolower($palavra);//para minusculas
print HR;

print strrev($palavra);//para reverso
print HR;

print strlen($palavra);//para tamanho
print HR;

print ucfirst($frase);//para primeira letra da frase para mai�scula
print HR;

print ucwords($frase);//para primeira letra de cada palavra para mai�scula
print HR;

print ucfirst(strtolower(strrev($palavra)));//para reverso
print HR;

print substr($nome,0,7);
print HR;
print substr($nome,8,6);
print HR;
print substr($nome,15);
print HR;

print HR;
print $branco;
print HR;
print ltrim($branco);
print HR;
print rtrim($branco);
print HR;
print trim($branco);
print HR;

print htmlentities("Maça é <>");
print HR;
print htmlspecialchars("Maça é <>");
print HR;


print md5($palavra);
print HR;
print md5(123);
print HR;
print sha1(123);
print HR;
//base64 NÃO É RECOMENDÁVEL

$texto="Esta é a primeira linha, \n Esta é a segunda linha, \n Esta é a terceira linha, \nEsta é a quarta linha." ;

print nl2br($texto);
print HR;
$texto='Eu não gosto "daquela" candidata ';
print addslashes($texto);
$texto="Eu não matei Joana D'arc";
print addslashes($texto);

############################################################################################3
//print str_replace("�","a","Ma��, an�o, pe�o, mam�o");
print "<br>";
//$procura=array("�","�","�","�","�","�");
//$acha=array("a","a","a","o","o","e");
//print str_replace($procura,$acha,"Ma�� � � � da v�v�");
?>