<!doctype html>
<html>
<head>
<title>Untitled</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php 
/*
print() � uma constru��o da linguagem 

Mostra arg. Retorna TRUE em caso de sucesso ou FALSE em falhas. 
Pode ser usado em express�o ternaria.
*/

print("PRINT utilizando parenteses");
print "<hr/>";
print"PRINT sem utilizar parenteses";
print "<hr/>";

/*
echo()  n�o � obrigat�rio usar par�nteses
N�o � poss�vel usar echo() num contexto de fun��es variaveis, mas voc� pode usar print() no lugar dela. 
N�o Pode ser usado em express�o ternaria.
*/

echo("ECHO utilizando parenteses");
echo "<hr/>";
echo"ECHO sem utilizar parenteses";
echo "<hr/>";

// pesquisar php.net print
 
$ret = print "Hello World<br/>";
print $ret;

?>
</body>
</html>