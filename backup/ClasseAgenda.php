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
    private $idAgenda;
    private $teste;
    
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
    
    //INSERE DADOS
    public function queryA($dados){
        try{
            $this->idCliente = $_SESSION["cli"];
            $this->teste = $this->objfc->tratarCaracter($dados['teste'], 1);
            $cst = $this->con->conectar()->prepare("INSERT INTO `teste` (`teste`) VALUES (:idCliente);");
            $cst->bindParam(":teste", $this->teste, PDO::PARAM_STR);
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

