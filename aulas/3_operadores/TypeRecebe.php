<!doctype html>
<html>
<head>
<title>Resultado do c�lculo</title>

<style type="text/css">
<!--
  body {font: 80% verdana}
//-->
</style>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>

<?PHP
  print "<h3>A soma dos valores passados �: " . $_POST['num1'] + $_POST['num2'] . "</h3>";
print "<hr>";
//( $_POST[num1] + $_POST[num2]) - parenteses para somar - convers�o implicita;
//  print "<h3>A soma dos valores passados �: " . $_POST['num1'] + $_POST['num2'] . "</h3>";
//  print "<hr>";
//(int)($_POST[num1] + $_POST[num2]) - tipo de dados precede a express�o - convers�o explicita
//  print "<h3>A soma dos valores passados �: " . $_POST['num1'] + $_POST['num2'] . "</h3>";
//print "<hr>";

 ?>

</body>
</html>