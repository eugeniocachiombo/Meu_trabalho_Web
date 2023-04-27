<doctype html>
	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<style>
			
			div {

				color: white;
				background: green;
			}

			#imagens{
				color: black;
				background: white;
				padding: 2px;
				margin: 10px;
			}
			#sobre{
			color: white;
			background: green;
			padding: 2px;
			margin: 3px;
			}

			hr{
				color: green;
			}
			#botões{
				text-align: center;
			}
			#bo{
				width: 50%;
				color: white;
				background: black;
				font-size: 40px;
			}
			#bo:hover{
				width: 50%;
				color: white;
				background: gray;
				font-size: 40px;
			}


		</style>

		<title >Página Administrador</title>
	</head>
<?php	

	

	session_start();
	//$_SESSION['a'] = "gp";
	
?>

<label style='color: green; font-size: 20px'> Onlinne: </label> <label style='color: blue; font-size: 20px'><?php echo($_SESSION['a']); ?>  </label> 
	<body bgcolor="white">
	<p>
	

	</p>
	<hr>
	<p>
	<center> <img width= "5%" src="Ícones/Pesquisar.png">

		<img width= "5%" src="Ícones/menu (Oficial).png">
	</center>

	
	<!-- CONTEÚDOS DO ADMINISTRADOR-->

		<form method="POST" action="Pag_admin.php">
			
			<h1 align="center"> Relatório<h1>

			<nav id="botões">

			<a href="cadastrados.php"><input id="bo" type="button" name="" value="Total de cadastrados"></a>

			
			<a href="produtoscomprados.php"><input id="bo" type="button" name="" value="Produtos comprados"></a>


			<a href="/Meu%20trabalho%20de%20web%20-%20Copia/Página%20Inicial.html"><input id="bo" type="button" name="sessao" value="Terminar sessão"></a>

			</nav> 


		</form>

		<?php

		if (isset($_POST["sessao"])) {
			$_SESSION['fecharA'];
		}


		?>










	<!-- Sobre a Loja  -->

	<div id="sobre">
	<dl>
			<dt><strong>Sobre a loja</strong></dt>
			<hr>
<!-- aqui dentro do DD vamos falar um pouco sobre a loja --><dd>Fundada no ano de 2021 com objectivo de comercializar materiais de músicas como de home stúdio, room stúdio e eventos </dd>
	</dl>
	<!-- Sobre a Loja fim -->
</div>


<div id="sobre">
	<dl>
			<dt><strong>Atendimento</strong></dt>
			<hr>
		
				<dd>Contacte-nos (+244-932-035-294) ou (lojacachiombo@gmail.com)</dd>
				<dd>Garantia dos produtos</dd>
				<dd>Troca ou devolução</dd>
				<dd>Cancelamento do pedido</dd>
				<dd>Política de privacidade</dd>
			
	</dl>
	</div>
	</body>
	</html>