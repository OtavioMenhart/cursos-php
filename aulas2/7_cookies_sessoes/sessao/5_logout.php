<?php 
session_start();
unset($_SESSION['salario']);
unset($_SESSION['logado']);

session_destroy();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

print "<hr>";
#####################################33
print "Esta é a Sessão: <br>";
print "<pre>";
print_r($_SESSION);
print "</pre>";
print "<hr>";
?>
<p><a href="6_final.php">ir para a página 6</a></p>
</body>
</html>
