<?php

	function getConnection(){


	$porta = "mysql:host=localhost;dbname=loja";
	$user = "root";
	$senha = "";
	
	try {
		

	$pdo = new PDO($porta, $user, $senha);
	return $pdo;


	} catch (Exception $e) {
		echo "Erro na conexao: ".$e->getMessage();
	}
	

	

	}
?>