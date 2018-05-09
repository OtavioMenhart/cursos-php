<!doctype html>
<html>
<head>
<title>Operadores de Incremento e Decremento </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php 
$a = 4; // 4
echo $a;//4
echo "<hr>";

$a++;//$a = $a + 1
echo $a."<hr>";

++$a;//6
echo $a."<hr>";

//pós incremento
echo $a++."<hr>";//printar 6 e em seguida atribuirá 1 à variavel = 7
echo $a."<hr>";//7

echo ++$a."<hr>";//atribuira 8 e depois vai imprimir

#########################################################################
$a--;
echo $a."<hr>";//7

--$a;
echo $a."<hr>";//6

echo $a--."<hr>";//printar 6 e em seguida ira decrementar 1 à variavel = 5
echo $a."<hr>";//5

echo --$a."<hr>";//atribuira 4 e depois vai imprimir
?>

</body>
</html>
