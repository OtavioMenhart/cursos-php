<?php 
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['login'])){
	
		include 'inc/conecta.php';
		extract($_POST);
		
		$sql = "select * from usuarios where usuario='$login' and senha='$senha' ;";
		$result = mysqli_query($conn, $sql);
		$resposta = mysqli_num_rows($result);
		if($resposta == 1){
					//criar sessao
					if(!isset($_SESSION)){
						session_start();
						$_SESSION['logado']=true;
					}
					//criar ou deletar cookie
					if(isset($lembrar)){
						setcookie('login',$login,time()+10000);
						setcookie('senha',$senha,time()+10000);
						setcookie('lembrar','checked',time()+10000);
					}else{
						setcookie('login',null);
						setcookie('senha',null);
						setcookie('lembrar',null);
					}
					//navegaчуo
					$vai="gerenciar.php";
		}else{
					$vai="index.php?invasao=tentou";
		}
}else{
	$vai="index.php";
}
header('location:'.$vai);