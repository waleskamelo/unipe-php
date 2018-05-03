<?php include("cabecalho.php"); ?>

<?php include("conexao.php");?>

<?php
    $query = "select * from cliente";
    $result = mysqli_query($conexao, $query);
?>
    <h1>Nossos Clientes</h1>

    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Ações</th>
        </tr>
        <?php while ($cliente = mysqli_fetch_assoc($result)): ?>

        <tr>
            <td><?php echo $cliente['id']; ?></td>

            <td><?php echo $cliente['nome']; ?></td>

            <td><?php echo $cliente['idade']; ?></td>

            <td>
                <a href="editar.php?id=<?php echo $cliente['id']; ?>">Editar</a> |
                <a href="excluir.php?id=<?php echo $cliente['id']; ?>">Excluir</a>
            </td>
        </tr>

        <?php
            endwhile;
            mysqli_close($conexao);
        ?>

    </table>


    <?php include("rodape.php");?>