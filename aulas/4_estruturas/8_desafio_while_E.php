<?php
$itens = ['banana', 'uva', 'pera', 'maca', 'manga', 'laranja'];
$num_itens = count($itens);
?>

<html>
<head>
<title>While desafio - A</title>
</head>
<body>

<?php 
echo "<ul>\n";

$i = 0;
while ($i < $num_itens){
	echo "\t<li>$itens[$i]</li>\n";
	$i++;
}
echo "</ul>\n";
?>
</body>
</html>
