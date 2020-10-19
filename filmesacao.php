<?php
include "funcoes.php";
$filmes = selectFilmesPorCat("Ação");
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cabot filmes de ação</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">-->
		<style type="text/css">
			
		</style>
	</head>
	<body clas="bg-primary">
		<div class="container-fluid">
			<div class="row">
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
			</div>
			<h2>filmes de ação</h2>
			<p>
				<?php
				foreach ($filmes as $filme):
					$imagem = "img\\".$filme['capa'];
				?>
					<?php echo $filme['nome'].', '; ?>
					<img src="<?php echo $imagem; ?>" width=200>
				<?php endforeach; ?>
			</p>
		</div>
		
	</body>
</html>