<?php
//o operador goto pode ser usado para pular para outra sessão do programa

$nota = 10;
if ($nota == 10){
	goto ancora;
}

echo "<hr>";
echo "texto 1";

echo "<hr>";
echo "texto pos ancora";

echo "<hr>";
echo "texto pos ancora";
ancora:
echo "<hr>";
echo "texto pos ancora";