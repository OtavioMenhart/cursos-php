<!doctype html>
<html>
<head>
<title>Untitled</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<?php 
//Operador Aritimetico

$a = 20;
$b = 60;
$c = "20";
$d = "60";

//soma
$total = $a + $b;
print "Soma de \$a + \$b é igual a $total<hr>" ;
$total = $c + $d;
print "Soma de \$c + \$d é igual a $total<hr>" ;

//subtração
$total = $b - $a;
print "Subtração de \$b - \$a é igual a $total<hr>";
$total = $d - $c;
print "Subtração de \$d - \$c é igual a $total<hr>";

//multiplicação
$total = $a * $b;
print "Multiplicação de \$a * \$b é igual a $total<hr>";
//$total = $c * $d;
print "Multiplicação de \$c * \$d é igual a $total<hr>";

//divisão
$total = $b / $a;
print "Divisão de \$b / \$a é igual a $total<hr>";
$total = $d / $c;
print "Divisão de \$d / \$c é igual a $total<hr>";

//resto da divisão -- Módulo

$total = $b % 2;
print "Resto da divisão de \$b por 2  é igual a $total<hr>";
$total = $d % 2;
print "Resto da divisão de \$d por 2  é igual a $total<hr>";

 ?>

</body>
</html>
