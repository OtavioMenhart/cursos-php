<?php 
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
print "Esta é a Post:  <br>";
print "<pre>";
print_r($_POST);
print "</pre>";
###########################################################3
print "<hr>";
#####################################33
print "Esta é a Sessão: <br>";
print "<pre>";
print_r($_SESSION);
print "</pre>";
print "<hr>";
?>
<p><a href="4_rever.php">ir para a página 4</a></p>
</body>
</html>