<?php
//um programa que conte de 1 até 50 separado por virgula

$cont = 1;
while ($cont <= 50){
	echo $cont.", ";
	$cont++;
}

echo "<hr>";

#################################################################

//um programa que conte de 1 até 50 separado por virgula, 
//quando chegar no 50 terminar com ponto

$cont = 1;
while ($cont <= 50){	
		if($cont <= 48){
			echo $cont.", ";
		}elseif($cont == 49){
			echo $cont." e";		
		}else{
		echo $cont.".";
		}
	
	$cont++;
}

echo "<hr>";

#################################################################

//um programa que conte de 1 até 50 separado por virgula,
//numeros pares vermelhos e numeros impares pretos
//multiplo 5 é verde


$cont = 1;

while ($cont <= 50){
	if($cont % 5 == 0){
		$cor = "color:#33ff33";		
	}
	elseif ($cont % 2 == 0){
		$cor = "color:#F00";
	}
	else{
		$cor = "color:#000";
	}
	
	echo "<span style='$cor'>$cont, </span>";

	$cont++;
}
//um programa que conte de 1 até 50 separado por virgula

$cont = 1;
while ($cont <= 50){
	echo $cont.", ";
	$cont++;
}

echo "<hr>";

#################################################################

//um programa que conte de 1 até 50 separado por virgula, 
//quando chegar no 50 terminar com ponto

$cont = 1;
while ($cont <= 50){	
		if($cont <= 48){
			echo $cont.", ";
		}elseif($cont == 49){
			echo $cont." e";		
		}else{
		echo $cont.".";
		}
	
	$cont++;
}

echo "<hr>";

#################################################################

//um programa que conte de 1 até 50 separado por virgula,
//numeros pares vermelhos e numeros impares pretos
//multiplo 5 é verde


$cont = 1;

while ($cont <= 50){
	if($cont % 5 == 0){
		$cor = "color:#33ff33";		
	}
	elseif ($cont % 2 == 0){
		$cor = "color:#F00";
	}
	else{
		$cor = "color:#000";
	}
	
	echo "<span style='$cor'>$cont, </span>";

	$cont++;
}

echo "<hr>";

#################################################################
