<?php
$nome = "Fabiana";

echo "
<p>Ol� $nome </p>
<p>Ol� \"$nome\" </p>
<p>\"Impacta\" Treinamentos</p>	
";

echo "<hr>";
//sintaxe heredoc
//n�o preciso me preocupar com as aspas internas da string
echo <<<LISTA
<p>Ol� $nome </p>
<p>Ol� "$nome" </p>
<p>"Impacta" Treinamentos</p>
LISTA;

echo "<hr>";
echo <<<"LISTA"
<p>Ol� $nome </p>
<p>Ol� "$nome" </p>
<p>"Impacta" Treinamentos</p>
LISTA;

echo "<hr>";
//sintaxe nowdoc
echo <<<'LISTA'
<p>Ol� $nome </p>
<p>Ol� "$nome" </p>
<p>"Impacta" Treinamentos</p>
LISTA;
?>