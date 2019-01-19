<?php
//BUSCANDO AS CLASSES
require_once 'classes/ClasseCliente.php';
//ESTANCIANDO
$objFunc = new Cliente();
error_reporting(0);
session_start();
if($_SESSION['logado'] == "sim"){

    header("location: /ProjetoClinica/cliente/principal.php");
}elseif ($_SESSION['logadoadm'] == "sim"){
    header("location: /ProjetoClinica/adm/principal.php");
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

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/fontello.css">
        <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css"> 
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="assets/css/price-range.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">  
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
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
                    <a class="navbar-brand" href="principal.php"><img src="assets/img/baner.png" alt=""></a>
                </div>
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        <button class="navbar-btn nav-button wow bounceInRight login" onclick=" window.open('cadastro.php')" data-wow-delay="0.45s">Entrar</button>
                        <button class="navbar-btn nav-button wow fadeInRight" onclick=" window.open('cadastro.php')" data-wow-delay="0.48s">Cadastrar-se</button>
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                        						<li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="agendamento.php">Agendamento de Consultas</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.3s"><a class="" href="campanhas.php">Campanhas</a></li>
                            <ul class="dropdown-menu">
                                <li>                          
                                </li>
                            </ul>
                            <li>
                            </li>
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
        <div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <h2>Produtos</h2>
                        <p>
                    </div>
                </div>

                <div class="row">
                    <div class="proerty-th">
                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="produto1.php" ><img src="assets/img/demo/property-1.jpg"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="produto1.php" >Shampoo Pet Clean Neutro para Cães</a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="proerty-price pull-right">R$ 42,90</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="produto2.php" ><img src="assets/img/demo/property-2.jpg"></a>
                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="produto2.php" >Bebedouro Inteligente, Cor:Azul</a></h5>
                                    <div class="dot-hr"></div>
                              
                                    <span class="proerty-price pull-right">R$ 32,90</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="produto3.php" ><img src="assets/img/demo/property-3.jpg"></a>

                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="produto3.php" >Ração Guabi Biriba Sabor Carne</a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="proerty-price pull-right">R$ 57,50</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="produto4.php" ><img src="assets/img/demo/property-4.jpg"></a>

                                </div>
                                <div class="item-entry overflow">
                                    <h5><a href="produto4.php" >Coleira De Strass Para Cachorros Ou Gatos</a></h5>
                                    <div class="dot-hr"></div>
                                    <span class="proerty-price pull-right">R$ 39,90</span>
                                </div>
                            </div>
                        </div>
                    </div>
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