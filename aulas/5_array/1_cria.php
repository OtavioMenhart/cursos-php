<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
########################
//ordenado de forma explicita
$cores[0] = "azul";
$cores[1] = "amarelo";
$cores[2] = "vermelho";
$cores[3] = "verde";

var_dump($cores);
print"<pre>";
print_r($cores);
print"</pre>";

print "<hr />";

$cor[100] = "azul";
$cor[25] = "amarelo";
$cor[250] = "vermelho";
$cor[1] = "verde";
var_dump($cor);
print "<hr />";

####################################################
//ordenado de forma implicita
$cursos[] = "PHP";
$cursos[] = "MySQL";
$cursos[] = "HTML";
$cursos[] = "JavaScript";
$cursos[] = "CSS";
var_dump($cursos);
print "<hr />";

#####################################################
//construtor array de forma explicita
$moto = array(0=>"fazer 250", 15=>"cb 300", 8=>"ninja", 6=>"mobilete");
var_dump($moto);
print "<hr />";

#####################################################
//funcao array de forma implicita
$carro = array("corolla", "civic", "uno", "cruze", "ka");
var_dump($carro);
print "<hr />";

############################


//Array Nominativo - por padrao usar aspas simples, porem funciona sem aspas
/* 
print $escola[impacta] - retoerna ero em alguns servidores que entendera que impacta é uma constante

//variavel interpolada
print "$escola[impacta]" - o array inteiro entra aspas - nao usar aspas no indice

//variavel nao interpolada
print $escola["impacta"] - a variavel nao tem aspas - quem tem aspas é o indice

padrao - variavel nao interpolada com aspas SIMPLES no indice
print $escola['impacta']
 */

$escola['impacta'] = "Livres";
$escola['FIT'] = "Superiores";
$escola['senac'] = "tecnicos";
var_dump($escola);
echo "<hr>";

echo "O nome da escola que oferece cursos LIVRES é impacta<br>";

echo "O nome da escola que oferece cursos ".$escola['impacta']." é impacta<br>";
echo "O nome da escola que oferece cursos ".$escola["impacta"]." é impacta<br>";

//INTERPOLAÇÃO DE VARIAVEL
echo "O nome da escola que oferece cursos $escola[impacta] é impacta<br>";

//INTERPOLAÇÃO DE VARIAVEL - 5.4
echo "O nome da escola que oferece cursos {$escola['impacta']} é impacta<br>";//padrao
//INTERPOLAÇÃO DE VARIAVEL - 5.4
echo "O nome da escola que oferece cursos {$escola["impacta"]} é impacta<br>";

echo "<hr>";

#####################################################
//construtor array para nominativos
$ruas = array('avenida'=>"Paulista", 'rua'=>"Pamplona", 'alameda'=>"Santos", 'praca'=>"Oswaldo Cruz");
var_dump($ruas);
echo "<hr>";

#####################################################
//sintaxe "JSON"
$planetas = ['sol', 'lua', 'marte', 'terra'];
var_dump($planetas);
echo "<hr>";

$regentes = ['sol'=>"Leao", 'lua'=>"Cancer", 'marte'=>"Aries", 'terra'=>"Touro"];
var_dump($regentes);
echo "<hr>";

#####################################################
//funcao para criar array a partir dr uma string
$alunos = "Adilson,Otávio,Francisco,Lucas,Michel";
var_dump($alunos);

$alunos2 = explode(",", $alunos);
var_dump($alunos2);

?>
</body>
</html>