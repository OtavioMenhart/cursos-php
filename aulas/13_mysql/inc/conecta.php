<?php
$host = "localhost";
$user = "root";
$password = "";
$basedados = "agenda";

/* procedural style
$con = mysqli_connect($host, $user, $password, $basedados);
*/

@$con = new mysqli($host, $user, $password, $basedados);

if ($con->connect_error){
	echo "Ocorreu um erro na conexao com o banco de dados<br>";
	exit;
}
$con->set_charset('utf8');