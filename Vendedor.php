<?php
include "BancoDados.php";

if( isset($_POST['submit']) )
{
    $cpf_vendedor = $_POST['CPF_VENDEDOR'];
    $cnpj = $_POST['CNPJ_VENDEDOR'];
    $cidade = $_POST['Cidade_Vendedor'];
    $estado = $_POST['Estado_Vendedor'];

    $vendedor = new vendedor();
    $vendedor->cadastrarVendedor($cpf_vendedor,$cnpj, $cidade, $estado);
}else{
    echo"deu erro!";
}

class Vendedor {
    
    public static function cadastrarVendedor($cpf_vendedor,$cnpj, $cidade, $estado) {//ta funcionando

        try {
            echo"foi";
            // Criar uma conexão
            $conexao = BancoDados::getInstance()->getConnection();

            // Criar a SQL para executar                    //"556","123456","São carlos","SP"
            $stmt = $conexao->prepare("INSERT INTO vendedor(cpf_vendedor,cnpj, cidade, estado) VALUES (?,?,?,?)");
                                    //insert into vendedor values("494","696","são carlos","sp");
            // Executar a SQL
            $stmt->execute([$cpf_vendedor, $cnpj, $cidade, $estado]);
            
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
    $vendedor = new Vendedor();
   //$vendedor->cadastrarVendedor('505','949','São Carlos','SP');   
?>