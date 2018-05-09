<?php

include_once '../8_funcoes/funcoes.php';

$frutas = ['banana', 'uva', 'pera', 'maca', 'manga', 'laranja'];
$cores = ['azul', 'amarelo', 'preto', 'branco'];
?>

<html>
<meta charset = "utf-8"/>
<head>
<title>While desafio - A</title>
</head>
<body>

<?=montaLista($frutas);?>
<?=montaLista($cores);?>

<p><?php echo "O quadrado de 5 é: ".quadrado(5);?></p>
</body>
</html>
