<?php 
include 'inc/conecta.php';
#########################################
if (isset($_POST['alterar'])) {
	extract($_POST);
	
	/*
	$sql = "update contatos set nome='$nome',
				fone='$fone',
				email='$email',
				sexo='$sexo',
				tipo='$tipo'
			where id_cont='$id_cont'			
			";
	$con->query($sql);
	*/
	
	$sql = "update contatos set nome=?,
				fone=?,
				email=?,
				sexo=?,
				tipo=?
				where id_cont=?";
	$id = (int)($_POST['id_cont']);
	$stm = $con->prepare($sql);
	$stm->bind_param('sssssi', $nome, $fone, $email, $sexo, $tipo, $id);
	$stm->execute();
	
	header("location:gerenciar.php");
}

#########################################
if(isset($_GET['id_cont'])){
	
	/*
	$sql = "select * from contatos where id_cont = '{$_GET['id_cont']}' ";
	//die($sql);
	$result = $con->query($sql);
	$resposta = $result->fetch_object();
	//die(var_dump($resposta));
	*/
	$sql = "select * from contatos where id_cont=? ";
	$id = (int)($_GET['id_cont']);
	$stm = $con->prepare($sql);
	$stm->bind_param('i',$id);
	$stm->execute();
	$result = $stm->get_result();
	$resposta = $result->fetch_object();
}

#########################################
include 'inc/header.php';
include 'inc/menu.php';
?>
<div id="formulario">
  <form id="form1" name="form1" method="post" action="<?=$_SERVER['PHP_SELF']?>" class="pure-form pure-form-stacked">
    <p>&nbsp;</p>
    <table id="tabela">
      <tr>
        <th >Nome:</th>
        <td ><input type="text" name="nome" value="<?=$resposta->nome?>"></td>
      </tr>
      <tr>
        <th>Telefone: </th>
        <td><input type="text" name="fone" value="<?=$resposta->fone?>"></td>
      </tr>
      <tr>
        <th>email:</th>
        <td><input type="text" name="email" value="<?=$resposta->email?>"></td>
      </tr>
      <tr>
        <th >sexo: </th>
        <td>
          <label>
            <input type="radio" name="sexo" value="m" id="sexo_0" <?=($resposta->sexo=='m')?('checked'):(null) ?>>
            Masculino</label>
          <label>
            <input type="radio" name="sexo" value="f" id="sexo_1" <?=($resposta->sexo=='f')?('checked'):(null) ?>>
            Feminino</label>
          
        </td>
      </tr>
      <tr>
        <th>tipo: </th>
        <td><select name="tipo" id="tipo">
          <option value="par" <?=($resposta->tipo=='par')?('selected'):(null) ?>>Particular</option>
          <option value="esc" <?=($resposta->tipo=='esc')?('selected'):(null) ?> >Escola</option>
          <option value="fam" <?=($resposta->tipo=='fam')?('selected'):(null) ?> >Familia</option>
          <option value="tra" <?=($resposta->tipo=='tra')?('selected'):(null) ?> >Trabalho</option>
        </select></td>
      </tr>
      <tr>
        <td colspan="2"><input type="hidden" name="id_cont" id="id_cont" value="<?=$resposta->id_cont?>"></td>
      </tr>
      <tr>
        <td colspan="2">
          <input name="alterar" type="submit" id="alterar" value="Alterar" class="pure-button pure-button-primary">
        </td>
      </tr>
    </table>
  </form>
</div>
</body>
</html>
