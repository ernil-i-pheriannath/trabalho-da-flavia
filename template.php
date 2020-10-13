<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Cabot</title>
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<style type="text/css">
			body {
				background-color: #aaaaaa;
				font-family: sans-serif;
				font-size: 18px;
				margin: auto;
			}
			.botao {
	            border-radius: 10px;
	            font-family: sans-serif;
	            background-color: lightgreen;
	            height:30px;
	            width: 100px;
	        }
		</style>
	</head>
	<body>
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
		</div>
	</body>
</html>