<?php
$itens = ['banana', 'uva', 'pera', 'maca', 'manga', 'laranja'];
$num_itens = count($itens);

$saida = "<ul>\n";

$i = 0;
while ($i < $num_itens){
	$saida = $saida."\t<li>$itens[$i]</li>\n";
	$i++;
}
$saida .= "</ul>\n";//$saida = $saida"</ul>\n";
?>

<html>
<head>
<title>While desafio - A</title>
</head>
<body>

<?=$saida?>

</body>
</html>
