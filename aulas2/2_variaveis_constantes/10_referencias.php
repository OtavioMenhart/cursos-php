<?php
$a = 2;
$b = $a;
$a = 5;
var_dump($a,$b);
echo "<hr>";

$c = 2;
$d = &$c;//endreço de c
$c = 5;
var_dump($c,$d);