<?php
$itens = ['banana', 'uva', 'pera', 'maca', 'manga', 'laranja'];
$num_itens = count($itens);
?>

<html>
<head>
<title>While desafio - A</title>
</head>
<body>
<ul>
<?php 
$i = 0;
while ($i < $num_itens){	
?>
	<li><?php echo $itens[$i]?></li>
<?php 
	$i++;
}
?>
</ul>
</body>
</html>
