<?php
include "BancoDados.php";

if( isset($_POST['idProduto']) ) //funcao de cadastrar um produto
{
    $codigo_ident = $_POST['idProduto'];
    $nome = $_POST['NomeProduto'];   
    $preco = $_POST['PrecoProduto'];
    $descricao = $_POST['DescricaoProduto'];

    $Produto = new Produto();
    $Produto->cadastrarProduto($codigo_ident, $nome, $preco, $descricao);
}
if( isset($_POST['Codigo_Produto']) ) //comprar um produto
{
    $codigo_ident = $_POST['Codigo_Produto'];
    $nome = $_POST['Nome_Produto'];
    $preco = $_POST['Preco_Produto'];


    $comprador = new Comprador();
    $comprador->compradorComprador($codigo_ident, $nome, $preco);
}
class Produto {
    
    public static function retornarProduto(){ //ta funcionando 
        $resultado = array();
        try{
            $conexao = BancoDados::getInstance()->getConnection();

            $stmt = $conexao-> prepare("SELECT codigo_ident, nome, preco, descricao, data_anuncio FROM produto");

            $stmt->execute();

            $resultado=$stmt->fetchAll();
            
        }catch(exception $e){
            echo $e-> getMessage();
            exit;
        }
    
        return $resultado;
    }

    public static function editarProduto($nome_produto,$cod_produto,$preco_produto){ //ta funcionando     
        try{
            echo"alo";
            $conexao = BancoDados::getInstance()->getConnection();

            $stmt = $conexao-> prepare("UPDATE produto set nome = ?, preco = ? WHERE codigo_ident =?");
            $stmt->execute([$nome_produto,$preco_produto,$cod_produto]);
            
        }catch(exception $e){
            echo $e-> getMessage();
            exit;
        }
    }

    
    public static function cadastrarProduto($codigo_ident, $nome, $preco, $descricao) { //ta funcionando
        try {
            
            $conexao = BancoDados::getInstance()->getConnection();
            // Criar a SQL para executar
            $stmt = $conexao->prepare("INSERT INTO produto(codigo_ident, nome, preco, descricao) VALUES (?, ?, ?, ?)");
            
            // Executar a SQL
            $stmt->execute([$codigo_ident, $nome, $preco, $descricao]);
        
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
    public static function compradorComprar($codigo_ident) { //ta funcionando
        try {
            echo "caminhao tombou";
            $conexao = BancoDados::getInstance()->getConnection();

            // Criar a SQL para executar
            $stmt = $conexao->prepare("DELETE FROM produto WHERE codigo_ident = ?");
            // Executar a SQL
            $stmt->execute([$codigo_ident]);
            
            // Checar resultado
            $linhas_alteradas = $stmt->rowCount();
        } catch (Exception $e) {
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
$produto = new Produto();
//$produto->

if (isset($_POST['Id_Produto_Carrinho'])) {
    $produto->compradorComprar($_POST['Id_Produto_Carrinho']);
}

//print_r($_POST);
//$produto->editarProduto("Computador","420.69","123");
//$produto->retornarProduto();
//$vendedor->cadastrarProduto('1','rádio','25.99','funciona a pilha','2021-01-16');


?>