<?php
//um programa que conte de 1 até 50 separado por virgula
$parar = 3;
$cont = 1;
$pular = 20;

while ($cont <= 50){
	echo $cont.", ";
	if($cont == $parar){
		break;
	}
	$cont++;
}

echo "<hr>";

#################################################################

while ($cont <= 50){
	if($cont == $pular){
		$cont++;
		continue;
	}
	echo $cont.", ";
	$cont++;
}

echo "<hr>";