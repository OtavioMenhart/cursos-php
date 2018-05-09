<!doctype html>
<html>
<head>
<title>Untitled</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php 

/*
 * 
p1	p2	and	or	xor
V	V	V	V	F
V	F	F	V	V
F	V	F	V	V
F	F	F	F	F

*/

$a = 15;
$b = 3;
$c = 6;


print ($a>$b && $a>$c)."<hr>";//and

print ($a>$b || $a>$c)."<hr>";//or

print ($a>$b xor $a>$c)."<hr>";//xor



?>
</body>
</html>
