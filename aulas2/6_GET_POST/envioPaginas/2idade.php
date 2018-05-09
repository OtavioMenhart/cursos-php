<!doctype html>
<html>
<meta charset="utf-8"/>
<head>
<title>Untitled</title>
</head>
<body>
<form action="3confirma.php" method="post">
Olá <?= $_POST['nome'] ?>!!!<br><br>
Digite sua idade:
<input type="text" name="idade" value="<?=$_POST['idade']?>">
<input type="hidden" name="nome" value="<?=$_POST['nome']?>">

<input type="submit"/>

</form>
</body>
</html>
