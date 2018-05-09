<!doctype html>
<html>
<head>
<title>Untitled</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<?php 
//Estudo de isset - testa (verifica) a existência da variavel

$a = 12;

print "A \$a existe:";
print isset($a);// Essa variável existe 
print "<hr>";

print "A \$b existe:";
print isset($b);// Essa variável não existe 
print "<hr>";

print "A \$a não existe:";
print !isset($a);// Essa variável existe
print "<hr>";

print "A \$b não existe:";
print !isset($b);// Essa variável não existe


?>
</body>
</html>
