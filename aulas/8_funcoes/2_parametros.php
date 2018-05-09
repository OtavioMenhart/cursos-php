<?php 
function quadrado($numero){
	//$numero = 5;
	$total = $numero * $numero;
	echo $total;
}

############################################
echo "<hr>";
quadrado(6);
echo "<hr>";
quadrado(10);
echo "<hr>";

$a = quadrado(6) + quadrado(10);
echo $a;
