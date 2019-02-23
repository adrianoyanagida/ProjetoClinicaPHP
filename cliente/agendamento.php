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
            header('location: /ProjetoClinica/cliente/posagendamento.php');
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

                                    <?php 
                                        $idCliente = $_SESSION["cli"];
                                        $nome = $_SESSION["nome"];
                                        echo "<input type='hidden' value ='$idCliente' name='idCliente'>";
                                    ?>
                                    <label for="nome" >Nome*</label>

                                    <?php
                                    
                                    echo "<input placeholder='Digite o Nome' type='text' class='form-control' id='teste' name='dsNome' value='$nome'>";

                                    ?>
                                </div>
                                <div class="form-group">
                                    <label for="tel">Telefone*</label>
                                    <input placeholder="Digite o Telefone" required="required" type="text" class="form-control" id="telefone" name="telefone">
                                </div>
								
								
								<label class="form-group  " for="medicos">Medicos*</label>
								<select required aria-required="true" class="form-control" name="medicos" id="medicos">
								<option value="">Selecione...</option>
								<option value="Renato Bezerril - Ortopedista">Renato Bezerril - Ortopedista</option>
								<option value="Roberta Murtinho - Cirurgia">Roberta Murtinho - Cirurgia</option>
								<option value="Eduardo Teles - Clinico geral">Eduardo Teles - Clinico geral</option>
								
								</select><br>
								
								<label class="form-group" for="exames">Tipo de Exame*</label>
								<select required aria-required="true" class="form-control" name="exames" id="exames">
								<option value="">Selecione...</option>
								<option value="Ultrassonografia Para Fêmeas">Ultrassonografia Para Fêmeas </option>
								<option value="Exame De Sangue">Exame De Sangue</option>
								<option value="Exames De Fezes e Urina">Exames De Fezes e Urina</option>
								<option value="Exame Retal">Exame Retal</option>
								<option value="Exame Cardiologico">Exame Cardiologico</option>
								<option value="Exame de rotina">Exame de rotina</option>
								<option value="Outros">Outros</option>
								</select><br>
								<div class="form-group">
									<label class="form-group" for="hora">Horários*</label>
									<select required aria-required="true" class="form-control"  name="hora" id="hora">
									<option value="">Selecione...</option>
									<option value="07:00">7:00</option>
									<option value="07:30">7:30</option>
									<option value="08:00">8:00</option>
									<option value="08:30">8:30</option>
									<option value="09:00">9:00</option>
									<option value="09:30">9:30</option>
									<option value="10:00">10:00</option>
									<option value="10:30">10:30</option>
									<option value="11:00">11:00</option>
									<option value="11:30">11:30</option>
									<option value="13:00">13:00</option>
									<option value="13:30">13:30</option>
									<option value="14:00">14:00</option>
									<option value="14:30">14:30</option>
									<option value="15:00">15:00</option>
									<option value="15:30">15:30</option>
									<option value="16:00">16:00</option>
									<option value="16:30">16:30</option>
									<option value="17:00">17:00</option>
									<option value="17:30">17:30</option>
									<option value="18:00">18:00</option>
									<option value="18:30">18:30</option>
                             </select>
                                </div>
							
								<div class="form-group">
                                    <label for="dia">Dia*</label> <h7> &nbsp Atenção! Não fazemos consultas nos sábados, domingos e feriados.</h7>
                                    <input type="date" class="form-control" required="required" id="dia" name="dia">
                                </div>
								
								<div class="form-group">
                                    <label for="obs">Observação</label>
									<textarea placeholder="Observação" name="obs"  class="form-control" id="obs"></textarea>
                                </div>
								
								<h7><b>*Obrigatório.</b></h7> <h7>&nbsp Dúvidas sobre o agendamento? <br> Ligue no nosso número: <b>&nbsp "+55 016 3831-9898"</b></h7>
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