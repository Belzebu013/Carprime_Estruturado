<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<style>
			.invalid_user{
				margin-top: 30px;
				text-align: center;
				color: #fff;

			}


		</style>
</head>

<body>
	<div class="container-login-main tamanho">
		<div class="area_login">
			<form class="formulario" action="login.php" method="post">
				<div class="mb-3">
					<b><label  class="form-label" style="opacity: 100%; color: black;" id="user">Email</label></b>
					<input type="text" class="form-control"
						placeholder="@email.com" autofocus name="user">
				</div>
				<div class="mb-3">
					<b><label class="form-label" style="opacity: 100%; color: black;" id="senha">Senha</label></b>
					<input type="password" class="form-control" name="senha">
				</div>
				<button type="submit" class="btn btn-primary" id="btn" name="logar">Entrar</button>
			
			</form>
			<?php
				include 'conn.php';
				if(isset($_POST['logar'])){
					$user = $_POST['user'];
					$senha = $_POST['senha'];
					$login = $conn -> prepare('SELECT * FROM `cadastro` WHERE `user_cad` = ? AND `senha_cad` = md5(?)');
					$login -> bindValue(1, $user);
					$login -> bindValue(2, $senha);
					$login -> execute();
					//verifica se a senha e o usuario existem no banco de dados
					if($login -> rowCount()==0){
						echo "<h2 class='invalid_user'>Login ou senha invalida!</h2>";
					}else{
						//inicia sessao
					session_start();
					$row=$login->fetch();
					$_SESSION['login'] = $row['id_cad'];
					$_SESSION['nome'] = $row['nome_cad'];
					
					//redireciona para a tela inicial
					header('location:index.php');
					}

				}
			?>
		</div>
	</div>

</body>
<script>
	$(document).ready(()=>{
		$('.area_login').css({'width':'400px', 'position':'fixed','top':'calc(50%-200px)','left':'calc(50%-(height/2))'});
		

	});
</script>

</html>
