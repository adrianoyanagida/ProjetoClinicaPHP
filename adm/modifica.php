<?php
//BUSCANDO AS CLASSES
require_once '../classes/ClasseAgenda.php';
require_once '../classes/ClasseFuncoes.php';
require_once '../classes/ClasseCliente.php';
$objFcn = new Agenda();
$objFunc = new Cliente();
$objFcs = new Funcoes();

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
    
    if(isset($_GET['acao'])){
        switch($_GET['acao']){
            case 'del':
                if($objFcn->queryDeleteAgenda($_GET['age']) == 'ok'){
                    header('location: /ProjetoClinica/adm/modifica.php');
                }else{
                    echo '<script type="text/javascript">alert("Erro em deletar");</script>';
                }
                break;
        }
    }
    

    
?>
<!DOCTYPE html>
<html class="no-js" lang="pt_br">
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
                        <button class="navbar-btn nav-button wow bounceInRight login" onclick="window.location= '/ProjetoClinica/adm/principal.php'" data-wow-delay="0.4s">Inicio
					</button>
                    </div>
                    <ul class="main-nav nav navbar-nav navbar-right">
					<li class="wow fadeInDown" data-wow-delay="0.2s"><a class="" href="../cliente/agendamento.php">Agendamento de Consultas</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.3s"><a class="" href="../cliente/campanhas.php">Campanhas</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="page-head"> 
        <h4 class="page-title">AGENDAMENTO ORGANIZADO POR DATA / HORARIO</h4>
            <div class="container">
                <div class="row">
                    <div class="page-head-content" >
                        <?php foreach($objFcn->querySelectAgenda() as $rst){ ?>
    <div class="box-for overflow">
    	<div class="nome">
    	
    	<b>DATA DA CONSULTA (ANO-MES-DIA)</b>  "<?=$objFcs->tratarCaracter($rst['dtData'], 2)?>"
    	<b>HORA</b>  "<?=$objFcs->tratarCaracter($rst['dsHora'], 2)?>"
    	<div>
    	
    	<b>NOME DO SOLICITANTE</b>   "<?=$objFcs->tratarCaracter($rst['dsNome'], 2)?>"
    	<b>TELEFONE DO SOLICITANTE</b>   "<?=$objFcs->tratarCaracter($rst['dsTelefone'], 2)?>"

    	<div>
    	
    	<b>ID DO CLIENTE</b>  "<?=$objFcs->tratarCaracter($rst['idCliente'], 2)?>"
    	<b>ID DO AGENDAMENTO</b>  "<?=$objFcs->tratarCaracter($rst['idAgendamento'], 2)?>"

		<div>
    	<b>NOME DO VETERINARIO</b> "<?=$objFcs->tratarCaracter($rst['dsMedico'], 2)?>"
    	<b>TIPO DE EXAME</b> "<?=$objFcs->tratarCaracter($rst['dsTipo'], 2)?>"
    	<div>
    	<b>OBSERVAÇÕES</b> "<?=$objFcs->tratarCaracter($rst['dsObs'], 2)?>"
    	</div>
    	</div>
    	</div>
		</div>
        <div class="excluir"><a href="?acao=del&age=<?=$objFcs->base64($rst['idAgendamento'], 1)?>" title="Excluir dados"><img src="img/ico-editar.png" width="16" height="16" alt="Excluir Agendamento / Agendamento Realizado"></a></div>
        </div>
    </div>
    <?php } ?>
                    
                         
	
           
                    </div>
                </div>
            </div>
        </div>
       
        <div class="text-center">
        	<button type="submit" onclick="window.location= '/ProjetoClinica/cliente/principal.php'" class="btn btn-default">Voltar</button>
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