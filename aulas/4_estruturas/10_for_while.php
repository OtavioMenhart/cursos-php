<?php
//quais são os multiplos de 3 que estão entre 1 e 100
for($cont=1; $cont<=100; $cont++){
	if($cont % 3 == 0){
		echo $cont." - ";
	}
}
echo "<hr>";


//qual é o primeiro multiplo de 11, 13 e 17
//não sei quantas repetições haverá
// variavel contadora e controladora não precisam ser a mesma variavel

$achei = false;//controladora
$i = 1;//contadora

while ($achei == false) {
	if($i % 11 == 0 && $i % 13 == 0 && $i % 17 == 0){
		echo $i;
		$achei = true;//ou poderia usar break;
	}	
	$i++;
}