<?php
include "BancoDados.php";
    
    if ( isset($_POST['submit']) ) 
    {
        echo"foi!";
        $cpf = $_POST['cpf_usuario'];
        $nome = $_POST['nome_usuario'];
        $email = $_POST['email_usuario'];
        $senha = $_POST['senha_usuario'];
        $endereco = $_POST['endereco_usuario'];
        
        $pessoa = new Pessoa();
        $pessoa->cadastrarPessoa($cpf, $nome, $email, $senha, $endereco);
    }
   
   Class Pessoa{

        public static function cadastrarPessoa($cpf, $nome, $email, $senha,$endereco){ //ta funcionando
            try{
                echo"foi";
                
                $conexao = BancoDados::getInstance()->getConnection();

                $stmt = $conexao->prepare("INSERT INTO pessoa(cpf, nome, email, senha, endereco) VALUES(?,?,?,?,?)");

                $stmt->execute([$cpf, $nome, $email, $senha, $endereco]);

                $linhas_alteradas = $stmt->rowCount();

            }catch(Exception $e){
                echo $e->getMessage();
                exit;
            }
            if($linhas_alteradas > 0) {
                return true;
            } else {
                return false;
            }
        }
    }



    


$pessoa= new Pessoa();
//$pessoa->cadastrarPessoa("111","Gabriel","durvalino","gab@gmail.com","1234","2020-09-13");

?>