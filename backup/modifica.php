<?php

require_once '../classes/ClasseAgenda.php';
require_once '../classes/ClasseFuncoes.php';
$objFcn = new Agenda();
$objFcs = new Funcoes();
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
<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Formulário de cadastro</title>
	<link href="css/estilo.css" rel="stylesheet" type="text/css" media="all">
</head>
<body>

<div id="lista">
<h1>a</h1>
    <?php foreach($objFcn->querySelectAgenda() as $rst){ ?>
    <div class="cliente">
    	<div class="nome"><?=$objFcs->tratarCaracter($rst['idAgendamento'], 2)?></div>
    	<div class="nome"><?=$objFcs->tratarCaracter($rst['dtData'], 2)?></div>
    	<div class="nome"><?=$objFcs->tratarCaracter($rst['dsHora'], 2)?></div>
    	<div class="nome"><?=$objFcs->tratarCaracter($rst['idCliente'], 2)?></div>
    	<div class="nome"><?=$objFcs->tratarCaracter($rst['dsNome'], 2)?></div>

    	<div class="nome"><?=$objFcs->tratarCaracter($rst['dsMedico'], 2)?></div>
    	<div class="nome"><?=$objFcs->tratarCaracter($rst['dsTipo'], 2)?></div>
    

        <div class="excluir"><a href="?acao=del&age=<?=$objFcs->base64($rst['idAgendamento'], 1)?>" title="Editar dados"><img src="img/ico-editar.png" width="16" height="16" alt="Del"></a></div>
        
    </div>
    <?php } ?>
</div>$idCliente = $_SESSION["cli"];



</body>
</html>