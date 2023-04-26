<!DOCTYPE html>
<html>
<head>
	<title>Supermercado XYZ</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<h1>Supermercado XYZ</h1>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="produtos.php">Produtos</a></li>
				<li><a href="#">Carrinho</a></li>
				<li><a href="#">Checkout</a></li>
				<li><a href="#">Login</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<h2>Produtos em destaque</h2>
		<ul>
			<li>
				<h3>arroz</h3>
				<p>Descrição do produto 1.</p>
				<img src="img/produto1.jpeg" alt="Produto 1">
				<p>Preço: R$ 10,00</p>
				<button>Adicionar ao carrinho</button>
			</li>
			<li>
				<h3>feijão</h3>
				<p>Descrição do produto 2.</p>
				<img src="img/produto2.jpeg" alt="Produto 2">
				<p>Preço: R$ 20,00</p>
				<button>Adicionar ao carrinho</button>
			</li>
			<li>
				<h3>massa de tomate</h3>
				<p>Descrição do produto 3.</p>
				<img src="img/produto3.jpeg" alt="Produto 3">
				<p>Preço: R$ 30,00</p>
				<button>Adicionar ao carrinho</button>
			</li>
		</ul>
	</main>

	<footer>
		<p>Supermercado XYZ &copy; 2023</p>
	</footer>

	<div class="login">
		<form>
			<h2>Login Administrativo</h2>
			<label for="username">Nome de usuário:</label>
			<input type="text" id="username" name="username"><br>

			<label for="password">Senha:</label>
			<input type="password" id="password" name="password"><br>

			<input type="submit" value="Login">
		</form>
	</div>
</body>
</html>