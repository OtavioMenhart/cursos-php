<?php

function montaLista($itens){
	
	//parametrização
	//$itens = ['banana', 'uva', 'pera', 'maca', 'manga', 'laranja'];	
	$num_itens = count($itens);	
	$saida = "<ul>\n";
	
	$i = 0;
	while ($i < $num_itens){
		$saida = $saida."\t<li>$itens[$i]</li>\n";
		$i++;
	}
	$saida .= "</ul>\n";//$saida = $saida"</ul>\n";
	return $saida;
}

$frutas = ['banana', 'uva', 'pera', 'maca', 'manga', 'laranja'];
$cores = ['azul', 'amarelo', 'preto', 'branco'];
?>

<html>
<head>
<title>While desafio - A</title>
</head>
<body>

<?=montaLista($frutas);?>
<?=montaLista($cores);?>

</body>
</html>
