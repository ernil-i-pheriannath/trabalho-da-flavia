<?php
session_start();

$bdServidor = '127.0.0.1';
$bdUsuario  = 'root';
$bdSenha    = '';
$bdBanco    = 'cabot';

$pdo = new PDO("mysql:host={$bdServidor};dbname={$bdBanco};charset=utf8;",
	           $bdUsuario, $bdSenha);
function selectFilmesPorCat($categoria)
{
	global $pdo;
	$stmt = $pdo->prepare("SELECT f.nome, f.capa from filmes as f natural join filme_cat as fc where fc.id_cat = ?");
	$stmt->bindValue(1, $categoria);
	$stmt->execute();
	$res = $stmt->fetchAll();
	return $res;
}

function selectCatsPorFilme($filme)
{
	global $pdo;
	$str = "%".$filme."%";
	$stmt = $pdo->prepare("SELECT c.nome from categorias as c natural join filme_cat as fc
                          where fc.id_filme = (select f.id_filme from filmes as f where f.nome like ? limit 1);");
	$stmt->bindValue(1, $str);
	$stmt->execute();
	$res = $stmt->fetchAll();
	return $res;
}

function selectFilme($filme)
{
	global $pdo;
	$str = "%".$filme."%";
	$stmt = $pdo->prepare("SELECT nome, descricao, capa from filmes where nome like ? limit 1");
	$stmt->bindValue(1, $str);
	$stmt->execute();
	$res = $stmt->fetch();
	return $res;
}

/*function normalizar($filmes)
{
	$filmesNormal = array();
	foreach ($filmes as $filme) {
		if (in_array($filme["id_filme"]),)
		{
			
		}
	}
}
*/
function selectSugestoes($id)
{
	global $pdo;
	/*
	$stmt = $pdo->prepare("SELECT f.id_filme, nome, id_cat FROM filmes AS f NATURAL JOIN filme_cat
	                      WHERE f.id_filme <> ?");
	$stmt->bindValue(1, $id);
	$stmt->execute();
	$res = $stmt->fetchAll();
	$filmes = normalizar($res);
	/*/
	$stmt = $pdo->prepare("SELECT nome, capa, descricao FROM filmes WHERE id_filme = 10 OR id_filme = 12 OR id_filme = 13");
	$stmt->execute();
	return $stmt->fetchAll();
	//*/
}

function selectFilmePorId($id)
{
	global $pdo;
	$stmt = $pdo->prepare("SELECT nome, descricao, capa FROM filmes WHERE id_filme = ?");
	$stmt->bindValue(1, $id);
	$stmt->execute();
	$res = $stmt->fetch();
	return $res;
}
?>