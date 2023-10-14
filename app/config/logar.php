<script src="../../assets/js/alerta.js"></script>
<?php
$email = $_POST["email"];
$senha = $_POST["senha"];


if($email == "eugeniocachiombo" && $senha == "123"){

}else{ 
	?>
		<body>
			<script>
				Swal.fire("Erro de autenticação", "Verifique seu email e a senha", "error");
				setTimeout(() => {
					window.location = "../views/login";
				}, 2000);
			</script>
		</body>
	<?php
}

?>