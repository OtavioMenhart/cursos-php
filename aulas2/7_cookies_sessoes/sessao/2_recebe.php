<?php 
/* 
Devo iniciar a sess�o - session_start();
S� pode ser usada uma vez na p�gina - sen�o retorna erro;
Enviar dados para a sess�o:
		Atribui��o de valores - $_SESSION[nome]=$_POST[nome];
Estar� dispon�vel a partir da mesma p�gina em que foi criada
S� existe para esta "sess�o do browser";
Se eu n�o destruir o arquivo ele ficar� como "lixo" no servidor, por�m inascessivel.
 */
session_start();
$_SESSION['nome'] = $_POST['nome'];
$_SESSION['escola'] = $_POST['escola'];
$_SESSION['idade'] = 47;
$_SESSION['salario'] = 1457.687;
$_SESSION['logado'] = true;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>
<?php 
 
print "Esta é a Post:  <br>";
print "<pre>";
print_r($_POST);
print "</pre>";
###########################################################3
print "<hr>";
#####################################33
print "Esta é a Sessão: <br>";
print "<pre>";
print_r($_SESSION);
print "</pre>";
print "<hr>";
?>

</p>
<p>&nbsp;</p>
<p><a href="3_ver.php">ir para a página 3</a></p>
</body>
</html>
