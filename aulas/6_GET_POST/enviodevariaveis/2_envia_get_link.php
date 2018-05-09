<?php 
$nome = "Bolsomito";
$idade = 2018;
?>

<!doctype html>
<html>
<head>
<title>envia get link</title>
</head>
<body>
<a href="1_recebe_get.php?nome=otavio&idade=19&curso=PHP">Clique aqui para enviar</a>
<hr>

<a href="1_recebe_get.php?nome=<?=$nome?>&idade=<?=$idade?>">Clique aqui para ver o proximo presidente</a>
</body>
</html>
