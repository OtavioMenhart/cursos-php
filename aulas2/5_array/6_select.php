<!doctype html>
<?php 
include_once '../8_funcoes/funcoes.php';

$uf = ['sp' => 'São Paulo','rj' => 'Rio de Janeiro', 'pa' => 'Pará',
		'ac' => 'Acre', 'pr' => 'Paraná'];

$cores = ['amarelo', 'azul', 'verde', 'vermelho'];
?>

<html>
<head>
<title>For</title>
<meta charset="utf-8" />
</head>
<body>

<form>
<?=montaSelect('uf', $uf)?>
<hr>
<?=montaSelect('colors', $cores)?>
<hr>
<?=montaTabela(6,6)?>
<hr>
<?=montaLista($cores)?>
</form>
</body>
</html>
