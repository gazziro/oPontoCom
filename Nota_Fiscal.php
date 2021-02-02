<?php
    include "BancoDados.php";
    
    class Nota_Fiscal{
        
        public static function emitirNota($codigo_ident_produto, $preco, $data_emissao){ //ta funcionando
            $notinha = array();
            try {
                echo"foi!";
                $conexao = BancoDados::getInstance()->getConnection();

                $stmt = $conexao-> prepare("INSERT INTO Nota_Fiscal (codigo_ident_produto, preco, data_emissao) VALUES (?,?,?)");
                                     
                $stmt->execute([$codigo_ident_produto, $preco, $data_emissao]);

                $notinha=$stmt->fetchAll();
            } catch (exception $e) {
                echo $e->getMessage();
                exit;
            }
            return $notinha;
            
        }
    }

    $nota_Fiscal = new Nota_Fiscal();
   // $nota_Fiscal->emitirNota("321","20","2021-01-15");

?>