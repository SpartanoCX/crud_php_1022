<?php 
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "feedback";
	
	$conexao = mysqli_connect($servidor, $usuario, $senha)
	or die(mysqli_error());
	
	mysqli_select_db($conexao,$banco) or die (mysqli_error());
	
	
?>