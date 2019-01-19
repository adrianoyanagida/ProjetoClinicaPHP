<?php
//BUSCANDO AS CLASSES
include_once "ClasseConexao.php";
include_once "ClasseFuncoes.php";
include_once "ClasseCliente.php";

//CRIANDO A CLASSE
class Agenda{
    //ATRIBUTOS
    private $con;
    private $objfc;
    private $idAgendamento;
    
    //CONSTRUTOR
    public function __construct(){
        $this->con = new Conexao();
        $this->objfc = new Funcoes();
    }
    
    //METODOS MAGICO
    public function __set($atributo, $valor){
        $this->$atributo = $valor;
    }
    public function __get($atributo){
        return $this->$atributo;
    }
    
    public function querySelectAgenda(){
        try{
            $cst = $this->con->conectar()->prepare("SELECT `idAgendamento`, `dsNome`, `idCliente`, `dsTelefone`, `dsMedico`, `dsTipo`, `dsHora`, `dtData`, `dsObs` FROM `tbAgenda` ORDER BY `dtData`, `dsHora`");
            $cst->execute();
            return $cst->fetchAll();
        }catch(PDOException $e){
            return 'Error: '.$e->getMessage();
        }
    }
    
    public function queryDeleteAgenda($dado){
        try{
            $this->idAgendamento = $this->objfc->base64($dado, 2);
            $cst = $this->con->conectar()->prepare("DELETE FROM `tbAgenda` WHERE `idAgendamento` = :idAge;");
            $cst->bindParam(":idAge", $this->idAgendamento, PDO::PARAM_INT);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'Erro ao deletar';
            }
        }catch(PDOException $e){
            return 'Error: '.$e->getMessage();
        }
    }
    
    //INSERE DADOS
    public function queryA($dados){
        try{
            $this->dsNome = $this->objfc->tratarCaracter($dados['dsNome'], 1);
            $this->idCliente = $this->objfc->tratarCaracter($dados['idCliente'], 1);
            $this->telefone = $this->objfc->tratarCaracter($dados['telefone'], 1);
            $this->medicos = $this->objfc->tratarCaracter($dados['medicos'], 1);
            $this->exames = $this->objfc->tratarCaracter($dados['exames'], 1);
            $this->obs = $this->objfc->tratarCaracter($dados['obs'], 1);
            $this->hora = $this->objfc->tratarCaracter($dados['hora'], 1);
            $this->dia = $this->objfc->tratarCaracter($dados['dia'], 1);
            
            $cst = $this->con->conectar()->prepare("INSERT INTO `tbAgenda` (`dsNome`, `idCliente`, `dsTelefone`, `dsMedico`, `dsTipo`, `dsHora`, `dtData`, `dsObs`) VALUES (:dsNome, :idCliente, :telefone, :medicos, :exames, :hora, :dia, :obs);");
            $cst->bindParam(":dsNome", $this->dsNome, PDO::PARAM_STR);
            $cst->bindParam(":medicos", $this->medicos, PDO::PARAM_STR);
            $cst->bindParam(":idCliente", $this->idCliente, PDO::PARAM_STR);
            $cst->bindParam(":telefone", $this->telefone, PDO::PARAM_STR);
            $cst->bindParam(":exames", $this->exames, PDO::PARAM_STR);
            $cst->bindParam(":hora", $this->hora, PDO::PARAM_STR);
            $cst->bindParam(":dia", $this->dia, PDO::PARAM_STR);
            $cst->bindParam(":obs", $this->obs, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                header("location: /ProjetoClinica/cliente/erro.php");
            }
        }catch(PDOException $e){
            return 'Error: '.$e->getMessage();
        }
    }
}

