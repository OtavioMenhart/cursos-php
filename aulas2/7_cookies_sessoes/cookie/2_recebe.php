<?php 
/* 
=>setcookie(nome,valor,duracao[opcional])
	nome e valor s�o necess�rios - nome ser� o �ndice do array $_COOKIE e valor ser� o comte�do.
	ex:setcookie(idade,25) => $_COOKIE[idade]=25
=>dura��o - se for omitido, a cookie expirar� quando o browser for fechado.
	dura��o da cookie � em segundos:
												1 minuto			60 segundos
						1 hora				60minutos		3600 segundos
	1dia				24 horas			1440 minutos	86400 segundos
	time()+86400;
=>tamanho - n�o pode exceder 64 kb;
=>mesma exig�ncia da fun��o header();
=>Recuperar valor de cookie   -   $_COOKIE[valor]
=>Apagar um cookie - configurar o cookie SEM PASSAR PARAMETROS - setcookie(nome)
=>O cookie n�o � recuperado na p�gina onde foi setado.
 */

setcookie('nome',$_POST['nome'],time()+86400);
setcookie('escola',$_POST['escola'],time()+86400);
setcookie('idade',65,time()+86400);
setcookie('salario',123.45,time()+86400);
setcookie('logado',true,time()+86400);

?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<p>
<?php 
print "Esta � a Post:  <br>";
print "<pre>";
print_r($_POST);
print "</pre>";
###########################################################3
print "<hr>";
#####################################33
print "Esta � a Cookie: <br>";
print "<pre>";
print_r($_COOKIE);
print "</pre>";
print "<hr>";
?>
</p>
<p>&nbsp;</p>
<p><a href="3_ver.php">ir para a p�gina 3</a></p>
</body>
</html>
