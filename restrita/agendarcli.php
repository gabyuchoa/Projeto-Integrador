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
	
	<?php
		require("../php/validasessao.php");
		require("../php/conexao.php");

		$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

		$strQueryLog = "INSERT INTO LOGACESSO (MAQUINA, DATAHORA, PAGINA) VALUES ('$hostname', SYSDATE(), 'PAGINA DE AGENDAMENTO DO CLIENTE');";
		$resultado = mysqli_query($conn, $strQueryLog);

		if($tipouser != 2){
            echo "<script>alert('Você não tem permissão para acessar essa página!'); document.location = \"../index.php\";</script>";
			$strQueryLog = "INSERT INTO LOGACESSO (MAQUINA, DATAHORA, PAGINA) VALUES ('$hostname', SYSDATE(), 'PAGINA DE AGENDAMENTO DO CLIENTE - ACESSO NEGADO');";
			$resultado = mysqli_query($conn, $strQueryLog);
        };

		mysqli_close($conn);

	?>

	</head>
	<body class="u-body u-overlap u-overlap-contrast u-xl-mode">
		<header class="u-clearfix u-header u-header" id="sec-d3ba">
            <div class="u-clearfix u-sheet u-sheet-1">
                <a href="login.php" class="u-border-none u-btn u-button-style u-custom-font u-font-raleway u-gradient u-none u-text-body-alt-color u-btn-1">Sair/Logoff</a>
                <h1 class="u-custom-font u-font-raleway u-text u-text-body-color u-text-default u-title u-text-1"><span class="u-text-palette-4-base">Den</span>Tech</h1>
                <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
                    <div class="menu-collapse u-custom-font u-font-raleway" style="font-size: 0.875rem; letter-spacing: 0px;">
                        <a
                            class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-file-icon u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base u-file-icon-1"
                            href="#"
                        >
                            <img src="css/images/7420775.png" alt="" />
                        </a>
                    </div>
                    <div class="u-custom-menu u-nav-container">
                        <ul class="u-custom-font u-font-raleway u-nav u-spacing-20 u-unstyled u-nav-1">
                            <li class="u-nav-item">
                                <a
                                    class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-2"
                                    href="index.php"
                                    style="padding: 10px;"
                                >
                                    Página Inicial
                                </a>
                            </li>
                            <li class="u-nav-item">
                                <a class="u-border-active-palette-1-base u-border-hover-palette-1-base u-button-style u-nav-link u-text-active-palette-4-dark-1 u-text-hover-palette-4-dark-2" href="Sobre.html" style="padding: 10px;">
                                    Sobre
                                </a>
                        </ul>
                    </div>
                    <div class="u-custom-menu u-nav-container-collapse">
                        <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
                            <div class="u-inner-container-layout u-sidenav-overflow">
                                <div class="u-menu-close"></div>
                                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php">Página Inicial</a></li>
                                    <li class="u-nav-item"><a class="u-button-style u-nav-link" href="Sobre.html">Sobre</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
                    </div>
                </nav>
            </div>
        </header>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Agende sua consulta com a DenTech</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Agendamento de consulta:</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				      		</div>
									<form method="POST" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Plano Odontologico</label>
													<input type="text" class="form-control" name="name" id="name" placeholder="Name">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email</label>
													<input type="email" class="form-control" name="email" id="email" placeholder="Email">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="subject">Data</label>
													<input type="datetime-local" class="form-control" name="subject" id="subject" placeholder="Subject">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Obervação</label>
													<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Agendar!" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-lg-4 col-md-5 d-flex align-items-stretch">
								<div class="info-wrap bg-primary w-100 p-md-5 p-4">
									<h3>Contato da clinica:</h3>
									<p class="mb-4">Você pode agendar uma consulta nestes canais:</p>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-3">
					            <p><span>Endereço:</span> Av. Professor Luiz Ignácio Anhaia Mello, 1363 - Vila Prudente, São Paulo - SP, 03155-000</p>
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
					            <p><span>Email:</span> agomesquadro@gmail.com</p>
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

