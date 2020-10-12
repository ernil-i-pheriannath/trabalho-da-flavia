<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cabot</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body class="bg-primary">
	<div class="container">
		<div class="row">
			<a href="http://localhost/Cabot/filmesacao/"><input type="button" id="entra-nos-filme-de-acao" class="btn btn-success mt-1 mr-1" value="Ação"></a>
			<input type="button" id="entra-nos-filme-de-animacao" class="btn btn-success mt-1 mr-1" value="Animação">
			<input type="button" id="entra-nos-filme-de-comedia" class="btn btn-success mt-1 mr-1" value="Comédia">
			<input type="button" id="entra-nos-filme-de-documentario" class="btn btn-success mt-1 mr-1" value="Documentário">
			<input type="button" id="entra-nos-filme-de-drama" class="btn btn-success mt-1 mr-1" value="Drama">
			<input type="button" id="entra-nos-filme-de-ficcao-cientifica" class="btn btn-success mt-1 mr-1" value="Ficção científica">
			<input type="button" id="entra-nos-filme-de-romance" class="btn btn-success mt-1 mr-1" value="Romance">
			<input type="button" id="entra-nos-filme-de-terror" class="btn btn-success mt-1 mr-1" value="Terror">
		</div>
	</div>


</body>
<script>
	$(document).ready(function(){

		$('a[href="http://localhost/Cabot/filmesacao/"]').click(function(){
			alert('entrou!'); 
		}); 

	});
</script>
</html>