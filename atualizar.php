<?php include("rodape.php");?>

<?php include("conexao.php");?>

<?php

$id    = $_POST['id'];
$nome  = $_POST['nome'];
$idade = $_POST['idade'];

$query = "update cliente set nome='$nome', idade='$idade' where id = $id";

$result = mysqli_query($conexao, $query);

mysqli_close($conexao);

if ($result) {
    echo "Cliente atualizado com sucesso!";
} else {
    echo "Cliente não atualizado!";
}

echo '<br> <a href="cliente.php">Voltar</a>';
?>


<?php include("rodape.php");?>
