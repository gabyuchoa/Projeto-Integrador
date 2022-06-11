<!doctype html>
<html lang="pt-BR">
	<head>
		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">

		<title>Login Dentech - Projeto UNINOVE</title>

		<?php
            require("php/conexao.php");

            $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

            $strQueryLog = "INSERT INTO LOGACESSO (MAQUINA, DATAHORA, PAGINA) VALUES ('$hostname', SYSDATE(), 'PAGINA DE LOGIN CARREGADA');";
            $resultado = mysqli_query($conn, $strQueryLog);

            mysqli_close($conn);

        ?>

	</head>
	<body>
	<section class="ftco-section">
		<div class="row justify-content-center">
			<div class="col-md-6 col-lg-5">
				<div class="login-wrap p-4 p-md-5">
		      		<div class="icon d-flex align-items-center justify-content-center">
		      			<span class="fa fa-user-o"></span>
		    		</div>
		      		<h3 class="text-center mb-4">Login - Dentech</h3>
					<form action="" method="post" class="login-form">
						<div class="form-group">
							<input type="text" name="usuario" class="form-control rounded-left" placeholder="Usuário" required>
						</div>
						<div class="form-group d-flex">
							<input type="password" name="senha" class="form-control rounded-left" placeholder="Senha" required>
						</div>
						<div class="form-group">
							<button type="submit" name="login" class="btn btn-primary rounded submit p-3 px-5">Entrar</button>
						</div>
						<div class="form-group">
							<?php
								require("php/sessao.php");
							?>
						</div>

	        		</form>
	        	</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

