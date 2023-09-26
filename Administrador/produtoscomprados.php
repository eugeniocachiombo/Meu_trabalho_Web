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
	<?php	

	

	session_start();
	//$_SESSION['a'] = "gp";
	
?>

<label style='color: green; font-size: 20px'> Onlinne: </label> <label style='color: blue; font-size: 20px'><?php echo($_SESSION['a']); ?>  </label> 
<hr>
	<body bgcolor="white">
	
	<a href="Pag_admin.php"> Voltar</a>
	<!-- TABELAS-->

	<table border="1">
		<tr>
		<th>Cod_prod</th>	
		<th>Comprador</th>
		<th>Produto</th>
		<th>Preço</th>
		<th>Quantidade</th>
		<th>Dinheiro</th>
		<th>Actualizar</th>
		<th>Excluir</th>
		
		</tr> 
		<?php
		include("../conecta.php");
		$conexao = getConnection();

		//$select = "select * from cadastro order by id asc;"


		$query = "select * from produtos";


		$stmt = $conexao->prepare($query);
		$stmt->execute();
		$result = $stmt->fetchAll();

		
		foreach ($result as $fetch) {
			?>

		<tr>
		<td><?=$fetch["cod_prod"]?></td>
		<td><?=$fetch["comprador"]?></td>
		<td><?=$fetch["produto"]?></td>
		<td><?=$fetch["preco"]?></td>
		<td><?=$fetch["quant"]?></td>

		<td><?=$fetch["dinheiro"]?></td>
		
		

		<form method="POST" action="../Loja/dinheiro.php">

			<input type="hidden" name="di" value="<?=$fetch["quant"]*$fetch["preco"]?>">



			<input type="hidden" value="<?=$fetch["id"]?>" name="id">
		<td><input type="submit" value="Actualizar"></td></a>




		
		</form>


		<form method="POST" action="Deletar.php">
			<input type="hidden" value="<?=$fetch["id"]?>" name="id">
		<td><input type="submit" value="Excluir"></td>

		</tr> 
		</form>
	




		<?php }?>

		</table>

		<?php
	
		$conexao = getConnection();

		$dinheiro = "select sum(dinheiro) from produtos";

		$stmtdi = $conexao->prepare($dinheiro);
		$stmtdi->execute();
		$result = $stmtdi->fetch();
		
		?>

		<h4>
			<hr>

			Total de dinheiro:
	<?php	echo floatval($result["sum(dinheiro)"]).".00 "."(Kz)"; ?>
	<hr>
		</h4>




	 










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