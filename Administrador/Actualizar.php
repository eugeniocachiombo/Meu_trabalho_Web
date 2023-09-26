<?php
	include("../conecta.php");


	$conexao = getConnection();
	$recid = $_POST["id"];
	$recnome=$_POST["nome"];
	$recsobrenome=$_POST["sobrenome"];
	$recemail=$_POST["email"];
	$recsenha=$_POST["senha"];
	$rectel=$_POST["telefone"];
	$recsexo=$_POST["sexo"];
	$reccat=$_POST["categoria"];
		
		$insert = "Update cadastro 

		Set nome = '$recnome', sobrenome = '$recsobrenome', email = '$recemail', senha = '$recsenha', telefone = '$rectel', sexo = '$recsexo', categoria = '$reccat'
		where id = '$recid' ";
 		
 		
		/*mysql_query($insert, $conexao);

		$exe = mysql_fetch_array($test);
		$novoid = $exe["id"];

		$insert = "select * from cadastro where id = '$pesquisar'";*/


		$stmt = $conexao->prepare($insert);
		$stmt->execute();



		header("location:/Meu trabalho de web - Copia/Administrador/cadastrados.php");
		

		
	


?>