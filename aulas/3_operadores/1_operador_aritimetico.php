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
print "Soma de \$a + \$b � igual a $total<hr>" ;
$total = $c + $d;
print "Soma de \$c + \$d � igual a $total<hr>" ;

//subtra��o
$total = $b - $a;
print "Subtra��o de \$b - \$a � igual a $total<hr>";
$total = $d - $c;
print "Subtra��o de \$d - \$c � igual a $total<hr>";

//multiplica��o
$total = $a * $b;
print "Multiplica��o de \$a * \$b � igual a $total<hr>";
//$total = $c * $d;
print "Multiplica��o de \$c * \$d � igual a $total<hr>";

//divis�o
$total = $b / $a;
print "Divis�o de \$b / \$a � igual a $total<hr>";
$total = $d / $c;
print "Divis�o de \$d / \$c � igual a $total<hr>";

//resto da divis�o -- M�dulo

$total = $b % 2;
print "Resto da divis�o de \$b por 2  � igual a $total<hr>";
$total = $d % 2;
print "Resto da divis�o de \$d por 2  � igual a $total<hr>";

 ?>

</body>
</html>
