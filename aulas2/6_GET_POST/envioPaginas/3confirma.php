<!doctype html>
<html>
<meta charset="utf-8"/>
<head>
<title>CONFIRMAÇÃO</title>
</head>
<body>
<p>Olá <?=$_POST['nome']?>!!!<br>
  <br>

Você tem <?=$_POST['idade']?> anos!!!<br>
<br>
<br>

Confirma essas informacoes?</p>
<p>&nbsp;</p>
<p>&nbsp;</p>



<a href="4final.php?nome=<?=$_POST['nome']?>&idade=<?=$_POST['idade']?>">SIM </a>
<hr>
<a href="1nome.php?nome=<?=$_POST['nome']?>&idade=<?=$_POST['idade']?>">NÃO</a>


</body>
</html>
