<?php
$nota = 5;

echo "<hr>";

if($nota >= 7){
	echo "aprovado<br>";
}
else if ($nota >= 5 && $nota < 7) {
	echo "recuperacao<br>";
}
else{
	echo "reprovado<br>";
}

echo "<hr>";