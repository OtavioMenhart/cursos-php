<!doctype html>
<html>
<head>
<title>Untitled</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<?php 
//Estudo de isset - exibe a variavel

$a = 12;
print "Essa variável existe:";
print isset($a);//1
print "<hr>";

unset($a);
print "Essa variável existe:";
print isset($a);//null


?>
</body>
</html>
