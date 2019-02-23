<?php
//BUSCANDO AS CLASSES
require_once '../classes/ClasseCliente.php';
//ESTANCIANDO
$objFunc = new Cliente();

//VALIDANDO USUARIO, SOMENTE ADMS

session_start();
if($_SESSION["logadoadm"] == "sim"){
    $objFunc->clienteLogado($_SESSION['cli']);
}elseif($_SESSION["logado"] == "sim"){
    header("location: /ProjetoClinica/cliente/acessonegado.php");
}else
    header("location: /ProjetoClinica/loginautorizado.php");

if(isset($_GET['sair']) == "sim"){
    $objFunc->sairCliente();
}
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Clinica Veterinaria</title>
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="../assets/css/normalize.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/fontello.css">
        <link href="../assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="../assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="../assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="../assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="../assets/css/price-range.css">
        <link rel="stylesheet" href="../assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="../assets/css/owl.theme.css">
        <link rel="stylesheet" href="../assets/css/owl.transitions.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/responsive.css">
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->

        <div class="header-connect">
            <div class="container">
                <div class="row">
                   
                
                </div>
            </div>
        </div>        
        <!--End top header -->

        <nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/ProjetoClinica/adm/principal.php"><img src="assets/img/baner.png" alt=""></a>
                </div>
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        <button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.location='?sair=sim';" data-wow-delay="0.45s">Sair</button>

                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                    <li><h4>ADMINISTRADOR</h4></li>
                    	<li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="../adm/modifica.php">Tabela de Agendamentos</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="/ProjetoClinica/cliente/agendamento.php">Agendamento de Consultas</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.3s"><a class="" href="../cliente/campanhas.php">Campanhas</a></li>
                            <ul class="dropdown-menu">
                                <li>                          
                                </li>
                            </ul>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">
                    <div class="item"><img src="assets/img/slide1/slider-image-1.jpg" alt=""></div>
                    <div class="item"><img src="assets/img/slide1/slider-image-2.jpg" alt=""></div>
                    <div class="item"><img src="assets/img/slide1/slider-image-3.jpg" alt=""></div>
                </div>
            </div>
        </div>


        <div class="testimonial-area recent-property" style="background-color: #FCFCFC; padding-bottom: 15px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <h2>Veterinários Responsaveis</h2> 
                    </div>
                </div>
                <div class="row">
                    <div class="row testimonial">
                        <div class="col-md-12">
                            <div id="testimonial-slider">
                                <div class="item">
                                    <div class="client-text">                                
                                        <p>Renato Bezerril</p>
                                        <h4><strong>Especialidade:</strong><i>Ortopedia</i></h4>
                                    </div>
                                    <div class="client-face wow fadeInRight" data-wow-delay=".9s"> 
                                        <img src="assets/img/client-face1.png" alt="">
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-text">                                
                                        <p>Roberta Murtinho</p>
                                        <h4><strong>Especialidade:</strong><i>Cirurgia</i></h4>
                                    </div>
                                    <div class="client-face wow fadeInRight" data-wow-delay=".9s"> 
                                        <img src="assets/img/client-face2.png" alt="">
                                    </div>
                                </div>
								<div class="item">
                                    <div class="client-text">                                
                                        <p>Eduardo Teles</p>
                                        <h4><strong>Especialidade:</strong><i>Clinico geral</i></h4>
                                    </div>
                                    <div class="client-face wow fadeInRight" data-wow-delay=".9s"> 
                                        <img src="assets/img/client-face3.png" alt="">
                                    </div>
                                </div>
								<p>
								<p>                               
                            </div>
                        </div>
                    </div>
					
                </div>
				<p>
            </div>
        </div>
		<p>

        
        <!-- Footer area-->
        <div class="footer-area">
            <div class=" footer">
                <div class="container">
                    <div class="row">

                        <div class="col-md-3 col-sm-6 wow fadeInRight animated">
                            <div class="single-footer">
                                <h4>Sobre nós </h4>
                                <div class="footer-title-line"></div>

                                <img src="assets/img/baner.png" alt="" class="wow pulse" data-wow-delay="1s">
                                <p>Profissionais capacitados.</p>
                                <ul class="footer-adress">
                                    <li><i class="pe-7s-map-marker strong"> </i>Rua dos bichos, 894</li>
                                    <li><i class="pe-7s-mail strong"> </i> clinicaveterinaria@vet.com</li>
                                    <li><i class="pe-7s-call strong"> </i> +55 016 3831-9898</li>
                                </ul>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
		</div>

        <script src="assets/js/modernizr-2.6.2.min.js"></script>

        <script src="assets/js/jquery-1.10.2.min.js"></script> 
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.js"></script>

        <script src="assets/js/easypiechart.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>

        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.js"></script>

        <script src="assets/js/icheck.min.js"></script>
        <script src="assets/js/price-range.js"></script>

        <script src="assets/js/main.js"></script>

    </body>
</html>