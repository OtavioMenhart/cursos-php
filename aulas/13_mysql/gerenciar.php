<?php
include 'inc/conecta.php';

$sql = "select * from contatos";
$result = $con->query($sql);
// while ($resposta = $result->fetch_assoc()) {

/*
while ($resposta = $result->fetch_object()) {	
	var_dump($resposta);
}
exit;
*/
#########################################
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
    
    <?php while ($resposta = $result->fetch_object()): ?>
    <tr>
      <td><div align="center"><?=$resposta->id_cont ?></div></td>
      <td><?=$resposta->nome ?></td>
      <td><?=$resposta->fone ?></td>
      <td width="69"><div align="center"><a href="alterar.php?id_cont=<?=$resposta->id_cont ?>">alterar</a></div></td>
      <td width="69"><div align="center"><a href="excluir.php?id_cont=<?=$resposta->id_cont ?>">excluir</a></div></td>
    </tr>
    <?php 
    endwhile;
    ?>
    
  </table>
</div>
<p align="center">&nbsp;</p>
<?php 
include 'inc/footer.php';
?>
