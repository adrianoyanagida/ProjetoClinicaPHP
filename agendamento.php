<?php
require_once 'classes/ClasseCliente.php';
require_once 'classes/ClasseFuncoes.php';
$objFcn = new Cliente();
$objFcs = new Funcoes();
    
    error_reporting(0);
    session_start();
    if($_SESSION['logado'] == "sim"){
        
        header("location: /ProjetoClinica/cliente/agendamento.php");
    }elseif ($_SESSION['logadoadm'] == "sim"){
        header("location: /ProjetoClinica/cliente/agendamento.php");
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
		<div class="header-connect">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-8  col-xs-12">
                        <div class="header-half header-call">
                          
                        </div>
                    </div>
                    
                </div>
            </div>
        </div> 

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

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        <button class="navbar-btn nav-button wow bounceInRight login" onclick="window.location= '/ProjetoClinica/principal.php'" data-wow-delay="0.4s">Inicio
					</button>
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="wow fadeInDown" data-wow-delay="0.3s"><a class="" href="campanhas.php">Campanhas</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Agendamento de Consultas</h1>               
                    </div>
                </div>
            </div>
        </div>
		
       
        <div class="register-area text-center" style="background-color: rgb(249, 249, 249);">
            <div class="container">
               
                    <div class="box-for overflow text-center">
                        <div class="col-md-12 col-xs-12 register-blocks text-center">
                            <h2>AVISO</h2> 
                            <form action="" method="post">
                                <div class="form-group text-center">
                                    <label for="name">Para acessar esta área é preciso se logar com E-MAIL e SENHA!</label>
                                </div>											
                            </form>      
                        <div class="text-center">
        			    	<button type="submit" onclick="window.location= '/ProjetoClinica/cadastro.php'" class="btn btn-default">Entrar</button>
        				</div>		                 
                    </div>
                </div>
            </div>
			</div>
			 <center> <div class="footer-area">
            <div class=" footer">
                <div class="container">
                    <div class="row">                        
                            <div class="single-footer">
                                <h4>Sobre nós </h4>                 
								
                                <p><img src="assets/img/baner.png" alt="" class="wow pulse" data-wow-delay="1s"></p>
                                <p>Profissionais capacitados.</p>
                                <center><ul class="footer-adress">
                                    <li><i class="pe-7s-map-marker strong"> </i>Rua dos bichos, 894</li>
                                    <li><i class="pe-7s-mail strong"> </i> clinicaveterinaria@vet.com</li>
                                    <li><i class="pe-7s-call strong"> </i> +55 016 3831-9898</li>
                                </ul></center>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
		
		</center>
                  

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