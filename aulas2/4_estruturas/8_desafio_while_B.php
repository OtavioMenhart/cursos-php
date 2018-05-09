<?php
$itens = ['banana', 'uva', 'pera', 'maca', 'manga'];
?>

<html>
<head>
<title>While desafio - A</title>
</head>
<body>
<ul>
<?php 
$i = 0;
while ($i < sizeof($itens)){	
?>
	<li>banana</li>
<?php 
	$i++;
}
?>
</ul>
</body>
</html>
