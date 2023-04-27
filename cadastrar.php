<?php
	include("conecta.php");

	$conexao = getConnection();

	$recnome=$_POST["nome"];
	$recsobrenome=$_POST["sobrenome"];
	$recemail=$_POST["email"];
	$recsenha=$_POST["sa"];
	$rectel=$_POST["tel"];
	$recsexo=$_POST["sexo"];
	$reccat=$_POST["cat"];
	
	

	
	

	if ($recnome == "" || $recsobrenome == "" || $recemail == "" || $recsenha == "" || $rectel == "" || $recsexo == "" || $reccat == "") {
		

		//echo "<script> alert('Existe campo vazio') </script>";

		echo "Não foi redirecionado porque deixou campos vazios";

		?>
		<doctype html>
	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="Página Inicial(CSS)A.css">
		<link rel="stylesheet" type="text/css" href="Login.css">
		
		<title>Cadastro</title>
	</head>


	<body bgcolor="white">
	<div home>
	<!-- Aqui começa as imagens -->
		
		<center><a href="Página Inicial.html">
			<img align="left" width= "5%" src="Ícones/Home.png">
		</a>
		</center>
	</div>
		<!-- Termina Home -->


		<!-- Login -->
	
		<form method="POST" action="cadastrar.php">
			
			<label><h1>Cadastro</h1></label>

			<div id="Dadoscadastro">
			<label ><strong>Nome:</strong>
				<br>
				<input name="nome" size="30" placeholder="Digite o seu Nome" type="text"  maxlength="50"  value="<?=$recnome?>"> </label>
			</div>

			<div id="Dadoscadastro">
			<label >
				<strong>Sobrenome:</strong>
				<br>
				<input value="<?=$recsobrenome?>" size="30" placeholder="Digite o seu Sobrenome" type="text" name="sobrenome" maxlength="20" ></label>
			</div>

			<div id="Dadoscadastro">
			<label ><strong>Email:</strong> <br>
				<input value="<?=$recemail?>" size="30" placeholder="Digite o seu email" type="text" name="email" maxlength="35" ></label>
			</div>

			<div id="Dadoscadastro">
			<label><strong>Senha:</strong><br> <input value="<?=$recsenha?>" size="30" placeholder="Digite a sua senha" type="password" name="sa" maxlength="8" ></label>
			</div>

			<div id="Dadoscadastro">
			<label><strong>Telefone:</strong> 
				
				<input value="<?=$rectel?>" size="13" placeholder="Digite o seu número" type="text" name="tel" maxlength="9" ></label>
				</div>

			<div id="Sexo">
			
			<label><strong>Sexo:</strong></label>
			<select name="sexo" >

			<? if($_POST['sexo'] == "Masculino"){
				?>
			<option><?=$recsexo?></option>
			<option>Femenino</option>
			<?} else if($recsexo == "") {?>
				<option></option>
				<option>Masculino</option>
				<option>Femenino</option>
			<?}


			else {?>

			<option><?=$recsexo?></option>
			<option>Masculino</option>
			<?} ?>
		</div>
			</select>


			<label><strong>Categoria</strong></label>
			<select name="cat" required>

				<? if($reccat == "Administrador"){
				?>
			<option><?=$reccat?></option>
			<option>Cliente</option>
			<?} else if($reccat == "") {?>
				<option></option>
				<option>Administrador</option>
				<option>Cliente</option>
			<?}


			else {?>

			<option><?=$reccat?></option>
			<option>Administrador</option>
			<?} ?>
			</select>
			

			<div id="Termos">
			<label><input type="radio" name="term" required>Aceitar os nossos <strong>Termos</strong> e <strong>Condições</strong></label>			
			</div>

			<div id="Botão_Entrar">
			<label><input type="submit" value="Enviar" id="Botão_Entrar_cadastro" name="submit"> 
			</label>

			<label><a href="Página Inicial.html"><input type="button" id="Botão_Entrar_cadastro" value="Cancelar"></label></a>
			</div>
			
		</div>
		</form>


	
	<div id="sobre">
	<dl>
			<dt><strong>Atendimento</strong></dt>
			<hr>
		
				<a href="Atendimento.html"><dd>Contacte-nos (+244-932-035-294) ou (lojacachiombo@gmail.com)</dd>
				<dd>Garantia dos produtos</dd>
				<dd>Troca ou devolução</dd>
				<dd>Cancelamento do pedido</dd>
				<dd>Política de privacidade</dd>
				</a>
	</dl>
	</div>
	</body>
	</html> <?php

	} else {
		
		if (!empty($_POST['term'])) {
		$sql = "insert into cadastro (nome, sobrenome, email, senha, telefone, sexo, categoria) values ('$recnome', '$recsobrenome', '$recemail', '$recsenha', '$rectel', '$recsexo', '$reccat')";
		$stmt = $conexao->prepare($sql);
		$stmt->execute();


		header("location:Login.html");

		}else
		{
			echo "<script>

			alert('Não aceitou termos e condições');
			</script>";

					?>
		<doctype html>
	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="Página Inicial(CSS)A.css">
		<link rel="stylesheet" type="text/css" href="Login.css">
		
		<title>Cadastro</title>
	</head>


	<body bgcolor="white">
	<div home>
	<!-- Aqui começa as imagens -->
		
		<center><a href="Página Inicial.html">
			<img align="left" width= "5%" src="Ícones/Home.png">
		</a>
		</center>
	</div>
		<!-- Termina Home -->


		<!-- Login -->
	
		<form method="POST" action="cadastrar.php">
			
			<label><h1>Cadastro</h1></label>

			<div id="Dadoscadastro">
			<label ><strong>Nome:</strong>
				<br>
				<input name="nome" size="30" placeholder="Digite o seu Nome" type="text"  maxlength="50"  value="<?=$_POST['nome']?>"> </label>
			</div>

			<div id="Dadoscadastro">
			<label >
				<strong>Sobrenome:</strong>
				<br>
				<input value="<?=$_POST['sobrenome']?>" size="30" placeholder="Digite o seu Sobrenome" type="text" name="sobrenome" maxlength="20" ></label>
			</div>

			<div id="Dadoscadastro">
			<label ><strong>Email:</strong> <br>
				<input value="<?=$_POST['email']?>" size="30" placeholder="Digite o seu email" type="text" name="email" maxlength="35" ></label>
			</div>

			<div id="Dadoscadastro">
			<label><strong>Senha:</strong><br> <input value="<?=$_POST['sa']?>" size="30" placeholder="Digite a sua senha" type="password" name="sa" maxlength="8" ></label>
			</div>

			<div id="Dadoscadastro">
			<label><strong>Telefone:</strong> 
				
				<input value="<?=$_POST['tel']?>" size="13" placeholder="Digite o seu número" type="text" name="tel" maxlength="9" ></label>
				</div>

			<div id="Sexo">
			
			<label><strong>Sexo:</strong></label>
			<select name="sexo" >

			<? if($_POST['sexo'] == "Masculino"){
				?>
			<option><?=$_POST['sexo']?></option>
			<option>Femenino</option>
			<?} else if($_POST['sexo'] == "") {?>
				<option></option>
				<option>Masculino</option>
				<option>Femenino</option>
			<?}


			else {?>

			<option><?=$_POST['sexo']?></option>
			<option>Masculino</option>
			<?} ?>
		</div>
			</select>


			<label><strong>Categoria</strong></label>
			<select name="cat" >

				<? if($_POST['cat'] == "Administrador"){
				?>
			<option><?=$_POST['cat']?></option>
			<option>Cliente</option>
			<?} else if($_POST['cat'] == "") {?>
				<option></option>
				<option>Administrador</option>
				<option>Cliente</option>
			<?}


			else {?>

			<option><?=$_POST['cat']?></option>
			<option>Administrador</option>
			<?} ?>
			</select>
			

			<div id="Termos">
			<label><input type="radio" name="term" >Aceitar os nossos <strong>Termos</strong> e <strong>Condições</strong></label>			
			</div>

			<div id="Botão_Entrar">
			<label><input type="submit" value="Enviar" id="Botão_Entrar_cadastro" name="submit"> 
			</label>

			<label><a href="Página Inicial.html"><input type="button" id="Botão_Entrar_cadastro" value="Cancelar"></label></a>
			</div>
			
		</div>
		</form>


	
	<div id="sobre">
	<dl>
			<dt><strong>Atendimento</strong></dt>
			<hr>
		
				<a href="Atendimento.html"><dd>Contacte-nos (+244-932-035-294) ou (lojacachiombo@gmail.com)</dd>
				<dd>Garantia dos produtos</dd>
				<dd>Troca ou devolução</dd>
				<dd>Cancelamento do pedido</dd>
				<dd>Política de privacidade</dd>
				</a>
	</dl>
	</div>
	</body>
	</html> <?php

		}
	
	}


?>