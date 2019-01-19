<?php
//BUSCANDO AS CLASSES
include_once "ClasseConexao.php";
include_once "ClasseFuncoes.php";

//CRIANDO A CLASSE
class Cliente{
    //ATRIBUTOS
    private $con;
    private $objfc;
    private $idCliente;
    private $nome;
    private $email;
    private $senha;
    private $dataCadastro;
    private $idAdministrador;
    
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
    
    //METODOS
    public function querySeleciona($dado){
        try{
            $this->idCliente = $this->objfc->base64($dado, 2);
            $cst = $this->con->conectar()->prepare("SELECT `idCliente`, `nome`, `email`, `data_cadastro`, `idAdministrador` FROM `cliente` WHERE `idCliente` = :idCli;");
            $cst->bindParam(":idCli", $this->idCliente, PDO::PARAM_INT);
            if($cst->execute()){
                return $cst->fetch();
            }
        }catch(PDOException $e){
            return 'Error: '.$e->getMessage();
        }
    }
    
    
    public function querySelect(){
        try{
            $cst = $this->con->conectar()->prepare("SELECT `idCliente`, `nome`, `email`, `data_cadastro` FROM `cliente`");
            $cst->execute();
            return $cst->fetchAll();
        }catch(PDOException $e){
            return 'Error: '.$e->getMessage();
        }
    }
    

    
    
    public function queryInsert($dados){
        try{
            $this->nome = $this->objfc->tratarCaracter($dados['nome'], 1);
            $this->email = $this->objfc->tratarCaracter($dados['email'], 1);
            $this->senha = sha1($dados['senha']);
            $this->dataCadastro = $this->objfc->dataAtual(2);
            $cst = $this->con->conectar()->prepare("INSERT INTO `cliente` (`nome`, `email`, `senha`, `data_cadastro`, `idAdministrador`) VALUES (:nome, :email, :senha, :data, 0);");
            $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
            $cst->bindParam(":email", $this->email, PDO::PARAM_STR);
            $cst->bindParam(":senha", $this->senha, PDO::PARAM_STR);
            $cst->bindParam(":data", $this->dataCadastro, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                header("location: /ProjetoClinica/cadastroerror.php");
            }
        }catch(PDOException $e){
            return 'Error: '.$e->getMessage();
        }
    }
    
    
    public function queryUpdade($dados){
        try{
            $this->idCliente = $this->objfc->base64($dados['cli'], 2);
            $this->nome = $dados['nome'];
            $this->email = $dados['email'];
            $cst = $this->con->conectar()->prepare("UPDATE `cliente` SET `nome` = :nome, `email` = :email WHERE `idCliente` = :idCli;");
            $cst->bindParam(":idCli", $this->idCliente, PDO::PARAM_INT);
            $cst->bindParam(":nome", $this->nome, PDO::PARAM_STR);
            $cst->bindParam(":email", $this->email, PDO::PARAM_STR);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'Error ao alterar';
            }
        }catch(PDOException $e){
            return 'Error: '.$e->getMessage();
        }
    }
    
    
    public function queryDelete($dado){
        try{
            $this->idCliente = $this->objfc->base64($dado, 2);
            $cst = $this->con->conectar()->prepare("DELETE FROM `cliente` WHERE `idCliente` = :idCli;");
            $cst->bindParam(":idCli", $this->idCliente, PDO::PARAM_INT);
            if($cst->execute()){
                return 'ok';
            }else{
                return 'Erro ao deletar';
            }
        }catch(PDOException $e){
            return 'Error: '.$e->getMessage();
        }
    }
    
    
    /*public function verificarAdm($dado){
        try{
            $this->idAdm = $this->objfc->base64($dado, 2);
            $cst = $this->con->conectar()->prepare("SELECT `idAdministrador` FROM `cliente` WHERE `idAdministrador` = :idAdm;");
            $cst->bindParam(":idAdm", $this->idAdministrador, PDO::PARAM_INT);
            if(isset($_GET['idAdm']) == "1"){
                return 1;
            }else{
                return 0;
            }
        }catch(PDOException $e){
            return 'Error: '.$e->getMessage();
        }
    }
*/
    
    
    public function logaCliente($dados){
        $this->email = $dados['email'];
        $this->senha = sha1($dados['senha']);
        $this->idAdministrador = 1;
        try{
            $cst = $this->con->conectar()->prepare("SELECT `idCliente`, `email`, `senha`, `idAdministrador` FROM `cliente` WHERE `email` = :email AND `senha` = :senha AND `idAdministrador` = :idAdm;");
            $cst->bindParam(':email', $this->email, PDO::PARAM_STR);
            $cst->bindParam(':senha', $this->senha, PDO::PARAM_STR);
            $cst->bindParam(':idAdm', $this->idAdministrador, PDO::PARAM_INT);
            $cst->execute();
            if($cst->rowCount() == 0){
                $cst = $this->con->conectar()->prepare("SELECT `idCliente`, `email`, `senha`, `idAdministrador` FROM `cliente` WHERE `email` = :email AND `senha` = :senha;");
                $cst->bindParam(':email', $this->email, PDO::PARAM_STR);
                $cst->bindParam(':senha', $this->senha, PDO::PARAM_STR);
                $cst->execute();
                if($cst->rowCount() == 0){
                    header('location: /ProjetoClinica/loginerror.php');     
                    } else {
                        session_start();
                        $rst = $cst->fetch();
                        $_SESSION['logado'] = "sim";
                        $_SESSION['logadoadm'] = "nao";
                        $_SESSION['cli'] = $rst['idCliente'];
                        header("location: /ProjetoClinica/cliente/principal.php");
                        exit;
                }
            }else
                session_start();
                $rst = $cst->fetch();
                $_SESSION['logadoadm'] = "sim";
                $_SESSION['logado'] = "nao";
                $_SESSION['cli'] = $rst['idCliente'];
                header("location: /ProjetoClinica/adm/principal.php");
            
        }catch(PDOException $e){
            return 'Error: '.$e->getMassage();
        }
    }
    
    
    public function clienteLogado($dado){
        $cst = $this->con->conectar()->prepare("SELECT `idCliente`, `nome`, `email` FROM `cliente` WHERE `idCliente` = :idCli;");
        $cst->bindParam(':idCli', $dado, PDO::PARAM_INT);
        $cst->execute();
        $rst = $cst->fetch();
        $_SESSION['nome'] = $rst['nome'];
    }
    
    
    public function sairCliente(){
        session_destroy();
        header ('location: /ProjetoClinica/desconectado.php');
    }
    
    
}
?>
