<?php 
include "Nota_Fiscal.php";

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<title>Carrinho</title>
	<link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>

</head>
<body>
    <div id="fundo">
		<div class="faixaTopo">

        <form action="./Produto.php" method="POST">

	
            <h4 class="letraBranca" id="nomeSite">OPonto.com</h4>
            <p class="letraBranca" id="pontos"><img src="https://img.icons8.com/ios/452/shop.png" class="imagensMenu2">
       
            <b style = "top:215px" class="infos_produtos2">Codigo do Produto</b>
            <input style="top:255px" name="Id_Produto_Carrinho" type="number" class="inputs infos_produtos2">
            
            <b style = "top:315px" class="infos_produtos2">Preço do Produto</b>
            <input style="top:345px" name="Preco_Produto" class="inputs infos_produtos2"type="text">
            
            <b style = "top:215px" class="infos_produtos">Nome do Produto</b>
            <input name="Nome_Produto" class="inputs infos_produtos3"type="text">

            <br>
            <b style = "top:315px" class="infos_produtos">Endereço</b>
            <input style ="top:345px"name="Endereco_Produto" class="inputs infos_produtos3"type="text">


            <button type ="submit" name="comprar" style="top:558px" class="btn btn-primary comprar" value="submit">Comprar</button>

    <!--    <button id="concluir" name="submit" class="letraBranca" type="submit">Cadastrar</button> -->


			</b>
        </form>

		
		</div>
		<div class="menu">
			<button class="botãoMenu">
            <a href="http://localhost/img/Site/oPontoComMenu.php"  class="letraBranca">Menu</a>
				<img src="https://www.matoverde.mg.gov.br/wp-content/uploads/sites/2/2017/06/home-icon-png-home-house-icon-24.png" class="imagensMenu">
			</button>
			<button class="botãoMenu">
				<a href="http://localhost/img/Site/oPontoComCarrinho.php" class="letraBranca">Carrinho</a>	
				<img src="http://pngimg.com/uploads/shopping_cart/shopping_cart_PNG38.png" class="imagensMenu">
			</button>
			<button class="botãoMenu">
				<a href="http://localhost/img/Site/oPontoComLoja.php" class="letraBranca">Minha Loja</a>
				<img src="https://img.icons8.com/ios/452/shop.png" class="imagensMenu">
			</button>
			<button class="botãoMenu">
				<a href="http://localhost/img/Site/oPontoComPerfil.php"  class="letraBranca">Perfil</a>
				<img src="https://upload.wikimedia.org/wikipedia/commons/7/70/User_icon_BLACK-01.png" class="imagensMenu">
			</button>
		</div>
    </div> 

</body>
</html>