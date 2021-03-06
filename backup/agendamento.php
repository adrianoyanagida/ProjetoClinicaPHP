<?php 
//BUSCANDO AS CLASSES
require_once '../classes/ClasseAgenda.php';
require_once '../classes/ClasseFuncoes.php';
require_once '../classes/ClasseCliente.php';
//ESTANCIANDO
$objFcn = new Agenda();
$objFcs = new Funcoes();
$objFunc = new Cliente();


session_start();
if($_SESSION["logado"] == "sim"){
    $_SESSION["logadoadm"] == "nao";
    $objFunc->clienteLogado($_SESSION['cli']);
}elseif($_SESSION["logadoadm"] == "sim"){
    $_SESSION["logado"] == "nao";
    $objFunc->clienteLogado($_SESSION['cli']);
}else
    header("location: /ProjetoClinica/loginautorizado.php");
    
    if(isset($_GET['sair']) == "sim"){
        $objFunc->sairCliente();
    }
    

if(isset($_POST['btCadastrar'])){
    if($objFcn->queryA($_POST) == 'ok'){
        header('location: /ProjetoClinica/poscadastro.php');
    }else{
        echo '<script type="text/javascript">alert("Erro em cadastrar");</script>';
    }
}


?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Agendamento Consulta</title>
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
                        <button class="navbar-btn nav-button wow bounceInRight login" onclick="window.location= '/ProjetoClinica/cliente/principal.php'" data-wow-delay="0.4s">Inicio
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
                        <h1 class="page-title">Agendar Consulta</h1>               
                    </div>
                </div>
            </div>
        </div>
       
        <div class="register-area" style="background-color: rgb(249, 249, 249);">
            <div class="container">

                
                    <div class="box-for overflow">
                        <div class="col-md-12 col-xs-12 register-blocks">
                            <h2>Novo agendamento : </h2> 
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="nome" >Teste</label>
                                    <input placeholder="Digite o Nome" type="text" class="form-control" id="teste" name="teste" value="<?=$objFcs->tratarCaracter((isset($func['teste']))?($func['teste']):(''), 2)?>">
                                </div>
                                <div class="form-group">
                                    <label for="tel">Telefone</label>
                                    <input placeholder="Digite o Telefone" type="text" class="form-control" id="tel">
                                </div>
								
								
								<label class="form-group  " for="medicos">Medicos</label>
								<select class="form-control" name="medicos" id="medicos">
								<option>Selecione...</option>
								<option value="m1">Renato Bezerril - Ortopedista</option>
								<option value="m2">Roberta Murtinho - Cirurgia</option>
								<option value="m3">Eduardo Teles - Clinico geral</option>
								
								</select>
								
								<label class="form-group  " for="exames">Tipo de Exame</label>
								<select class="form-control" name="exames" id="exames">
								<option >Selecione...</option>
								<option value="e1">Ultrassonografia Para Fêmeas </option>
								<option value="e2">Exame De Sangue</option>
								<option value="e3">Exames De Fezes e Urina</option>
								<option value="e4">Exame Retal</option>
								<option value="e5">Exame Cardiologico</option>
								<option value="e6">Exame de rotina</option>
								</select>
								<div class="form-group">
                                    <label for="hora">Hora</label>
                                    <input type="time" class="form-control" id="hora">
                                </div>
								
								<div class="form-group">
                                    <label for="dia">Dia</label>
                                    <input type="date" class="form-control" id="dia">
                                </div>
								
								<div class="form-group">
                                    <label for="obs">Observação</label>
									<textarea placeholder="Observação" type="text" class="form-control" id="obs"></textarea>
                                </div>
								
								
                                <div class="text-center">
                                    <button type="submit"  name="btCadastrar" class="btn btn-default">Agendar</button>
                                </div>
                            </form>
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