<?php 
include "Produto.php";
?>
<html>
<head>
	<title>Minha Loja</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
</head>
<body>
	<div id="fundo">
		<div class="faixaTopo">
			<h4 class="letraBranca" id="nomeSite">OPonto.com</h4>
            <div id="centro">
				<div id="banner">
					<b style="margin-left: 80px"> Super Loja do Xandão</b>
				</div>
                <table style="border: 5px solid #555;" >
		<thead >
			<tr>
			<th>Id</th>
			<th>nome</th>
			<th>preco</th>
			<th>descricao</th>
			</tr>
		</thead>
		<tbody style ='border: 1px solid #000000;'>
			<?php
				$produto = new Produto();
				$resultado = $produto->retornarProduto();
	
				foreach ($resultado as $row) {
					echo '<tr>';
				foreach ($row as $item) {
					echo "<td>{$item}</td>";
				}
					echo '</tr>';
				}
			?>
		</tbody>
	</table>

			</div>
			<p class="letraBranca" style="margin-left: -150px" id="pontos">
            </p>  														   
		</div>
		<div class="menu direita">
			<br>
			<b class="margem nomeMenu" style="margin-left: 50px">Anunciar Produto</b>
				<br>
			<form class="margem" action="./Produto.php" method="POST">
				 
				<label for="IdProduto">Id do Produto</label><br>
				<input class="inputs" type="number" name="idProduto"><br>

				<label for="NomeProduto">Nome do Produto</label><br>
  				<input class="inputs" type="text" name="NomeProduto"><br>
				  
				<label for="PrecoProduto">Preço do Produto</label><br>
  				<input class="inputs" type="number" name="PrecoProduto"><br>
				
				<label for="DescricaoProduto">Descrição do Produto</label>
				<input class="inputs" type="TEXT" name="DescricaoProduto"><br>
                
                <button id="concluir" name="submit" class="letraBranca" type="submit">Anunciar</button>
                <!-- caso não haja um vendedor cadastrado -->
			</form>	
			<form class="margem" action="./Vendedor.php" method="POST">
				<label for="CPF_VENDEDOR">CPF do Vendedor</label><br>
				<input class="inputs" type="text" name="CPF_VENDEDOR"><br>

				<label for="CNPJ">CNPJ do Vendedor</label><br>
  				<input class="inputs" type="text" name="CNPJ_VENDEDOR"><br>
				  
				<label for="Cidade">Cidade do Vendedor</label><br>
				<input class="inputs" type="text" name="Cidade_Vendedor"><br>
				
				<label for="Estado">Estado do Vendedor</label><br>
  				<input class="inputs" type="text" name="Estado_Vendedor"><br>  
				
				<button id="concluir" name="submit" class="letraBranca" type="submit">Cadastrar</button>

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