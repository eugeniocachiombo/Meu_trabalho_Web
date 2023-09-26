<doctype html>
	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="Página Inicial(CSS)A.css">
		<link rel="stylesheet" type="text/css" href="Login.css">

		<style type="text/css">
			
			#Botão_Entrar2{
			color: whitesmoke;
			background: green;
			border-color: green;
			}
		</style>
		
		<title>Actualizar</title>
	</head>


	<body bgcolor="gray">
	<div home>
	<!-- Aqui começa as imagens -->
		
		<center><a href="cadastrados.php">
			<img align="left" width= "5%" src="Ícones/Home.png">
		</a>
		</center>
	</div>
		<!-- Termina Home -->


		<?php
		include("../conecta.php");
		$pesquisar = $_POST["id"];

		$conexao = getConnection();
		$query = "select * from cadastro where id = '$pesquisar'";


		$stmt = $conexao->prepare($query);
		$stmt->execute();
		$fetch = $stmt->fetch();

		$recid=$fetch["id"];
		$recnome=$fetch["nome"];
		$recsobrenome=$fetch["sobrenome"];
		$recemail=$fetch["email"];
		$recsenha=$fetch["senha"];
		$rectel=$fetch["telefone"];
		$recsexo=$fetch["sexo"];
		$reccat=$fetch["categoria"];
		?>

		<!-- Actualizar -->
	
		<form method="POST" action="Actualizar.php">
			
			<label><h1>Actualizar dados</h1></label>
			<div id="Dadoscadastro">
			<!--label ><strong>Id:</strong-->
				<input name="id" size="10" placeholder="Id" type="hidden" required value='<?=$recid?>'>


			</label>
			</div>

			<div id="Dadoscadastro">
			<label ><strong>Nome:</strong>
				<br>
				<input name="nome" size="30" placeholder="Digite o seu Nome" type="text"  maxlength="50" required value="<?=$recnome?>"> </label>
			</div>

			<div id="Dadoscadastro">
			<label >
				<strong>Sobrenome:</strong>
				<br>
				<input size="30" placeholder="Digite o seu Sobrenome" type="text" name="sobrenome" maxlength="20" required value="<?=$recsobrenome?>"></label>
			</div>

			<div id="Dadoscadastro">
			<label ><strong>Email:</strong> <br>
				<input size="30" placeholder="Digite o seu email" type="text" name="email" maxlength="35" required value="<?=$recemail?>"></label>
			</div>

			<div id="Dadoscadastro">
			<label><strong>Senha:</strong><br> <input size="30" placeholder="Digite a sua senha" type="password" name="senha" maxlength="8" required value="<?=$recsenha?>"></label>
			</div>

			<div id="Dadoscadastro">
			<label><strong>Telefone:</strong> 
				
				<input size="13" placeholder="Digite o seu número" type="text" name="telefone" maxlength="9" required value="<?=$rectel?>"></label>
				</div>

			<div id="Sexo">
			
			<label><strong>Sexo:</strong></label>
			<select name="sexo" required >
			<?
			if($recsexo== Masculino){?>
			<option> <?=$recsexo?></option>
			<option>Femenino</option>
			<?} else {?>
			<option> <?=$recsexo?></option>
			<option>Masculino</option>
		<?}?>
			
			</select>

			<label><strong>Categoria</strong></label>
			<select name="categoria"  required>

			<?
			if($reccat== Administrador){?>
			<option> <?=$reccat?></option>
			<option>Cliente</option>
			<?} else {?>
			<option> <?=$reccat?></option>
			<option>Administrador</option>
		<?}?>
			</select>
			

			<!--div id="Termos">
			<label><input type="radio" name="termos" required>Aceitar os nossos <strong>Termos</strong> e <strong>Condições</strong></label-->			
			</div>

			<div id="Botão_Entrar">
			<label><input id="Botão_Entrar2" type="submit" value="Actualizar" id="Botão_Entrar_cadastro" name="submit"> 
			</label>

			<label><a href="Pag_admin.php"><input type="button" id="Botão_Entrar2" value="Cancelar"></a></label>	
		</div>
		</form>

		<!-- FIM ACTUALIZAR -->
	
	
	</body>
	</html>