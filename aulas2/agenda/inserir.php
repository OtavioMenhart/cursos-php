<?php 
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['Incluir'])){
	include 'inc/conecta.php';
	extract($_POST);
	$data=date("Y-m-d");
	$sql="insert contatos values(null,'$nome','$fone','$email','$data','$sexo','$tipo')";
	//echo $sql;
	mysqli_query($conn, $sql);
	
	//header("location:gerenciar.php");
	$vai="gerenciar.php";
	header('location:'.$vai);
}
######################################################
include 'inc/header.php';
include 'inc/menu.php';
?>
<div id="formulario">
  <form id="form1" name="form1" method="post" action="">
    <p>&nbsp;</p>
    <table width="494" border="0" align="center" bordercolor="#FFFFFF" bgcolor="#FFFFFF">
      <tr>
        <td width="242"><div align="right">Nome: </div></td>
        <td width="242"><input type="text" name="nome"></td>
      </tr>
      <tr>
        <td><div align="right">Telefone: </div></td>
        <td><input type="text" name="fone"></td>
      </tr>
      <tr>
        <td><div align="right">email: </div></td>
        <td><input type="text" name="email"></td>
      </tr>
      <tr>
        <td valign="top"><div align="right">sexo: </div></td>
        <td><p>
          <label>
            <input type="radio" name="sexo" value="m" id="sexo_0">
            Masculino</label>
          <br>
          <label>
            <input type="radio" name="sexo" value="f" id="sexo_1">
            Feminino</label>
          <br>
        </p></td>
      </tr>
      <tr>
        <td><div align="right">tipo: </div></td>
        <td><select name="tipo" id="tipo">
          <option value="par">Particular</option>
          <option value="esc">Escola</option>
          <option value="fam">Familia</option>
          <option value="tra">Trabalho</option>
        </select></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input name="Incluir" type="submit" id="Incluir" value="Incluir">
        </div></td>
      </tr>
    </table>
  </form>
</div>
<?php include 'inc/footer.php';?>
