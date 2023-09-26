<?php
	include("conecta.php");

	$recid = $_POST["id"];

	 echo "<script> alert('Excluido'); </script>";  
	
		
		$insert = "delete from cadastro 
		where id = '$recid' ";
 		
 		
		mysql_query($insert, $conexao);

		$exe = mysql_fetch_array($test);
		$novoid = $exe["id"];

		
			header("location:/Meu trabalho de web - Copia/Administrador/cadastrados.php");
	

		
	


?>