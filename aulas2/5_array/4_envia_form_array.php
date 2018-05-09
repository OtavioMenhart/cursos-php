<?php 
if (isset($_POST['enviar'])){
	var_dump($_POST);
	die("Morri");
}
?>

<!doctype html>
<html>
<head>
<title>Formulário de Extra1</title>
<meta charset="utf-8" />
</head>

<body>

<h3>Preencha o formulário abaixo:</h3>
<form action="" method="post">

Qual o seu nome? <input type="text" name="nome" /><br /><br />

Cor Preferida: &nbsp;&nbsp;
Branco <input type="radio" name="cor" value="white" /> &nbsp;
Azul<input type="radio" name="cor" value="blue" /> &nbsp;
Verde  <input type="radio" name="cor" value="green" /><br /><br />

Transporte: 
<select name="trans[]" multiple>
	<option value="suby">Metro</option>
	<option value="air">Avião</option>
	<option value="bus">Ônibus</option>
	<option value="mot"a="a">Moto</option>
	<option value="lan">Lancha</option>
	<option value="fog">Foguete</option>
	<option value="nav">Navio</option>
	<option value="tri">Triciclo</option>
	<option value="jet">JetSki</option>
	<option value="par">ParaQuedas</option>
</select>
<br />
<br />

Faça seu comentário:
<br />
<textarea rows="5" cols="20" name="comentario"></textarea><br /><br />


<br />
<br />
<p>Portugues
<input type="checkbox" name="idioma[]" value="port" />
</p>
<p>Francês
<input type="checkbox" name="idioma[]" value="fran" />
</p>
<p>Inglês
<input type="checkbox" name="idioma[]" value="ing" />
</p>
<p>Alemão
<input type="checkbox" name="idioma[]" value="alem" />
</p>

<input type="submit" name="enviar" value="GO!" />
<input type="hidden" name="edgar" value="conrado" />
</form>
</body>
</html>
