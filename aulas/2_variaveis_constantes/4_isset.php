<!doctype html>
<html>
<head>
<title>Untitled</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<?php 
//Estudo de isset - testa (verifica) a exist�ncia da variavel

$a = 12;

print "A \$a existe:";
print isset($a);// Essa vari�vel existe 
print "<hr>";

print "A \$b existe:";
print isset($b);// Essa vari�vel n�o existe 
print "<hr>";

print "A \$a n�o existe:";
print !isset($a);// Essa vari�vel existe
print "<hr>";

print "A \$b n�o existe:";
print !isset($b);// Essa vari�vel n�o existe


?>
</body>
</html>
