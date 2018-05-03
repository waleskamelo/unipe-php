<?php include "cabecalho.php"; ?>

<h1>Fale Conosco</h1>
<p>Deixe sua mensagem, e entraremos em contato com você!</p>

<form action="salvar_faleconosco.php" method="post">
	Email: <input type="text" name="email"> <br>
    Mensagem: <textarea name="mensagem"></textarea><br>
    <input type="submit" value="Enviar">
</form>



<?php include("rodape.php");?>