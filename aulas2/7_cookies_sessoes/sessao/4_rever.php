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


print "Esta é a Escola:".$_SESSION['escola'];
print "<hr>";
print "Esta é o Nome:".$_SESSION['nome'];
?>
<p><a href="5_logout.php">ir para a pégina 5</a></p>
</body>
</html>
