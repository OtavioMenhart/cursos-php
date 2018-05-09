<?php
$nota = 8;

echo "<hr>";

if($nota >= 7){
	echo "aprovado<br>";
}
else{
	echo "reprovado<br>";
}

echo "<hr>";

echo ($nota>=7);//true or false
echo "<hr>";

echo ($nota>=7) ? "aprovado" : "reprovado";
echo "<hr>";

$nome = "Otávio";
echo (isset($nome)) ? ($nome) : ("Não existe \$nome");
echo "<hr>";

#########################################################

echo $c;
echo "<br>";

echo (isset($c)) ? ($c) : ("Não existe \$c");
echo "<br>";

//a partir da versão 7: 
//echo $c?? "Não existe \$c";





