<?php
	//conexão com servidor de banco de dados 
    $conexao = mysqli_connect("localhost", "root", "alustau321");
	//Seleciona o base de dados para conexão
	mysqli_select_db($conexao, "unipe_crud");


	function dd($param) {

        echo '<pre>';
        print_r($param);
        echo '</pre>';

        exit;

    }