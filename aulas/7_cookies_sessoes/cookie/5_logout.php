<?php 
setcookie('nome','Bolsomito',time()-5555);
setcookie('escola',null);

foreach ($_COOKIE as $key => $valor){
	setcookie($key, null);
}

?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
//embora tenha sido feito o logout ainda traz a informa��o - logout somente est�ra disponivel a partir da pr�xima p�gina

#####################################33
print "Esta � a Cookie: <br>";
print "<pre>";
print_r($_COOKIE);
print "</pre>";
print "<hr>";
?>
?>
<p><a href="6_final.php">ir para a p�gina 6</a></p>
</body>
</html>
