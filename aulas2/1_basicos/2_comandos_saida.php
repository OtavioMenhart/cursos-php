<!doctype html>
<html>
<head>
<title>Untitled</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<?php 
/*
print() é uma construção da linguagem 

Mostra arg. Retorna TRUE em caso de sucesso ou FALSE em falhas. 
Pode ser usado em expressão ternaria.
*/

print("PRINT utilizando parenteses");
print "<hr/>";
print"PRINT sem utilizar parenteses";
print "<hr/>";

/*
echo()  não é obrigatório usar parênteses
Não é possível usar echo() num contexto de funções variaveis, mas você pode usar print() no lugar dela. 
Não Pode ser usado em expressão ternaria.
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