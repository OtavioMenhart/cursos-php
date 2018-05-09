<!doctype html>
<html>
<head>
<title>delimitadores</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<?php
//delimitadores do tipo php tags
//padrão e deve ser utilizado
echo "Delimitadores do tipo PHP Tags<br/>";
?>

<hr />

<?
//short open tags - configurável e vem como padrão OFF
//desabilitado em função do XML
//não é necessário habilitá-la para utilizar o ALIAS do echo
echo "Delimitadores do tipo short open tags<br/>";
?>

<hr />

<%
<!-- asp tag - desabilitado e foi depreciado na versão 7 -->
echo "delimitadores do tipo ASP TAGS<br/>";
%>

<hr />

<!-- abaixo gerando o alias do echo php -->
<?="oi" ?>

</body>
</html>
