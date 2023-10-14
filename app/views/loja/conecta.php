<?php

	$porta = "localhost";
	$user = "root";
	$senha = "";
	$bd = "loja";

	$conexao = mysql_connect($porta, $user, $senha);
	

	mysql_select_db($bd, $conexao);
?>