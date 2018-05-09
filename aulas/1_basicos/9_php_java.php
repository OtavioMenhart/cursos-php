<?php 
$nome = "Otávio";

$saida =<<<AVISO
<script type="text/javascript">
<!--
alert("\\tOlá $nome! \\n\\nQuinto aviso");
//-->
</script>
AVISO;
?>

<!doctype html>
<html>
<head>
<title>Escape</title>
<meta charset="utf-8" />
</head>
<body>
<script type="text/javascript">
<!--
alert("\tOlá <?=$nome ?>! \n\nPrimeiro aviso");
//-->
</script>

<script type="text/javascript">
<!--
alert("\tOlá <?=$nome ?>! \n\nSegundo aviso");
//-->
</script>

<?php
echo "<script type=\"text/javascript\">
<!--
alert(\"\\tOlá $nome! \\n\\nTerceiro aviso\");
//-->
</script>";
?>

<?php
echo "<script type=\"text/javascript\">\n";
echo "<!--\n";
echo "alert(\"\\tOlá $nome! \\n\\nQuarto aviso\");\n";
echo "//-->\n";
echo "</script>\n";
?>

<?=$saida ?>


</body>
</html>
