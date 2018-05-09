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