<?php
	include("../conecta.php");
		$conexao = getConnection();

		$dinheiro = "select sum(dinheiro) from produtos";

		$stmtdi = $conexao->prepare($dinheiro);
		$stmtdi->execute();
		$result = $stmtdi->fetch();
		

		echo floatval($result["sum(dinheiro)"]).".00 "."(Kz)"; 
?>