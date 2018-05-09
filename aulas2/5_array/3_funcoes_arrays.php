<?php
//$input = array(4, "4", "3", 4, 3, "3");
//$result = array_unique($input);
//var_dump($result);
print "<hr>";
########################################################################
//ksort — Ordena um array pelas chaves 
//mantendo a correlação entre as chaves e os valores. 
//$frutas = array("d"=>"limao", "a"=>"laranja", "b" =>"banana", "c"=>"maçã");
//ksort($frutas);
//var_dump($frutas);
print "<hr>";
/*
#################################################################
//asort — Ordena um array mantendo a associação entre índices e valores
$frutas = array("d" => "limao", "a" => "laranja", "b" => "banana", "c" => "melancia");
asort($frutas);
//var_dump($frutas);
print "<hr>";
###############################################################
############################################################
array_sum - Calcula a soma dos elementos de um array - INTEIRO OU REAL
*/
//$a = array(2, 4, 6, 8);
//echo "soma(a) = ".array_sum($a)."\n";

//$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
//echo "soma(b) = ".array_sum($b)."\n";
#################################################################



##############################################################    
/*    array_key_exists
(PHP 4 >= 4.0.7, PHP 5)array_key_exists - Checa se uma chave ou índice existe em um array
*/
$escola['impacta']="livre";
$escola['usp']="superiores";
$escola['cetoc']="tecnicos";
//if(array_key_exists('usp',$escola)){
    //print "Tem usp";	
//}
//if(array_key_exists('pus',$escola)){
    //print "Tem usp";	
//}
print "<hr>";
/*
######################################################
in_array - Checa se um valor existe em um array
*/
$os = array("Mac", "NT", "Irix", "Linux"); 
//if (in_array("Irix", $os)) { 
    //print "Tem Irix";
//}
//if (in_array("mac", $os)) { 
    //print "Tem mac";
//}
 
###################################################3
//array_reverse
//$school = array_reverse($escola);

//print_r($school);
?>