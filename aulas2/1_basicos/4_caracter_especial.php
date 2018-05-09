<!doctype html>
<html>
<head>
<title>Untitled</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<?php 
/*
 * \r \n \t só funcionam entre aspas duplas
 * 
 * 
*/


echo "Isto divide em 3 linhas
Esta é a segunda linha
quebras de linha serão mostradas também
esta é a quarta linha&quot";

echo "\n\n<hr>\n\n";

echo "Isto divide em 3 linhas\n Esta é a segunda linha\n quebras de linha serão mostradas também\n esta é a quarta linha&quot";

echo "\n\n<hr>\n\n";

echo "Isto divide em 3 linhas
\tEsta é a segunda linha
\tquebras de linha serão mostradas também
\t\testa é a quarta linha&quot";

//Linguagem C nativa
//no Windows - char13 - quebra de linha
//32 espaço
//8 backspace
//tableascii.com

?>


</body>
</html>
