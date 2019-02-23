<?php
//BUSCANDO AS CLASSES
require_once '../classes/ClasseCliente.php';
//ESTANCIANDO
$objFunc = new Cliente();

//VALIDANDO USUARIO, CLIENTES
error_reporting(0);
session_start();
if($_SESSION["logado"] == "sim"){
    $objFunc->clienteLogado($_SESSION['cli']);
}elseif($_SESSION["logadoadm"] == "sim"){
    header("location: /ProjetoClinica/adm/principal.php");
}else
    header("location: /ProjetoClinica/loginautorizado.php");
    
    if(isset($_GET['sair']) == "sim"){
        $objFunc->sairCliente();
    }
    
?>
<!DOCTYPE html>
<html class="no-js"> <!--<![endif]-->
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

                <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                        <button class="navbar-btn nav-button wow bounceInRight login" onclick="window.location= '/ProjetoClinica/cliente/principal.php'" data-wow-delay="0.4s">Inicio
					</button>
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                       <li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="agendamento.php">Agendamento de Consultas</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.3s"><a class="" href="campanhas.php">Campanhas</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">PetShop</h1>               
                    </div>
                </div>
            </div>
        </div>

        <!-- property area -->
        <div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   
                <div class="clearfix padding-top-40" >
                    <div class="col-md-8 single-property-content prp-style-1 ">
                        <div class="section property-video"> 
                                <center><h4 class="">Shampoo Pet Clean Neutro para Cães - 5 Litros</h4></center><p> 
                                <div class="video-thumb">                                   
                                        <center><img src="assets/img/property-1.jpg"></center>            
                                    
                                </div>
                            </div>

                        <div class="single-property-wrapper">
                            <div class="single-property-header">     
							<img src="C:\xampp\htdocs\ProjetoClinica\assets\img\demo\property-1.jpg"/>							
                                <h1 class="property-title pull-left"></h1>
                                
                            </div>
                            </div>
                    </div>
<p>

                    <div class="col-md-4 p0">
                        <aside class="sidebar sidebar-property blog-asside-right">
                            <div class="dealer-widget">
                                <div class="dealer-content">                                    
                                        <div class="clear">
                                            <div class="col-xs-8  ">
                                                <h3 class="">
												<h1 class=""></h1>											                                                   
													<h2 color="#ccc">R$ 45,00<p></h2>
													<span>De R$ 85,00 por R$45,00
													Economia de R$ 40,00</span>        
                                                </h3>
												<button class="navbar-btn nav-button wow  login" onclick="window.location= '/ProjetoClinica/cliente/avisoloja.php'">COMPRAR</button>
											</div>
										</div>
									</div>
								</div>
								<div class="section">
                                <h4 class="s-property-title">Descrição</h4>
                                <div class="s-property-content">
                                    <p> - Pelos limpos e macios.<p>
										- Ph Neutro.<p>
										- Biodegradável.<p>
										- Contem Lavanda em sua fórmula.</div>
                            </div>
                            </div>                            
						</aside>
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
    
        
        
        
        <script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
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
        <script type="text/javascript" src="assets/js/lightslider.min.js"></script>
        <script src="assets/js/main.js"></script>

        <script>
            $(document).ready(function () {

                $('#image-gallery').lightSlider({
                    gallery: true,
                    item: 1,
                    thumbItem: 9,
                    slideMargin: 0,
                    speed: 500,
                    auto: true,
                    loop: true,
                    onSliderLoad: function () {
                        $('#image-gallery').removeClass('cS-hidden');
                    }
                });
            });
        </script>

    </body>
</html>