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
				<li><a href="#">Home</a></li>
				<li><a href="#">Produtos</a></li>
				<li><a href="#">Carrinho</a></li>
				<li><a href="#">Checkout</a></li>
				<li><a href="#">Login</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<section id="home">
			<h2>Bem-vindo ao Supermercado XYZ</h2>
			<p>Aqui você encontra tudo que precisa para sua casa.</p>
		</section>

		<section id="produtos">
			<h2>Nossos produtos</h2>
			<ul>
				<li>
					<h3>Produto 1</h3>
					<p>Descrição do produto 1.</p>
					<img src="produto1.jpg" alt="Produto 1">
					<p>Preço: R$ 10,00</p>
					<button>Adicionar ao carrinho</button>
				</li>
				<li>
					<h3>Produto 2</h3>
					<p>Descrição do produto 2.</p>
					<img src="produto2.jpg" alt="Produto 2">
					<p>Preço: R$ 20,00</p>
					<button>Adicionar ao carrinho</button>
				</li>
				<li>
					<h3>Produto 3</h3>
					<p>Descrição do produto 3.</p>
					<img src="produto3.jpg" alt="Produto 3">
					<p>Preço: R$ 30,00</p>
					<button>Adicionar ao carrinho</button>
				</li>
			</ul>
		</section>

		<section id="carrinho">
			<h2>Seu carrinho de compras</h2>
			<ul>
				<li>
					<h3>Produto 1</h3>
					<p>Quantidade: 2</p>
					<p>Preço unitário: R$ 10,00</p>
					<p>Preço total: R$ 20,00</p>
				</li>
				<li>
					<h3>Produto 2</h3>
					<p>Quantidade: 1</p>
					<p>Preço unitário: R$ 20,00</p>
					<p>Preço total: R$ 20,00</p>
				</li>
			</ul>
			<p>Total: R$ 40,00</p>
			<button>Finalizar compra</button>
		</section>
	</main>

	<footer>
		<p>Supermercado XYZ &copy; 2023</p>
	</footer>

	<div class="login">
		<form>
			<h2>Login Administrativo</h2>
			<label for="username">Nome de usuário:</label>
			<input type="text" id="username" name="username"><br>

			<label for="password">Senha