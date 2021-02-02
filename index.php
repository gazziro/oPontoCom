<?php 
include "Produto.php";
?>
<html>
<head>
	<title>Menu</title>
 	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
</head>

<body>
	
<div id="fundo">
		<div class="faixaTopo">
			<h4 class="letraBranca" id="nomeSite">OPonto.com</h4>
			
			<div id="centro">
			<table style="border: 5px solid #555;">
		<thead>
			<tr>
			<th>Id</th>
			<th>nome</th>
			<th>preco</th>
			<th>descricao</th>
			</tr>
		</thead>
		<tbody>
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
				
		</div>
		
		<div class="menu direita">
		<form class="margem" action="./Comprador.php" method="POST">
			<b class="margem nomeMenu" style="margin-left: 1px">Cadastrar Comprador</b>
				<br><br>
				<label for="CPF_COMPRADOR">CPF do Comprador</label><br>
				<input class="inputs" type="text" name="CPF_COMPRADOR"><br>
 
				<label for="ENDERECO_ENTREGA">Endereço</label><br>
				<input class="inputs" type="text" name="ENDERECO_ENTREGA"><br>
				 
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
