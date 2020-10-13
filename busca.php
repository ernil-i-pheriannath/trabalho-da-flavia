<?php
include 'funcoes.php';

$categorias = selectCatsPorFilme($_GET["pesquisa"]);
$filme = selectFilme($_GET["pesquisa"]);
$sugestoes = selectSugestoes(1);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cabot filmes de ação</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<style type="text/css">
			body {
				background-color: #aaaaaa;
				font-family: sans-serif;
				font-size: 18px;
				margin-left: 10%;
				margin-right: 10%;
			}
			.botao {
	            border-radius: 10px;
	            font-family: sans-serif;
	            background-color: lightgreen;
	            height:30px;
	            width: 100px;
	        }
	        header {
	            background-color: black;
	            height:70px;
	            padding-top: 20px;
        	}
		</style>
	</head>
	<body>
		
		
			<header>
					<a href="filmesacao.php"><input type="button" class="botao" value="Ação"></a>
					<input type="button" class="botao" value="Animação">
					<input type="button" class="botao" value="Comédia">
					<input type="button" class="botao" value="Documentário">
					<input type="button" class="botao" value="Drama">
					<input type="button" class="botao" value="Ficção científica">
					<input type="button" class="botao" value="Romance">
					<input type="button" class="botao" value="Terror">
					<form action="busca.php" method="get">
						<input type="text" name="pesquisa" placeholder="Pesquise um filme">
						<input type="submit" name="submit" value="Pesquisar" autocomplete="on">
					</form>
				</header>
			</nav>
			<h2>Procura por <?php echo $_GET["pesquisa"]; ?></h2>
			<h3><?php echo $filme["nome"];?></h3>
			<img src="img\<?php echo $filme['capa']; ?>" width=200>
			<p>Descrição: <?php echo $filme["descricao"]; ?></p>
			<h4>Categorias:</h4>
			<p>
				<?php foreach ($categorias as $categoria): ?>
					<?php echo $categoria['nome'].', ';; ?>
				<?php endforeach; ?>
			</p>
			<a></a>
			<h3>Sugestões</h3>
			<?php foreach($sugestoes as $filme): ?>
				<p><?php echo $filme["nome"]; ?></p>
				<img src="img\<?php echo $filme["capa"]; ?>" width=200>
				<p>Descrição: <?php echo $filme["descricao"]; ?></p>
			<?php endforeach; ?>	
	</body>
</html>