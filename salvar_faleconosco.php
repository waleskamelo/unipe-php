<?php include("conexao.php");?>

<?php

	$email = $_POST['email'];
	$mensagem = $_POST['mensagem'];

	$query = "insert into contato (email, mensagem) values ('$email', '$mensagem')";

	$result = mysqli_query($conexao, $query);

	mysqli_close($conexao);

	if ($result) {
		echo "Mensagem enviada com sucesso!";
	} else {
		echo "Mensagem nao enviada!";
	}

	echo '<br> <a href="index.php">Voltar</a>';
?>


<?php include("rodape.php");?>