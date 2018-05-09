<?php 
// $nome = $_GET['nome'];
// $idade = $_GET['idade'];

extract($_GET);//$nome=otavio e $idade=19
?>

<!doctype html>
<html>
<head>
<title>DIGITE SEU NOME</title>
</head>
<body>
<form action="2idade.php" method="post">

Digite seu nome:
<input type="text" name="nome" value="<?=$nome?>">
<input type="hidden" name="idade" value="<?=$idade?>">
<input type="submit" />


</form>
</body>
</html>
