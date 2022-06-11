<!doctype html>
<html lang="pt-BR">
  <head>
  	<title>Agendamento</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style-nav.css">
	<link rel="stylesheet" href="css/style-nav2.css">
	<link rel="stylesheet" type="text/css" href="style.css">

	<?php

		require("../php/conexao.php");
		require("../php/validasessao.php");

		$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

		$strQueryLog = "INSERT INTO LOGACESSO (MAQUINA, DATAHORA, PAGINA) VALUES ('$hostname', SYSDATE(), 'PAGINA DE CRIAR AGENDAMENTOS RECEPCAO');";
		$resultado = mysqli_query($conn, $strQueryLog);

		if($tipouser != 1){
            echo "<script>alert('Você não tem permissão para acessar essa página!'); document.location = \"../index.php\";</script>";
        };

		mysqli_close($conn);

	
		require("php/obtemdadoscli.php");
	?>

	</head>
	<body class="u-body u-overlap u-overlap-contrast u-xl-mode">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
							
								<div class="contact-wrap w-100 p-md-5 p-4">
								<a href="recepcao.php"><button name="voltar" class="botoes btn-fechar btn-vm">Fechar</button></a>
								<a href="../php/logout.php"><button name="voltar" class="botoes btn-fechar btn-vm">Sair</button></a>
									<h3 class="mb-4">Agendamento de consulta:</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				      		</div>
									<form method="POST" id="contactForm" name="agendarform" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Plano Odontologico</label>
													<input type="text" class="form-control" name="plano" id="name" placeholder="Plano Odontologico" required>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Telefone</label>
													<input type="text" class="form-control" name="tel" id="tel" placeholder="Telefone" required>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Doutor</label>
													<input type="text" class="form-control" name="doutor" id="doutor" placeholder="Doutor" required>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Data</label>
													<input type="datetime-local" class="form-control" name="data" id="subject" placeholder="Subject" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Obervação</label>
													<textarea name="obs" class="form-control" id="obs" cols="30" rows="4" placeholder="Message" required></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Agendar!" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
										<?php 
											require("../php/conexao.php");
											require("php/agendarcliente.php");
											mysqli_close($conn);
										?>

									</form>
								</div>
							</div>
							<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-primary w-100 p-md-5 p-4">
									<h3>Agendamento do cliente:</h3>
									<p class="mb-4">Dados do cliente:</p>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Endereço:</span><?php echo $endereco ?></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-phone"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Telefone:</span> (11) 2633-9000</p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-paper-plane"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Email:</span> <?php echo $email ?></p>
					          </div>
				          </div>
				        	<div class="dbox w-100 d-flex align-items-center">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-globe"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><a href="http://dentech.freevar.com/">Página Inicial</a></p>
					          </div>
				          </div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

