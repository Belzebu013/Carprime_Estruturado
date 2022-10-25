<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous"></script>
		<style>
			.invalid_user{
				margin-top: 30px;
				text-align: center;
				color: #fff;

			}
		</style>
</head>

<body>
	<div class="container-login-main">
		<div class="area_login">
			<form class="formulario" action="login.php" method="post">
				<div class="mb-3">
					<b><label for="email" class="form-label" style="opacity: 100%; color: black;">Email</label></b>
					<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
						placeholder="@email.com" autofocus name="user">
				</div>
				<div class="mb-3">
					<b><label for="password" class="form-label" style="opacity: 100%; color: black;">Senha</label></b>
					<input type="password" class="form-control" name="senha">
				</div>
				<div>
					<a href="esqueceu_senha" target="_blank">Esqueceu sua senha?</a>
				</div>
				<button type="submit" class="btn btn-primary" id="btn" name="login">Entrar</button>
			
			</form>
			<?php
    include 'conn.php';
    if(isset($_POST['login'])){
        $user = $_POST['user'];
        $senha = $_POST['senha'];
        $login = $conn -> prepare('SELECT * FROM `cadastro` WHERE `user_cad` = ? AND `senha_cad` = md5(?);');
        $login -> bindParam(1, $user);
        $login -> bindParam(2, $senha);
        $login -> execute();
        //verifica se a senha e o usuario existem no banco de dados
        if($login -> rowCount()==0){
            echo "<h2 class='invalid_user'>Login ou senha invalida!</h2>";
        }else{
            //inicia sessao
           session_start();
           $row=$login->fetch();
           $_SESSION['nome']= $row['nome_cad'];
           $_SESSION['login'] = $row['id_cad'];
           
           //redireciona para a tela inicial
           header('location:index.php');
        }

    }

?>
		</div>
	</div>

</body>

</html>
