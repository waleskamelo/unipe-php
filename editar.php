<?php include "cabecalho.php"; ?>

<?php include("conexao.php");?>

<?php
    $id = $_GET['id'];

    $query = "select * from cliente where id = $id";

    $result = mysqli_query($conexao, $query);
    $cliente = mysqli_fetch_assoc($result);
?>

<h1>Edite Cliente</h1>

<form action="atualizar.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $cliente['id']; ?>">
	Nome: <input type="text" name="nome" value="<?php echo $cliente['nome']; ?>"> <br>
	Idade: <input typ="password" name="idade" value="<?php echo $cliente['idade']; ?>"> <br>
    <input type="submit" value="Atualizar">
</form>


<?php include("rodape.php");?>