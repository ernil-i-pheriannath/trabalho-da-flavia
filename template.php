<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Cabot</title>
<link rel="stylesheet" type="text/css" href="estilo.css">
<style type="text/css"><?php include "estilo.css"; ?></style>
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