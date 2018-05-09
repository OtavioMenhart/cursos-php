<?php 
$nome = "Impacta";
$saida = "<p class=\"formata\">O nome é: $nome</p>";
?>

<!doctype html>
<html>
<head>
<title>Untitled</title>
<meta charset="utf-8" />

<style type="text/css">
.formata{
	color:#F00;
	font-family:Arial, Helvetica, sans-serif;
	font-size:36px;
}
</style>

</head>
<body>

<p class="formata">O nome é Otávio</p>
<hr />

<p class="formata"><?=$nome?></p>
<hr />

<?php 
echo "<p class=\"formata\">$nome</p>";
?>
<hr />

<?=$saida?>
<hr />

</body>
</html>
