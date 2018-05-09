<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
$alunos = array("Aline","Anderson","denise","gilberto","eduardo","luis","Diego","lilica", 'Otávio');
print "<hr>";
var_dump($alunos);
echo count($alunos)."<br>";
echo sizeof($alunos)."<br>";

print "<hr>";

#######################################
//for
for($i=0; $i<sizeof($alunos); $i++){
	echo "\$alunos[$i] = $alunos[$i]<br>";
}
print "<hr>";

############################################
//array nominarivo
$regentes = ['sol'=>"Leao", 'lua'=>"Cancer", 'marte'=>"Aries", 'terra'=>"Touro"];
var_dump($regentes);

print "<hr>";

################################################
//foreach - reseta um array e move o ponteiro para o proximo indice a cada giro
//foraech somente com o VALOR
foreach ($regentes as $valor){
	echo "$valor<br>";
}

print "<hr>";
//foraech  com o INDICE e VALOR
foreach ($regentes as $chave=>$valor){
	echo "$chave - $valor<br>";
}


print "<hr>";
#################################################




?>
</body>
</html>
