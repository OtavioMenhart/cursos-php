<?php 
var_dump($_GET);

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<title>RECEBE GET</title>
</head>
<body>
<?php 
//valores acrescentados �s variaveis atrav�s da URL - recebe_get.php?nome=edu+pretel&idade=34
print "Seu nome é: <b> {$_GET['nome']} </b>\n";
print "<hr>\n";
print "Sua idade é: <b> {$_GET['idade']} </b>\n";
?>
</body>
</html>