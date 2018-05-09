<?php 
//verificar se usuario esta logado
if(!isset($_SESSION)){
	session_start();
}
if(!isset($_SESSION['logado']) || $_SESSION['logado']!=true){
	$vai="index.php?invasao=url";
	header('location:'.$vai);
}


########################
include 'inc/conecta.php';
$sql="select * from contatos";
$query = mysqli_query($conn, $sql);

//http://us3.php.net/manual/pt_BR/mysqli-result.fetch-all.php
$resposta = mysqli_fetch_all($query,MYSQLI_ASSOC);
//var_dump($resposta);

/*
 * while($resposta = mysqli_fetch_array($query)){
	var_dump($resposta);
}
 * */

######################################################
include 'inc/header.php';
include 'inc/menu.php';
?>
<div id="agenda">
  <table width="564" border="1" align="center" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF">
    <tr>
      <td colspan="5"><p align="center">Agenda</p></td>
    </tr>
    <tr>
      <td width="92"><div align="center">Identificação</div></td>
      <td width="219"><div align="center">Nome</div></td>
      <td width="93"><div align="center">telefone</div></td>
      <td colspan="2"> <div align="center"><a href="inserir.php">Inserir</a></div></td>
    </tr>
    <?php 
    foreach($resposta as $conteudos)://$conteudos será um array(linha)
    ?>
    <tr>
      <td><div align="center"><?=$conteudos['id_cont'] ?></div></td>
      <td><?=$conteudos['nome'] ?></td>
      <td><?=$conteudos['fone'] ?></td>
      <td width="69"><div align="center"><a href="alterar.php?id_cont=<?=$conteudos['id_cont'] ?>">alterar</a></div></td>
      <td width="69"><div align="center"><a href="excluir.php?id_cont=<?=$conteudos['id_cont'] ?>">excluir</a></div></td>
    </tr>
   <?php endforeach;?>
  </table>
</div>
<p align="center">&nbsp;</p>
<?php include 'inc/footer.php';?>














