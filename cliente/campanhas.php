<?php
//BUSCANDO AS CLASSES
require_once '../classes/ClasseCliente.php';
//ESTANCIANDO
$objFunc = new Cliente();

//VALIDANDO USUARIO, ADM E CLIENTES
error_reporting(0);
session_start();
if($_SESSION["logado"] == "sim"){
    $objFunc->clienteLogado($_SESSION['cli']);
}elseif($_SESSION["logadoadm"] == "sim"){
    $objFunc->clienteLogado($_SESSION['cli']);
}else
    header("location: /ProjetoClinica/loginautorizado.php");
    
    if(isset($_GET['sair']) == "sim"){
        $objFunc->sairCliente();
}

    
?>
<!DOCTYPE html>
<html class="no-js" lang="pt-br">
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
                        <button class="navbar-btn nav-button wow bounceInRight login" onclick="window.location= '/ProjetoClinica/cliente/principal.php'" data-wow-delay="0.4s">Inicio</button>
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
                        						<li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="agendamento.php">Agendamento de Consultas</a></li>
                            <ul class="dropdown-menu">
                                <li>                          
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Footer area-->
        <div class="footer-area">
            <div class=" footer">
                <div class="container">
                    <div class="row">
                        
                            <div class="single-footer">
                                <h4>Campanhas</h4><p>
								<h6>Ministério Público lança campanha de proteção aos animais<h6>
                                <div class="footer-title-line"></div>

                                <img src="assets/img/baner.png" alt="" class="wow pulse" data-wow-delay="1s">
                                
                                <ul class="footer-adress">
                                    O Ministério Público de Minas Gerais (MPMG), por meio do Grupo Especial de Defesa da Fauna (Gedef), inicia campanha educativa de defesa dos animais. O lançamento será na sexta-feira (31), às 14h, no Salão Vermelho da Procuradoria-Geral de Justiça (avenida Álvares Cabral, 1.690, 1º andar, Santo Agostinho). No lançamento, serão exibidas as peças de áudio e vídeo produzidas para serem veiculadas em todo o estado. Também será apresentada a cartilha a ser distribuída aos infratores durante as audiências dos processos de crimes contra os animais.<p><p>Nesta etapa, a campanha vai abordar dois temas: o tráfico de animais silvestres e os maus-tratos contra animais domésticos. De forma didática, as peças publicitárias mostram as situações em que esses crimes são praticados e as providências a serem tomadas caso o cidadão flagre algum delito. Muitas vezes, o crime é cometido de forma inconsciente, mas isso não elimina a culpa de quem o praticar.<p><p>
									A coordenadora do Gedef, Luciana Imaculada de Paula, diz que “infelizmente, os seres humanos ainda submetem os animais a rotineiros tratamentos abusivos e a maus-tratos”. Para a promotora de Justiça, modificar esse comportamento depende tanto da efetiva aplicação dos mecanismos legais de repressão quanto da promoção de ações educacionais que contribuam para a conscientização a respeito da necessidade de se dar tratamento ético a todas as formas de vida. O Gedef realizou, por exemplo, em 2013 o I Encontro nacional do MP em proteçâo a fauna e planeja, em parceria com a Secretaria Estadual de Educação, um concurso para conscientizar os alunos da rede estadual sobre o tema.<p><p>
									A campanha será veiculada em rádios e TVs de todo o estado, por meio de uma parceria entre o MPMG e a Associação Mineira de Rádio e Televisão (Amirt). A Lei de Proteçâo a Fauna (Lei 5.197/1967) determina que os programas de rádio e televisão devem incluir em sua programação conteúdos sobre proteção aos animais, no limite mínimo de cinco minutos semanais, distribuídos ou não, em diferentes dias. Para tornar efetivo o dispositivo legal, o MPMG expediu Recomendação para que a Amirt oriente seus filiados no cumprimento da norma. Além disso, está fornecendo o material a ser veiculado. <p><p>
									
									</ul>
									        <div class="text-center">
        										<button type="submit" onclick="window.location= '/ProjetoClinica/cliente/principal.php'" class="btn btn-default">Voltar</button>
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