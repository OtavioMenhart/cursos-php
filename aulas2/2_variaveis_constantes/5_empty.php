<!doctype html>
<html>
<head>
<title>Untitled</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<?php 
//Estudo de empty - 

settype ($a,"string");
print gettype ($a);
print $a;
print "<br>";
print "Está vazia: ";
print empty($a);//1
print "<br>";
print "Não está vazia: ";
print !empty($a);//null
print "<hr>";

settype ($b,"string");
print gettype ($b);//string
print "<br>";
$b = "Impacta";
print $b;
print "<br>";

print "Está vazia: ";
print empty($b);//null
print "<br>";

print "Não Está vazia: ";
print !empty($b);//1
print "<hr>";




?>
</body>
</html>
