<!doctype html>
<html>
<head>
<title>Settype_Gettype</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<?php 
//Estudo de Settype
//Declara variável ou altera o tipo de dado
settype($nome, 'string');
print gettype ($nome);
print $nome;
print "<hr>";
########################

settype ($b,'string');
print gettype ($b);
print "<br>";
$b = "PHP";
print $b;
print "<hr>";

settype ($b,'integer');
print gettype ($b);
print "<br>";
print $b;
print "<hr>";

##########################

print "<hr>";

$curso = "20teste";
$d = (int)($curso);
echo $d;


?>
</body>
</html>
