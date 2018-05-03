<?php include("conexao.php");?>

<?php

	$nome = $_POST['nome'];
	$idade = $_POST['idade'];

	$query = "insert into cliente (nome, idade) values ('$nome', '$idade')";

	$result = mysqli_query($conexao, $query);

	mysqli_close($conexao);

	if ($result) {
		echo "Cliente cadastrado com sucesso!";
	} else {
		echo "Cliente não cadastrado!";
	}

	echo '<br> <a href="cliente.php">Voltar</a>';
?>


<?php include("rodape.php");?>