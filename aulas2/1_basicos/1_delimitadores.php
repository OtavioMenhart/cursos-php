<!doctype html>
<html>
<head>
<title>delimitadores</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<?php
//delimitadores do tipo php tags
//padr�o e deve ser utilizado
echo "Delimitadores do tipo PHP Tags<br/>";
?>

<hr />

<?
//short open tags - configur�vel e vem como padr�o OFF
//desabilitado em fun��o do XML
//n�o � necess�rio habilit�-la para utilizar o ALIAS do echo
echo "Delimitadores do tipo short open tags<br/>";
?>

<hr />

<%
<!-- asp tag - desabilitado e foi depreciado na vers�o 7 -->
echo "delimitadores do tipo ASP TAGS<br/>";
%>

<hr />

<!-- abaixo gerando o alias do echo php -->
<?="oi" ?>

</body>
</html>
