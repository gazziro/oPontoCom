<?php
include "BancoDados.php";

if( isset($_POST['submit']) )
{
    $cpf_comprador = $_POST['CPF_COMPRADOR'];
    $endereco_entrega = $_POST['ENDERECO_ENTREGA'];

    $comprador = new Comprador();
    $comprador->cadastrarComprador($cpf_comprador, $endereco_entrega);

}else{
    echo"deu erro!";
}
class Comprador {
    
    public static function cadastrarComprador($cpf_comprador, $endereco_entrega) { //ta funcionando

         try {                                          
            echo"CADASTRAR FOI!";
            // Criar uma conexão
            $conexao = BancoDados::getInstance()->getConnection();

            // Criar a SQL para executar
            $stmt = $conexao->prepare("INSERT INTO comprador(cpf_comprador, endereco_entrega) VALUES (?,?)");
            
            // Executar a SQL
            $stmt->execute([$cpf_comprador, $endereco_entrega]);
            
            // Checar resultado
            $linhas_alteradas = $stmt->rowCount();

        } catch(Exception $e) {
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
$comprador = new Comprador();
//$comprador->cadastrarComprador("111","durvalino");
//$comprador->compradorComprar("123");
?>