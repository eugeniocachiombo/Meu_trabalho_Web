<doctype html>
	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="Página Inicial(CSS)A.css">
		<link rel="stylesheet" type="text/css" href="Login.css">
		
		<title>Login</title>
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
<?php
	include("conecta.php");

	$conexao = getConnection();
	$recemail=$_POST["email"];
	$recsenha=$_POST["sa"];
	//$Entrar=$_POST["entrar"];
	
	$sql = "select * from cadastro where
		 email = '$recemail' and senha = '$recsenha' ";

	$stmt = $conexao->prepare($sql); 
	$stmt->execute();
	
		

	if ($recemail == "" || $recsenha = "") {//CAMPO VAZIO
		?>	<!-- Login -->
		<p style="background: pink">Existe campo vazio </p>
		<form method="POST" action="logar.php">
			
			<label><h1>Login</h1></label>

			<div id="Dadoscadastro">
			<label ><strong>Email:</strong> <input size="40" placeholder="Digite o seu email" type="text" name="email" maxlength="50"  ></label>
			</div>

			<div id="Dadoscadastro">
			<label><strong>Senha:</strong> <input size="40" placeholder="Digite a sua senha" type="password"  name="sa" maxlength="8" ></label>
			</div>

			<div id="Botão_Entrar">
			<label><input type="submit"  id="Botão_Entrar2" value="Entrar" name="entrar" accept="aceitar"></button></label>
			</div> <!--Em css está com os nomes Botão_Entrar & Botão_Entrar2
		

			<!-- Termina O Login -->


			<label><center><strong>Ainda não tem uma conta?</strong></center></label> 

			<div id="Ir_em_cadastro">
			<a href="Cadastro.html"><input type="button" id="Ir_em_cadastro2" value="Cadastrar"></a>
			</div>
		</form> <?php
		
	} else {


		if(	$result = $stmt->fetch() ) { //INICIO FETCH
		
		
			$novoemail= $result["email"];
			$novasenha =  $result["senha"];
			$novacat =  $result["categoria"];
			$novonome =  $result["nome"];
			$novosobrenome =  $result["sobrenome"];
				
	session_start();
	
session_set_save_handler($_SESSION['a'] = $novonome." ".$novosobrenome, $_SESSION['fecharA'], read, write, $_SESSION['fechar'], gc);
	

			if ($novacat == "Administrador") { 
			
			//session_start();
			
			
		
				header("location:Administrador/Pag_admin.php");
			} else{ 
			
			//session_start();
			
		
				header("location:Loja/loja cliente.php");
			}
		
		}

		else{
			?>	<!-- Login -->
		<p style="background: pink">Usuário não encontrado </p>
		<form method="POST" action="logar.php">
			
			<label><h1>Login</h1></label>

			<div id="Dadoscadastro">
			<label ><strong>Email:</strong> <input size="40" placeholder="Digite o seu email" type="text" name="email" maxlength="50"  ></label>
			</div>

			<div id="Dadoscadastro">
			<label><strong>Senha:</strong> <input size="40" placeholder="Digite a sua senha" type="password"  name="sa" maxlength="8" ></label>
			</div>

			<div id="Botão_Entrar">
			<label><input type="submit"  id="Botão_Entrar2" value="Entrar" name="entrar" accept="aceitar"></button></label>
			</div> <!--Em css está com os nomes Botão_Entrar & Botão_Entrar2
		

			<!-- Termina O Login -->


			<label><center><strong>Ainda não tem uma conta?</strong></center></label> 

			<div id="Ir_em_cadastro">
			<a href="Cadastro.html"><input type="button" id="Ir_em_cadastro2" value="Cadastrar"></a>
			</div>
		</form> <?php
		}// FIM FETCH
	}//FIM CAMPO VAZIO

?>
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
	</html>