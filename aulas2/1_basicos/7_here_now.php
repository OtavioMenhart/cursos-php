<?php
$nome = "Fabiana";

echo "
<p>Olá $nome </p>
<p>Olá \"$nome\" </p>
<p>\"Impacta\" Treinamentos</p>	
";

echo "<hr>";
//sintaxe heredoc
//não preciso me preocupar com as aspas internas da string
echo <<<LISTA
<p>Olá $nome </p>
<p>Olá "$nome" </p>
<p>"Impacta" Treinamentos</p>
LISTA;

echo "<hr>";
echo <<<"LISTA"
<p>Olá $nome </p>
<p>Olá "$nome" </p>
<p>"Impacta" Treinamentos</p>
LISTA;

echo "<hr>";
//sintaxe nowdoc
echo <<<'LISTA'
<p>Olá $nome </p>
<p>Olá "$nome" </p>
<p>"Impacta" Treinamentos</p>
LISTA;
?>