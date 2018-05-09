<?php 
//inclui apenas uma vez, mesmo se tetntar incluir novamente
include_once '../8_funcoes/funcoes.php';
$a = quadrado(4);
?>

<!doctype html>
<html>
<head>
<title>Estudo de vari�vel</title>
<meta charset="utf-8" />
</head>
<body>

<?=quadrado(9)?>
<hr>
<?=$a?>
<hr>

</body>
</html>