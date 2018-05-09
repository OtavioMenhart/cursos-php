<?php
function quadrado($numero){
	//$numero = 5;
	$total = $numero * $numero;
	return  $total;
}

#######################################################

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

#########################################################

function montaTabela($num_linhas, $num_colunas){
	
// 	$num_linhas = 8;//define o numero de linhas
// 	$num_colunas = 3;//define o numero de colunas
	
	$tabela = "<table border=\"1\">\n";
	$tabela .= "\t<tr>\n";
	for($linha = 1; $linha <= $num_linhas; $linha++){
		for($coluna = 1; $coluna <= $num_colunas; $coluna++){				
			$tabela = $tabela."\t\t<td>$linha.$coluna</td>\n";
		}
		$tabela .= "\t</tr>\n";
	}
	$tabela .= "</table>\n";
	return $tabela;
	
}

################################################################

function montaSelect($name, $itens){
	//$itens = ['sp' => 'São Paulo','rj' => 'Rio de Janeiro', 'pa' => 'Pará', 
			  //'ac' => 'Acre', 'pr' => 'Paraná'];
	//$name = "estados";
	
	$saida = "<select name=\"$name\" id=\"$name\">\n";
	foreach ($itens as $value=>$label){
		$saida .= "\t<option value=\"$value\">$label</option>\n";
	}
		$saida .= "</select>\n";
		return $saida;
}
