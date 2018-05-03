<?php include("conexao.php");?>

<?php
	$id = $_GET['id'];

	$query  = "delete from cliente where id = $id";
	$result = mysqli_query($conexao, $query);

	if ($result) {
		echo "Cliente deletado com sucesso!";
	} else{
		echo "Cliente não deletado!";
	}

	echo '<br> <a href="cliente.php">Voltar</a>';

	mysqli_close($conexao);
?>
