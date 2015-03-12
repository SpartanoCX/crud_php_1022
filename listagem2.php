<?php
require_once("conexao.php");

$sel ="select * from comentarios";
$qsel = mysqli_query($conexao,$sel) or die(mysqli_error());

//$rsel = mysqli_fetch_assoc($qsel) or die(mysqli_error());


?>
<table align="center" width="70%">
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
</tr>
<?php
while($rsel = mysqli_fetch_assoc($qsel))
{ ?>	
<tr>
	<td>
	<?php echo $rsel["idComent"];?>
	</td>
	<td>
	<?php echo $rsel["cNome"];?>
	</td>
	<td>
	<?php echo $rsel["cComentario"];?>
	</td>
</tr>

<?php }?>


</table>


