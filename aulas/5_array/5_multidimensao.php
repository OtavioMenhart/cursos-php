<?php
$a['sp'][0]="Santos";
$a['sp'][1]="Campinas";
$a['sp'][2]="Itu";
$a['sp'][3]="Jau";
$a['rj'][0]="Buzios";
$a['rj'][1]="Niteroi";
$a['rj'][2]="Parati";
$a['mg'][0]="BH";
$a['mg'][1]="Pocos de CAldas";
$a['am'][0]="Manaus";

echo "Total estados: ".count($a);//4
echo "<br>";
echo "Tamanho total do array: ".count($a, true);//14
echo "<hr>";

echo count($a['sp']);//4
echo "<br>";
echo $a['sp'][0];//Santos
echo "<hr>";

######################################################

foreach ($a as $key=>$valor){
	@ print "$key - $valor <br>";
}
echo "<hr>";
######################################################

//para pegar cidades de SP
foreach ($a['sp'] as $key=>$valor){
	@ print "$key - $valor <br>";
}
echo "<hr>";

######################################################

foreach ($a as $key=>$valor){
	foreach ($valor as $indice => $cont){
		@ print "$key - $indice - $cont <br>";
	}
}
echo "<hr>";

//var_dump($a);















