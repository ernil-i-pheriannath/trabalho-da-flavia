<?php
include "funcoes.php";
$categorias = selectCatsPorFilme($_GET["pesquisa"]);
$filme = selectFilme($_GET["pesquisa"]);
$sugestoes = selectSugestoes($filme["id"]);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Pesquisa por '<?= $_GET["pesquisa"]; ?>'</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css"><?php include "estilo.css"; ?></style>
</head>

<body>
	<nav width="100%">
		<div class="botoes">
			<a href="filmesacao.php"><input type="button" class="item-nav botao-nav" value="Ação"></a>
			<input type="button" class="item-nav botao-nav" value="Animação">
			<input type="button" class="item-nav botao-nav" value="Comédia">
			<input type="button" class="item-nav botao-nav" value="Documentário">
			<input type="button" class="item-nav botao-nav" value="Drama">
			<input type="button" class="item-nav botao-nav" value="Ficção científica">
			<input type="button" class="item-nav botao-nav" value="Romance">
			<input type="button" class="item-nav botao-nav" value="Terror">
		</div>
		<div id="pesquisa">
			<form action="busca-sem-bs.php" method="get">
				<input type="text" name="pesquisa" class="item-nav" placeholder="Pesquise um filme" width="100px">
				<input type="submit" name="submit" class="item-nav botao-nav" value="Pesquisar" autocomplete="on">
			</form>
		</div>
	</nav>
	<!--<div id="myCarousel" class="carousel slide" data-ride="carousel">
			
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			
			<div class="carousel-inner">
				<div class="item active">
					<center><img src="img/foto3.jpg" alt="Chania"></center>
					<div class="carousel-caption">
						<h3>Livros</h3>
						<p>Neste site apresentamos todos os livros no mundo!</p>
					</div>
				</div>

				<div class="item">
					<center><img src="img/foto2.jpg" alt="Chicago"></center>
					<div class="carousel-caption">
						<h3>Filmes</h3>
						<p>Aqui você encontrará muitos filmes divertidos!</p>
					</div>
				</div>

				<div class="item">
					<center><img src="img/foto3.jpg" alt="New York"></center>
					<div class="carousel-caption">
						<h3>Filmes</h3>
						<p>Até filmes de Oscar tem no nosso site!</p>
					</div>
				</div>
			</div>

			
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>-->
	<div class="conteudo">
		<h1>Resultados da pesquisa por '<?= $_GET["pesquisa"]; ?>'</h1>
		<h2>Filme encontrado: <?= $filme["nome"];?></h2>
		<img src="img\<?= $filme['capa']; ?>" width=200>
		<p>Descrição: <?= $filme["descricao"]; ?></p>
		<p>
			<b>Categorias:</b>
				<?php
				$ultimo = array_key_last($categorias);
				foreach ($categorias as $i => $categoria)
				{
					// var_dump($categorias);
					echo $categoria . ($i != $ultimo ? ", " : "");
				}
				?>
		</p>
		<h2>Sugestões</h2>
		<div id="sugestoes">
		<?php foreach ($sugestoes as $filme): ?>
			<div class="sugestao" width="220">
				<h3><?= $filme["nome"]; ?></h3>
				<img src="img\<?= $filme['capa'];  ?>" width=200>
				<p>Descrição: <?= $filme["descricao"]; ?></p>
			</div>
		<?php endforeach; ?>
		</div>
	</div>
</body>
</html>