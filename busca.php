<?php
include 'funcoes.php';

$categorias = selectCatsPorFilme($_GET["pesquisa"]);
$filme      = selectFilme($_GET["pesquisa"]);
$sugestoes  = selectSugestoes($filme["id"], 5);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cabot filmes de ação</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<style type="text/css"><?php include "estilo.css"; ?></style>
	</head>

	<body>
		<nav class="navbar navbar-dark bg-dark">
			<a href="filmesacao.php"><input type="button" id="botao" class="btn btn-dark " value="Ação"></a>
			<input type="button" id="botao" class="btn btn-dark" value="Animação">
			<input type="button" id="botao" class="btn btn-dark" value="Comédia">
			<input type="button" id="botao" class="btn btn-dark" value="Documentário">
			<input type="button" id="botao" class="btn btn-dark"  value="Drama">
			<input type="button" id="botao" class="btn btn-dark" value="Ficção científica">
			<input type="button" id="botao" class="btn btn-dark" value="Romance">
			<input type="button" id="botao" class="btn btn-dark" value="Terror">
			<div class="pesquisa">
				<form action="busca.php" method="get">
					<input type="text" name="pesquisa" placeholder="Pesquise um filme">
					<input type="submit" name="submit" class="btn btn-dark" value="Pesquisar" autocomplete="on">
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
			<h2>Procura por <?php echo $_GET["pesquisa"]; ?></h2>
			<h3><?php echo $filme["nome"];?></h3>
			<img src="img\<?php echo $filme['capa']; ?>" width=200>
			<p>Descrição: <?php echo $filme["descricao"]; ?></p>
			<h4>Categorias:</h4>
			<p>
				<?php
				$ultimo = array_key_last($categorias);
				foreach ($categorias as $i => $categoria):
					//var_dump($categorias);
					echo $categoria . ($i != $ultimo ? ", " : "");
				endforeach;
				?>
			</p>
			<a></a>
			<h3>Sugestões</h3>
			<?php
			foreach ($sugestoes as $i => $filme):
				if ($i != 0):
			?>
					<p><b><?php echo $filme["nome"]; ?></b></p>
					<img src="img\<?php echo $filme['capa'];  ?>" width=200>
					<p>Descrição: <?php echo $filme["descricao"]; ?></p>
			<?php
				endif;
			endforeach;
			?>
		</div>
	</body>
</html>