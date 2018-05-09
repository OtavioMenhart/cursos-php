<?php 
setcookie('nome', 'Bolsomito', time()+80000);
setcookie('escola', 'Presidente', time()+80000);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert title here</title>
</head>
<body>
<form action="2_recebe.php?nome=Onofre&escola=Escritorio&idade=50&curso=Direito" method="post">
	Nome: <input type="text" name='nome'>
	<br>
	Escola: <input type="text" name='escola'>
	<br>
	Idade: <input type="text" name='idade'>
	<input type="submit" />
	
</form>
</body>
</html>