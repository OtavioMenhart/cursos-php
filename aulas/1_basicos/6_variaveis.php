<?php
/*
 "Defini��o"
 "espa�o na mem�ria ao qual eu me referencio atrav�s de um endere�o<br>"
 "locais usados para armazenar informa��es durante a execu��o do programa"

Regras
1 - Sempre antecedidas pelo caracter "$"(dolar)
2 - Come�a com uma letra ou o simbolo "_"
3 - N�o podem conter espa�os
4 - Sensitive Case - NOME <> nome <> Nome
5 - Validos - $USER ; $login; $_cidade ; $_UF;";
6 - n�o v�lidos - $2mes; $#dia
*/
?>
<!doctype html>
<html>
<head>
<title>Estudo de vari�vel</title>
<meta charset="utf-8" />
</head>
<body>
<?php
//declarando uma vari�vel
//inicia variavel
$curso = "PHP";
echo $curso;

echo "<hr>";
echo '$curso';

echo "<hr>";
echo "Estou cursando $curso na Impacta";//iterpola��o de vari�vel

echo "<hr>";
echo 'Estou cursando '.$curso.' na Impacta';//concatena��o

echo "<hr>";
echo "O conte�do da vari�vel \$curso � $curso";

echo "<hr>";
echo 'O conte�do da vari�vel $curso � '.$curso;

?>
</body>
</html>