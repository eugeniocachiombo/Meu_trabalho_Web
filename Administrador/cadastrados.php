<?php	

	

	session_start();
	//$_SESSION['a'] = "gp";
	
?>

<label style='color: green; font-size: 20px'> Onlinne: </label> <label style='color: blue; font-size: 20px'><?php echo($_SESSION['a']); ?>  </label> 
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

			table{
				text-align: center;
				width: 100%;
			}
			th{
				background: green;
			}
			td{
				background: gray;
			}
		</style>

		<title>Cadastrados</title>
	</head>

	<body bgcolor="white">
	<p>
	
	</p>
	<hr>
	<p>
	<center> <img width= "5%" src="Ícones/Pesquisar.png">

		<img width= "5%" src="Ícones/menu (Oficial).png">
	</center>

	<a href="Pag_admin.php"> Voltar</a>
	<!-- TABELAS-->

	<table border="1">
		<tr>
		<th>Id</th>	
		<th>Nome</th>
		<th>Sobrenome</th>
		<th>Email</th>
		<th>Tel</th>
		<th>Sexo</th>
		<th>Categoria</th>
		<th>Actualizar</th>
		<th>Excluir</th>
		</tr> 
		<?php
		include("../conecta.php");

		$conexao = getConnection();
		$dados ="select * from cadastro order by nome asc";

		$stmt = $conexao->prepare($dados);
		$stmt->execute();
		$result =	$stmt->fetchAll();
		
		foreach ($result as $fetch)  {
			?>
		<tr>
		<td><?=$fetch["id"]?></td>
		<td><?=$fetch["nome"]?></td>
		<td><?=$fetch["sobrenome"]?></td>
		<td><?=$fetch["email"]?></td>
		<td><?=$fetch["telefone"]?></td>
		<td><?=$fetch["sexo"]?></td>
		<td><?=$fetch["categoria"]?></td>

		<form method="POST" action="Actualizar 2.php">
			<input type="hidden" value="<?= $fetch["id"]?>" name="id">
		<td><input type="submit" value="Actualizar"></td></a>
		</form>



		<form method="POST" action="Deletar.php">
			<input type="hidden" value="<?=$fetch["id"]?>" name="id">
		<td><input type="submit" value="Excluir"></td>
		</form>


		</tr> 
		<?php  }?>
		

		</table>

		















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