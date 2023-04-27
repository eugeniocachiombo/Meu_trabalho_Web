<?php	
	
	session_start();	
?>
<label style='color: green; font-size: 20px'> Onlinne: </label> <label style='color: blue; font-size: 20px'><?php echo $_SESSION['a']; ?>  </label> 
<doctype html>
	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="/Meu trabalho de web - Copia/Página Inicial(CSS)A.css">
		
		<style type="text/css">
				
			#cor_a{	
			color: black;
			font-size: 20px;
			}
			#cor_a:hover{
			background: blue;	
			color: white;
			font-size: 20px;
			}

			#cor_sessao{
				color: blue;
			}

			#letrasProdutos{
				color: white;
				font-weight: bold;
				font-size: 20px;
				background: green;
			}
			#letrasProdutospreço{
				color: white;
				font-weight: bold;
				font-size: 15px;
				background: green;
			}
		</style>
		<title>Loja</title>
	</head>




	<body bgcolor="white">
	<!-- Aqui começa as imagens -->
		<!-- Termina Home -->

		<!-- Loja -->
		<a id="cor_sessao" href="/Meu trabalho de web - Copia/Página Inicial.html"> <h3> Terminar sessão</h3></a>

		



		
		<label>
			<div>
			<h2>Bem-vindo a nossa loja, temos para si:</h2>

		</div>
				<ul type="circle">
				<hr>
				<li><h1>Áudio</h1></li>
				
					<ul  type="none">
						<hr>
						<li>
			<a id="cor_a" href="#Acessórios">
						Acessórios </a></li>
						<li><a id="cor_a" href="">Amplificador de áudio</a></li>
						<li><a id="cor_a" href="">Microfones</a></li>
						<li><a id="cor_a" href="">Mesas de som</a></li>
						<li><a id="cor_a" href="">Fones de ouvido</a></li>
						<li><a id="cor_a" href="">Equalizador</a></li>
						<li><a id="cor_a" href="">Processador</a></li>
					</ul>

				<hr>
				
				<li><h1>Cordas</h1></li>
					<ul  type="none">
						<hr>
						<li><a id="cor_a" href="">Acessórios de cordas</a></li>
						<li><a id="cor_a" href="">Violão</a></li>
						<li><a id="cor_a" href="">Guitarra</a></li>
						<li><a id="cor_a" href="">Contrabaixo</a></li>
					</ul>
				<hr>
				<li><h1>Teclas</h1></li>
					<ul  type="none">
						<hr>
						<li><a id="cor_a" href="">Acessórios de teclas</a></li>
						<li><a id="cor_a" href="">Piano Digital</a></li>
						<li><a id="cor_a" href="">Piano Acústico</a></li>
						<li><a id="cor_a" href="">Controlador</a></li>
						<li><a id="cor_a" href="">Orgão Electrónicos</a></li>
					</ul>
				<hr>
				<li><h1>Baterias e Percussão</h1></li>
					<ul type="none">
						<hr>
						<li><a id="cor_a" href="">Acessórios de Bat/Per</a></li>
						<li><a id="cor_a" href="">Baterias</a></li>
						<li><a id="cor_a" href="">Percussão</a></li>
						<li><a id="cor_a" href="">Pratos</a></li>
						<li><a id="cor_a" href="">Peles</a></li>
					</ul>
				<hr>
				<li><h1>Sopros</h1></li>
						<ul  type="none">
						<hr>
						<li><a id="cor_a" href="">Acessórios de sopros</a></li>
						<li><a id="cor_a" href="">Fláutas</a></li>
						<li><a id="cor_a" href="">Saxofones</a></li>
						<li><a id="cor_a" href="">Trombone</a></li>
						<li><a id="cor_a" href="">Trompete</a></li>
						<li><a id="cor_a" href="">Tuba</a></li>
						<li><a id="cor_a" href="">Clarineta</a></li>
					</ul>
				<hr>
				</ul>

		</label>

		<!-----ESPAÇO PARA ACESSÓRIOS---->
			<nav id="Acessórios"> 

				<label><h2>Acessórios de Áudio</h2></label>
	<nav >
	
	<img border="1" width="30%" src="Audio acessorios/Cabo XLR.jpg">

	<p align="left">
		<strong>Cabo XLR</strong>
		<br>

	Preço <strong>3.000,00</strong> (Kz)
	<br>
	Desconto até <strong>2.500,00</strong> (Kz)


	<form method="POST" action="compra.php">
	

	<input type="hidden" size="9" id="letrasProdutos"  name="nome" value="Cabo XLR">
	<input type="hidden" size="7" id="letrasProdutospreço"  name="preço" value="2500">
	<strong>Quantidade:</strong>
	<input type="text" size="4" name="quant">

	<input type="submit" value="Comprar">
	</form>
	</nav> <hr>
	
	</nav>
<!--------------------------------------------->
<nav >
	
	<img border="1" width="30%" src="Audio acessorios/CABO_ALIMENTACAO.png">

	
	<p align="left"><input size="17" id="letrasProdutos" readonly name="" value="Cabo de alimentação">
		<br>
	
	Preço <strong>5.000,00</strong> (Kz)
	<br>
	Desconto até <input size="7" id="letrasProdutospreço" readonly name="" value="4.970,00">(Kz)
	<!--input type="submit" name="" value="Comprar"-->
	</nav> <hr>
	</nav>
<!--------------------------------------------->
<nav >
	<img border="1" width="30%" src="Audio acessorios/Mesa de piano.jpg">

	
	<p align="left"><input size="14" id="letrasProdutos" readonly name="" value="Mesa de piano">
		<br>
	
	Preço <strong>3.5000,00</strong> (Kz)
	<br>
	Desconto até <input size="8" id="letrasProdutospreço" readonly name="" value="3.4860,00">(Kz)
	<!--input type="submit" name="" value="Comprar"-->
	</nav> <hr>


	

			</nav>
		<!-----FECHAR ESPAÇO PARA ACESSÓRIOS---->

	<div id="sobre">
	<dl>
			<dt><strong>Atendimento</strong></dt>
			<hr>
		
				<a href="/Meu trabalho de web - Copia/Atendimento_cliente.html"><dd>Contacte-nos (+244-932-035-294) ou (lojacachiombo@gmail.com)</dd>
				<dd>Garantia dos produtos</dd>
				<dd>Troca ou devolução</dd>
				<dd>Cancelamento do pedido</dd>
				<dd>Política de privacidade</dd>
				</a>
	</dl>
	</div>

	</body>
	</html>