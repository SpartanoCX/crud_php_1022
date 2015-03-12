<?php
require_once("conexao.php");

$sel ="select * from comentarios order by idComent desc";
$qsel = mysqli_query($conexao,$sel) or die(mysqli_error());

//$rsel = mysqli_fetch_assoc($qsel) or die(mysqli_error());


?>
<div class="msg"><?php echo mysqli_num_rows($qsel); ?> Registros</div>
<table align="center" width="70%" border="1">
<tr>
	<td>
	ID
	</td>
	<td>
	Nome
	</td>
	<td>
	Comentário
	</td>
	<td>

	EXCLUIR?
	</td>
	<td>
	ALTERAR
	</td>
</tr>
<?php
while($rsel = mysqli_fetch_assoc($qsel))
{
	echo "<tr>";
	echo "<td>" . $rsel["idComent"] . "</td>";
	echo "<td>" . $rsel["cNome"] . "</td>";
	echo "<td>" . $rsel["cComentario"] . "</td>";
	?>
	<td> <a onclick="return confirm('DESEJA EXCLUIR?')" href="form.php?excluir=<?php echo $rsel["idComent"] ;?>" >x </a>
	</td>
	
	<td> <a href="form.php?alterar=<?php echo $rsel["idComent"] ;?>" >0</a>
	</td>
	<?php
	
	echo "</tr>";
}
?>


</table>


