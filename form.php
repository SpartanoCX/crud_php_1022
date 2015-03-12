<?php
include("conexao.php");

/* EXCLUSAO DE COMENTARIO */
if(isset($_GET["excluir"]))
{
	$del = "delete from comentarios where idComent='$_GET[excluir]'";
	mysqli_query($conexao, $del) or die(mysqli_error());
	header("location: form.php?msg=excluido com sucesso");
}

/* SELECAO DO COMENTARIO A ALTERAR */
if(isset($_GET["alterar"]))
{
	$salt = "select * from comentarios where idComent='$_GET[alterar]'";
	$qalt = mysqli_query($conexao, $salt) or die(mysqli_error());
	$ralt = mysqli_fetch_assoc($qalt);
	//print_r($ralt);	
}

/* SE ESTOVER INSERINDO */
if (@$_POST["acao"]=="Inserir")
{
$disc=implode(",",@$_POST["Disciplina"]);
	$insert = "insert into comentarios values(
	'$_POST[Nome]', 
	'$_POST[Email]',
	'$_POST[Telefone]',
	'$_POST[Sexo]', 
	'$_POST[Estado]', 
	'$disc', 
	'$_POST[Coment]',
	'')";
	
	
	echo $insert;
	mysqli_query($conexao, $insert) or die(mysqli_error());
	header("location: form.php?msg=inserido com sucesso");
}

if (@$_POST["acao"]=="Alterar")
{
	$disc=implode(",",@$_POST["Disciplina"]);
	$update = "update comentarios set
	cNome='$_POST[Nome]',
	cEmail='$_POST[Email]',
	cTelefone='$_POST[Telefone]',
	cSexo='$_POST[Sexo]',
	cEstado='$_POST[Estado]',
	cDisciplinas='$disc',
	cComentario='$_POST[Coment]'
	where idComent='$_GET[alterar]'";

	//echo $update;
	mysqli_query($conexao, $update) or die(mysqli_error());
	header("location: form.php?msg=alterado com sucesso");
}


?>
<html>
<head>
<title>Meu Formulário</title>
<link rel="stylesheet" href="estilo.css" type="text/css">
</head>
<body>
<?php
if(@isset($_GET["msg"]))
{
?>
<div class="msg"><?php echo $_GET["msg"];?></div>
<?php } ?>
<form method="post">
<div id="form">
<h2>INFORME OS DADOS</h2>
<label>Nome</label>
<input type="text" name="Nome" value="<?php echo @$ralt["cNome"];?>">
</br>
<label>Email</label>
<input type="text" name="Email" value="<?php echo @$ralt["cEmail"];?>" >
</br>
<label>Telefone</label>
<input type="text" name="Telefone" value="<?php echo @$ralt["cTelefone"];?>">
</br>
<label>Sexo</label>
<input type="radio" name="Sexo" value="M" <?php echo @$ralt["cSexo"]=="M"? 'checked="checked"':''; ?>> M
<input type="radio" name="Sexo" value="F" <?php echo @$ralt["cSexo"]=="F"? 'checked="checked"':''; ?> > F
<input type="radio" name="Sexo" value="I" <?php echo @$ralt["cSexo"]=="I"? 'checked="checked"':''; ?>> Indefinido
</br>

<label>Estado</label>
<select name="Estado">
<!--  TERNARIO = TESTE LOGIGO ? 'VERDADEIRO' : 'FALSO' -->
<option value="MS" <?php echo @$ralt["cEstado"]=="MS"? 'selected="selected"':''; ?>>Mato Grosso do Sul</option>
<option value="SP" <?php echo @$ralt["cEstado"]=="SP"? 'selected="selected"':''; ?> >Sao Paulo</option>
<option value="MT" <?php echo @$ralt["cEstado"]=="MT"? 'selected="selected"':''; ?>>Mato Grosso</option>
<option value="TO" <?php echo @$ralt["cEstado"]=="TO"? 'selected="selected"':''; ?>>Tocantins</option>
</select>
</br>

<label>Disciplinas</label>
<?php

	$adisc = explode(",",@$ralt["cDisciplinas"]);
	

?>
<input type="checkbox" name="Disciplina[]" value="dweb" <?php echo in_array("dweb",$adisc)? 'checked="checked"':''; ?>> D. Web
<input type="checkbox" name="Disciplina[]" value="dmob" <?php echo in_array("dmob",$adisc)? 'checked="checked"':''; ?>> D. Mobile
<input type="checkbox" name="Disciplina[]" value="lprog" <?php echo in_array("lprog",$adisc)? 'checked="checked"':''; ?>> L Prog 4
</br>
<label>Comentario </label>
<textarea name="Coment" cols="22" rows="5"><?php echo @$ralt["cComentario"];?></textarea>
</br>
<?php 
if(!isset($_GET["alterar"]))
{
?>
<input type="submit" value="Inserir" name="acao" id="botao">
<?php } else {  ?>
<input type="submit" value="Alterar" name="acao" id="botao">

<?php  }?>
</br>
</form>
</div>
</br> 
<?php 
include("listagem.php");
?>
</body>	
</html>
