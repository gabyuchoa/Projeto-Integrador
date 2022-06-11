<!DOCTYPE html>
<html style="font-size: 16px;">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta charset="utf-8" />
        <meta name="page_type" content="np-template-header-footer-from-plugin" />

        <title>Dentech - Projeto UNINOVE</title>

        <link rel="stylesheet" href="css/Inicial2.css" media="screen" />
        <link rel="stylesheet" href="css/Inicial.css" media="screen" />

        <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
        <script class="u-script" type="text/javascript" src="js/jsinicial.js" defer=""></script>

        <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" />
        <link
            id="u-page-google-font"
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        />

        <script type="application/ld+json">
            {
                "@context": "http://schema.org",
                "@type": "Organization",
                "name": "",
                "sameAs": []
            }
        </script>
        <meta name="theme-color" content="#478ac9" />
        <meta property="og:type" content="website" />

        <?php
            require("php/conexao.php");

            $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

            $strQueryLog = "INSERT INTO LOGACESSO (MAQUINA, DATAHORA, PAGINA) VALUES ('$hostname', SYSDATE(), 'INDEX');";
            $resultado = mysqli_query($conn, $strQueryLog);

            mysqli_close($conn);

        ?>

    </head>
    <body data-home-page="index.php" data-home-page-title="Página Inicial" class="u-body u-overlap u-overlap-contrast u-xl-mode">
        <header class="u-clearfix u-header u-header" id="sec-d3ba">
            <div class="u-clearfix u-sheet u-sheet-1">
                <a href="login.php" class="u-border-none u-btn u-button-style u-custom-font u-font-raleway u-gradient u-none u-text-body-alt-color u-btn-1">Entrar</a>
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
        <section class="u-align-center u-clearfix u-image u-shading u-section-1" src="" data-image-width="2119" data-image-height="1414" id="sec-fd34">
            <div class="u-clearfix u-sheet u-sheet-1">
                <h1 class="u-align-center u-custom-font u-font-raleway u-text u-title u-text-1">DenTech</h1>
                <p class="u-align-center u-custom-font u-font-raleway u-large-text u-text u-text-variant u-text-2">Atuando na arte de construir sorrisos!</p>
            </div>
        </section>
        <section class="u-align-center u-clearfix u-white u-section-2" id="sec-a505">
            <div class="u-clearfix u-sheet u-sheet-1">
                <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
                    <div class="u-layout">
                        <div class="u-layout-row">
                            <div class="u-container-style u-image u-layout-cell u-left-cell u-size-20 u-image-1" src="" data-image-width="1080" data-image-height="1080">
                                <div class="u-container-layout u-valign-top-sm u-valign-top-xs u-container-layout-1">
                                    <h2 class="u-align-center u-custom-font u-font-raleway u-text u-text-body-alt-color u-text-1">Casos de Em<span style="font-weight: 700;"></span>ergê​​ncia</h2>
                                    <p class="u-align-center u-custom-font u-font-raleway u-text u-text-body-alt-color u-text-2">Pronto Socorro Odontológico e Emergência Dentária</p>
                                    <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-body-alt-color u-text-3">+ (123) 456-789</p>
                                </div>
                            </div>
                            <div class="u-align-left u-container-style u-gradient u-layout-cell u-right-cell u-size-40 u-layout-cell-2">
                                <div class="u-container-layout u-container-layout-2">
                                    <h2 class="u-custom-font u-font-raleway u-text u-text-body-alt-color u-text-4">Agende sua avaliação</h2>
                                    <p class="u-custom-font u-font-raleway u-text u-text-body-alt-color u-text-5">Pela Dentech você agenda sua consulta, verifica os melhores horarios com apenas alguns click's!</p>
                                    <a
                                        href="#"
                                        class="u-active-none u-border-2 u-border-active-palette-4-light-2 u-border-hover-palette-4-light-2 u-border-palette-4-light-2 u-btn u-button-style u-custom-font u-font-raleway u-hover-none u-none u-text-hover-palette-4-light-2 u-text-palette-4-light-2 u-btn-1"
                                    >
                                        Clique aqui para Agendar<span style="font-size: 0.875rem;"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="u-align-center u-clearfix u-white u-section-3" id="sec-4000">
            <div class="u-clearfix u-sheet u-sheet-1">
                <p class="u-custom-font u-font-raleway u-text u-text-default u-text-palette-4-dark-2 u-text-1">TRATAMENTOS</p>
                <h2 class="u-custom-font u-font-raleway u-text u-text-2">Conheça nossos tratamentos</h2>
                <div class="u-expanded-width u-list u-list-1">
                    <div class="u-repeater u-repeater-1">
                        <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                                <span class="u-file-icon u-icon u-text-palette-4-dark-1 u-icon-1"><img src="css/images/5.png" alt="" /></span>
                                <h3 class="u-custom-font u-font-raleway u-text u-text-3">Estética</h3>
                                <p class="u-custom-font u-font-raleway u-text u-text-4">Alinhe e branqueie seus dentes, vai ficar tão lindo quando este site!</p>
                                <a href="" class="u-active-none u-border-2 u-border-palette-4-dark-1 u-btn u-btn-rectangle u-button-style u-custom-font u-font-raleway u-hover-none u-none u-text-body-color u-btn-1">Veja Mais</a>
                            </div>
                        </div>
                        <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                                <span class="u-file-icon u-icon u-text-palette-4-dark-1 u-icon-2"><img src="css/images/6.png" alt="" /></span>
                                <h3 class="u-custom-font u-font-raleway u-text u-text-5">Ortodontia</h3>
                                <p class="u-custom-font u-font-raleway u-text u-text-6">Procedimentos de qualidade: restauração, limpeza e.</p>
                                <a href="" class="u-active-none u-border-2 u-border-palette-4-dark-1 u-btn u-btn-rectangle u-button-style u-custom-font u-font-raleway u-hover-none u-text-body-color u-btn-2">Veja mais</a>
                            </div>
                        </div>
                        <div class="u-align-center u-container-style u-custom-item u-list-item u-repeater-item">
                            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                                <span class="u-file-icon u-icon u-text-palette-4-dark-1 u-icon-3"><img src="css/images/7.png" alt="" /></span>
                                <h3 class="u-custom-font u-font-raleway u-text u-text-7">Clínico Geral</h3>
                                <p class="u-custom-font u-font-raleway u-text u-text-8">Atendemos casos de em geral por preço popular!</p>
                                <a href="" class="u-active-none u-border-2 u-border-palette-4-dark-1 u-btn u-btn-rectangle u-button-style u-custom-font u-font-raleway u-hover-none u-text-body-color u-btn-3">Veja mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="u-align-center u-clearfix u-image u-shading u-section-4" src="" data-image-width="1440" data-image-height="540" id="sec-e320">
            <div class="u-align-center u-clearfix u-sheet u-sheet-1">
                <h2 class="u-custom-font u-font-raleway u-text u-text-default u-text-1">Tecnicas e Tecnologia</h2>
                <p class="u-custom-font u-font-raleway u-text u-text-2">Pela DenTech você agenda suas consulta, verifica os melhores horarios com apenas alguns click's!</p>
                <a href="#" class="u-border-2 u-border-palette-4-light-3 u-btn u-button-style u-custom-font u-font-raleway u-hover-palette-4-dark-2 u-none u-text-hover-white u-text-palette-4-dark-2 u-btn-1">Veja Mais</a>
            </div>
        </section>
        <section class="u-align-center u-clearfix u-white u-section-5" id="carousel_e1d0">
            <div class="u-clearfix u-sheet u-sheet-1">
                <p class="u-custom-font u-font-raleway u-text u-text-palette-4-dark-2 u-text-1">
                    <span style="font-style: normal;">DOUTORES</span>
                </p>
                <h2 class="u-custom-font u-font-raleway u-text u-text-2">Conheça nossos profissionais</h2>
                <div class="u-list u-list-1">
                    <div class="u-repeater u-repeater-1">
                        <div class="u-align-center u-border-1 u-border-palette-4-dark-2 u-container-style u-list-item u-repeater-item u-shape-rectangle u-white u-list-item-1">
                            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-1">
                                <div class="u-image u-image-circle u-image-1"></div>
                                <h3 class="u-custom-font u-font-raleway u-text u-text-3">Antonio</h3>
                                <p class="u-custom-font u-font-raleway u-text u-text-default u-text-palette-4-dark-1 u-text-4">Dev Back-End</p>
                                <p class="u-custom-font u-font-raleway u-text u-text-body-color u-text-5">Atuando na parte back-end, usando PHP e MySQL, além do gerenciamento do projeto.</p>
                                <div class="u-social-icons u-spacing-10 u-social-icons-1">
                                    <a class="u-social-url" target="_blank" href="">
                                        <span class="u-icon u-icon-circle u-social-facebook u-social-icon u-text-palette-4-dark-1 u-icon-1">
                                            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ad72"></use></svg>
                                            <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-ad72" class="u-svg-content">
                                                <path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="u-social-url" target="_blank" href="">
                                        <span class="u-icon u-icon-circle u-social-icon u-social-twitter u-text-palette-4-dark-1 u-icon-2">
                                            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f916"></use></svg>
                                            <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-f916" class="u-svg-content">
                                                <path
                                                    d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="u-social-url" target="_blank" href="">
                                        <span class="u-icon u-icon-circle u-social-icon u-social-instagram u-text-palette-4-dark-1 u-icon-3">
                                            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a0a0"></use></svg>
                                            <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-a0a0" class="u-svg-content">
                                                <path
                                                    d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"
                                                ></path>
                                                <path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path>
                                                <path
                                                    d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="u-social-url" target="_blank" href="#">
                                        <span class="u-icon u-icon-circle u-social-icon u-social-linkedin u-text-palette-4-dark-1 u-icon-4">
                                            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-78e1"></use></svg>
                                            <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-78e1" class="u-svg-content">
                                                <path
                                                    d="M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="u-align-center u-border-1 u-border-palette-4-dark-2 u-container-style u-list-item u-repeater-item u-shape-rectangle u-white">
                            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-2">
                                <div class="u-image u-image-circle u-image-2" data-image-width="626" data-image-height="417"></div>
                                <h3 class="u-custom-font u-font-raleway u-text u-text-6">Gabrielly Uchoa</h3>
                                <p class="u-custom-font u-font-raleway u-text u-text-default u-text-palette-4-dark-1 u-text-7">Dev Front-End</p>
                                <p class="u-custom-font u-font-raleway u-text u-text-body-color u-text-8">Atuando no front-end do projeto e gerenciamento de versionamento. Trabalhou com HTML, CSS, Javascript e a ferramenta GitHub</p>
                                <div class="u-social-icons u-spacing-10 u-social-icons-2">
                                    <a class="u-social-url" target="_blank" href="">
                                        <span
                                            class="u-icon u-icon-circle u-social-facebook u-social-icon u-text-palette-4-dark-1 u-icon-5"
                                            data-animation-name=""
                                            data-animation-duration="0"
                                            data-animation-delay="0"
                                            data-animation-direction=""
                                        >
                                            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ad72"></use></svg>
                                            <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-ad72" class="u-svg-content">
                                                <path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="u-social-url" target="_blank" href="">
                                        <span
                                            class="u-icon u-icon-circle u-social-icon u-social-twitter u-text-palette-4-dark-1 u-icon-6"
                                            data-animation-name=""
                                            data-animation-duration="0"
                                            data-animation-delay="0"
                                            data-animation-direction=""
                                        >
                                            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f916"></use></svg>
                                            <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-f916" class="u-svg-content">
                                                <path
                                                    d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="u-social-url" target="_blank" href="">
                                        <span
                                            class="u-icon u-icon-circle u-social-icon u-social-instagram u-text-palette-4-dark-1 u-icon-7"
                                            data-animation-name=""
                                            data-animation-duration="0"
                                            data-animation-delay="0"
                                            data-animation-direction=""
                                        >
                                            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a0a0"></use></svg>
                                            <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-a0a0" class="u-svg-content">
                                                <path
                                                    d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"
                                                ></path>
                                                <path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path>
                                                <path
                                                    d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="u-social-url" target="_blank" href="#">
                                        <span
                                            class="u-icon u-icon-circle u-social-icon u-social-linkedin u-text-palette-4-dark-1 u-icon-8"
                                            data-animation-name=""
                                            data-animation-duration="0"
                                            data-animation-delay="0"
                                            data-animation-direction=""
                                        >
                                            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-78e1"></use></svg>
                                            <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-78e1" class="u-svg-content">
                                                <path
                                                    d="M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="u-align-center u-border-1 u-border-palette-4-dark-2 u-container-style u-list-item u-repeater-item u-shape-rectangle u-white">
                            <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3">
                                <div class="u-image u-image-circle u-image-3" data-image-width="626" data-image-height="417"></div>
                                <h3 class="u-custom-font u-font-raleway u-text u-text-9">Leticia</h3>
                                <p class="u-custom-font u-font-raleway u-text u-text-default u-text-palette-4-dark-1 u-text-10">Dev Front-End</p>
                                <p class="u-custom-font u-font-raleway u-text u-text-body-color u-text-11">Atuando no front-end do projeto. Trabalhou com HTML, CSS e Javascript</p>
                                <div class="u-social-icons u-spacing-10 u-social-icons-3">
                                    <a class="u-social-url" target="_blank" href="">
                                        <span
                                            class="u-icon u-icon-circle u-social-facebook u-social-icon u-text-palette-4-dark-1 u-icon-9"
                                            data-animation-name=""
                                            data-animation-duration="0"
                                            data-animation-delay="0"
                                            data-animation-direction=""
                                        >
                                            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ad72"></use></svg>
                                            <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-ad72" class="u-svg-content">
                                                <path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="u-social-url" target="_blank" href="">
                                        <span
                                            class="u-icon u-icon-circle u-social-icon u-social-twitter u-text-palette-4-dark-1 u-icon-10"
                                            data-animation-name=""
                                            data-animation-duration="0"
                                            data-animation-delay="0"
                                            data-animation-direction=""
                                        >
                                            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f916"></use></svg>
                                            <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-f916" class="u-svg-content">
                                                <path
                                                    d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="u-social-url" target="_blank" href="">
                                        <span
                                            class="u-icon u-icon-circle u-social-icon u-social-instagram u-text-palette-4-dark-1 u-icon-11"
                                            data-animation-name=""
                                            data-animation-duration="0"
                                            data-animation-delay="0"
                                            data-animation-direction=""
                                        >
                                            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a0a0"></use></svg>
                                            <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-a0a0" class="u-svg-content">
                                                <path
                                                    d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"
                                                ></path>
                                                <path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path>
                                                <path
                                                    d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </a>
                                    <a class="u-social-url" target="_blank" href="#">
                                        <span
                                            class="u-icon u-icon-circle u-social-icon u-social-linkedin u-text-palette-4-dark-1 u-icon-12"
                                            data-animation-name=""
                                            data-animation-duration="0"
                                            data-animation-delay="0"
                                            data-animation-direction=""
                                        >
                                            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-78e1"></use></svg>
                                            <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-78e1" class="u-svg-content">
                                                <path
                                                    d="M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z"
                                                ></path>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="u-align-left u-clearfix u-section-6" id="carousel_dccd">
            <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-xl u-sheet-1">
                <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                    <div class="u-layout">
                        <div class="u-layout-row">
                            <div class="u-align-left u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                                <div class="u-container-layout u-container-layout-1">
                                    <div class="u-palette-4-dark-2 u-shape u-shape-rectangle u-shape-1"></div>
                                    <h2 class="u-custom-font u-font-raleway u-text u-text-1">
                                        Sobre a<br />
                                        DenTech
                                    </h2>
                                    <h6 class="u-custom-font u-font-raleway u-text u-text-2">Uma completa insfraestrutura e equipe para oferecer o melhor tratamento</h6>
                                </div>
                            </div>
                            <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-2">
                                <div class="u-container-layout u-container-layout-2">
                                    <p class="u-custom-font u-font-raleway u-text u-text-grey-40 u-text-3">
                                        Há mais de 30 anos localizada nos Jardins, próxima à Avenida Paulista, a Akaki Odontologia tem completa infraestrutura e equipe para oferecer a você tratamentos em todas as especialidades.
                                        “Trabalhamos de forma integrada com toda equipe para desenvolvermos os melhores tratamentos e resultados aos nossos pacientes” define Dr. Luiz Akaki, diretor clínico da Akaki Odontologia.<br />
                                    </p>
                                    <a
                                        href="https://nicepage.cc"
                                        class="u-active-none u-border-2 u-border-active-palette-4-dark-2 u-border-hover-palette-4-dark-2 u-border-palette-4-dark-1 u-btn u-button-style u-hover-none u-none u-text-hover-palette-4-dark-2 u-text-palette-4-dark-1 u-btn-1"
                                    >
                                        Mais sobre a Dentech
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="u-clearfix u-section-7" id="carousel_9c8e">
            <div class="u-clearfix u-sheet u-valign-middle-xs u-sheet-1">
                <div class="u-clearfix u-gutter-48 u-layout-wrap u-layout-wrap-1">
                    <div class="u-layout">
                        <div class="u-layout-row">
                            <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-31 u-white u-layout-cell-1">
                                <div class="u-container-layout u-valign-top u-container-layout-1">
                                    <h6 class="u-custom-font u-font-raleway u-text u-text-default u-text-palette-4-dark-2 u-text-1">Contate-nos</h6>
                                    <div class="u-expanded-width u-form u-form-1">
                                        <form action="#" method="POST" class="u-clearfix u-form-spacing-13 u-form-vertical u-inner-form" style="padding: 0;" source="email" name="form">
                                            <div class="u-form-group u-form-name">
                                                <label for="name-daf4" class="u-custom-font u-font-raleway u-label">Name</label>
                                                <input
                                                    type="text"
                                                    placeholder="Insira seu Nome"
                                                    id="name-daf4"
                                                    name="Nome"
                                                    class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-4-dark-2 u-input u-input-rectangle u-white u-input-1"
                                                    required=""
                                                />
                                            </div>
                                            <div class="u-form-email u-form-group">
                                                <label for="email-daf4" class="u-custom-font u-font-raleway u-label">Email</label>
                                                <input
                                                    type="email"
                                                    placeholder="Insira email valido"
                                                    id="email-daf4"
                                                    name="email"
                                                    class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-4-dark-2 u-input u-input-rectangle u-white u-input-2"
                                                    required=""
                                                />
                                            </div>
                                            <div class="u-form-group u-form-phone u-form-group-3">
                                                <label for="phone-00e2" class="u-custom-font u-font-raleway u-label">Telefone</label>
                                                <input
                                                    type="tel"
                                                    pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})"
                                                    placeholder="Insira seu telefone (ex: +14155552675)"
                                                    id="phone-00e2"
                                                    name="phone"
                                                    class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-4-dark-2 u-input u-input-rectangle u-white u-input-3"
                                                    required=""
                                                />
                                            </div>
                                            <div class="u-form-group u-form-message">
                                                <label for="message-daf4" class="u-custom-font u-font-raleway u-label">Message</label>
                                                <textarea
                                                    placeholder="Descreva sua solicitação"
                                                    rows="4"
                                                    cols="50"
                                                    id="message-daf4"
                                                    name="Mensagem"
                                                    class="u-border-2 u-border-no-left u-border-no-right u-border-no-top u-border-palette-4-dark-2 u-input u-input-rectangle u-white"
                                                    required=""
                                                ></textarea>
                                            </div>
                                            <div class="u-align-left u-form-group u-form-submit">
                                                <a href="#" class="u-active-palette-2-light-2 u-border-none u-btn u-btn-submit u-button-style u-gradient u-hover-palette-2-light-2 u-none u-text-body-alt-color u-btn-1">Encaminhar</a>
                                                <input type="submit" value="submit" class="u-form-control-hidden" />
                                            </div>
                                            <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
                                            <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
                                            <input type="hidden" value="" name="recaptchaResponse" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="u-align-center u-container-style u-grey-5 u-layout-cell u-shape-rectangle u-size-29 u-layout-cell-2">
                                <div class="u-container-layout u-container-layout-2">
                                    <h6 class="u-align-center u-custom-font u-font-raleway u-text u-text-palette-4-dark-2 u-text-2">Meios de contato</h6>
                                    <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-3">
                                        1 (234) 567-891<br />
                                        1 (234) 987-654<br />
                                        dentech@dentech.com.br
                                    </p>
                                    <h6 class="u-align-center u-custom-font u-font-raleway u-text u-text-palette-4-dark-2 u-text-4">Localização</h6>
                                    <p class="u-align-center u-custom-font u-font-montserrat u-text u-text-5">
                                        121 Rock Sreet, 21 Avenue,<br />
                                        New York, NY 92103-9000
                                    </p>
                                    <h6 class="u-align-center u-custom-font u-font-raleway u-text u-text-palette-4-dark-2 u-text-6">Horario de funcionamento</h6>
                                    <p class="u-custom-font u-font-montserrat u-text u-text-7">
                                        Seg a Sex - 8:00 as 18:00<br />
                                        Sab e Dom - 9:00 as 14:00&nbsp;<br />
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <style class="u-overlap-style">
            .u-overlap:not(.u-sticky-scroll) .u-header {
                background-color: #ffffff !important;
            }
        </style>

        <footer class="u-clearfix u-footer u-grey-80" id="sec-6acb">
            <div class="u-clearfix u-sheet u-sheet-1">
                <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
                    <a class="u-social-url" title="facebook" target="_blank" href="">
                        <span class="u-icon u-social-facebook u-social-icon u-icon-1">
                            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f9ea"></use></svg>
                            <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-f9ea">
                                <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                                <path
                                    fill="#FFFFFF"
                                    d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"
                                ></path>
                            </svg>
                        </span>
                    </a>
                    <a class="u-social-url" title="twitter" target="_blank" href="">
                        <span class="u-icon u-social-icon u-social-twitter u-icon-2">
                            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7f14"></use></svg>
                            <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-7f14">
                                <circle fill="currentColor" class="st0" cx="56.1" cy="56.1" r="55"></circle>
                                <path
                                    fill="#FFFFFF"
                                    d="M83.8,47.3c0,0.6,0,1.2,0,1.7c0,17.7-13.5,38.2-38.2,38.2C38,87.2,31,85,25,81.2c1,0.1,2.1,0.2,3.2,0.2
            c6.3,0,12.1-2.1,16.7-5.7c-5.9-0.1-10.8-4-12.5-9.3c0.8,0.2,1.7,0.2,2.5,0.2c1.2,0,2.4-0.2,3.5-0.5c-6.1-1.2-10.8-6.7-10.8-13.1
            c0-0.1,0-0.1,0-0.2c1.8,1,3.9,1.6,6.1,1.7c-3.6-2.4-6-6.5-6-11.2c0-2.5,0.7-4.8,1.8-6.7c6.6,8.1,16.5,13.5,27.6,14
            c-0.2-1-0.3-2-0.3-3.1c0-7.4,6-13.4,13.4-13.4c3.9,0,7.3,1.6,9.8,4.2c3.1-0.6,5.9-1.7,8.5-3.3c-1,3.1-3.1,5.8-5.9,7.4
            c2.7-0.3,5.3-1,7.7-2.1C88.7,43,86.4,45.4,83.8,47.3z"
                                ></path>
                            </svg>
                        </span>
                    </a>
                    <a class="u-social-url" title="instagram" target="_blank" href="">
                        <span class="u-icon u-social-icon u-social-instagram u-icon-3">
                            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-f49e"></use></svg>
                            <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-f49e">
                                <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                                <path
                                    fill="#FFFFFF"
                                    d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"
                                ></path>
                                <path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path>
                                <path
                                    fill="#FFFFFF"
                                    d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"
                                ></path>
                            </svg>
                        </span>
                    </a>
                    <a class="u-social-url" title="linkedin" target="_blank" href="">
                        <span class="u-icon u-social-icon u-social-linkedin u-icon-4">
                            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-b227"></use></svg>
                            <svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-b227">
                                <circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle>
                                <path
                                    fill="#FFFFFF"
                                    d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"
                                ></path>
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </footer>
    </body>
</html>