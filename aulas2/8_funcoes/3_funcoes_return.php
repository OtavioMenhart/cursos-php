<?php 
function quadrado($numero){
	//$numero = 5;
	$total = $numero * $numero;
	return  $total;
}

############################################
echo "<hr>";

echo quadrado(6)."<hr>";

echo $a = quadrado(10)."<hr>";

echo $b = quadrado(6) + quadrado(10)."<hr>";

echo quadrado(quadrado(6) + quadrado(10))."<hr>";