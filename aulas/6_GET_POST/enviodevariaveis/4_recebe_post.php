<?php 
var_dump($_POST);

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8"/>
<title>RECEBE POST</title>
</head>
<body>
<?php 
//valores acrescentados �s variaveis atrav�s da URL - recebe_get.php?nome=edu+pretel&idade=34
print "Seu nome é: <b> {$_POST['nome']} </b>\n";
print "<hr>\n";
print "Sua idade é: <b> {$_POST['idade']} </b>\n";
?>
</body>
</html>