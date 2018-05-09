<?php 
if (isset($_GET['id_cont'])) {
	include 'inc/conecta.php';	
	$sql = "delete from contatos 
			where id_cont=?";
	
	$id = (int)($_GET['id_cont']);
	$stm = $con->prepare($sql);
	$stm->bind_param('i', $id);
	$stm->execute();	
	header("location:gerenciar.php");;
}

?>