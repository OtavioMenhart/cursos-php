<!doctype html>
<html>
<head>
<title>Tpos de Dados</title>
<meta charset="utf-8" />
</head>
<body>

<?php
/*
 * Tipos de dados
 * Tipo � relacionado ao DADO e nao � variavel
 * 
 * 3 grupos
 * 
 * tipos simples - relacionado a dados primitivos
 * 		A - numerico -> inteiros e ponto flutuante
 * 		B - caracteres -> strings
 * 		C - booleano -> true ou flase
 * 
 * tipos compostos - relacionado a estrutura da variavel
 * 		A - array
 * 		B - objetos
 * 
 * tipos especiais
 * 		A - resource
 * 		B - null
 */


$a = 52;
$b = -65;
$c = 123.45;
$d = "Impacta";
$e = true;//TRUE � uma constante que contem o dado primitivo true
$f = false;

print gettype($a);//integer
print is_integer($a);//verdadeiro = 1	falso = null
print is_int($a);//ap�s vers�o 4.2.0 - int	PADRAO

print "<hr>";

print gettype($b);
print is_int($b);
//ap�s vers�o 4.2.0 - int
print "<hr>";

print gettype($c);
print is_double($c);//entre vers�o 4.2.0 e 5.0.3 d� erro
print is_float($c);//forma padr�o
print is_real($c);
//pode ser double, real, ou float - ponto no lugar da v�rgula
//ap�s vers�o 4.2.0 - float
print "<hr>";

print gettype($d);
print is_string($d);
print "<hr>";

print gettype($e);
print is_bool($e);

print "<hr>";

print gettype($f);
print is_bool($f);

print "<hr>";

?>

</body>
</html>
