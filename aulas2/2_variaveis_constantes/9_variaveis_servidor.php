<?php 
echo getenv('REMOTE_ADDR');
echo "<hr>";

echo $_SERVER['REMOTE_ADDR'];
echo "<hr>";

var_dump(get_defined_vars());
?>