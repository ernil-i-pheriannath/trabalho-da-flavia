<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

$bdServidor = '127.0.0.1';
$bdUsuario  = 'root';
$bdSenha    = '';
$bdBanco    = 'cabot_3';

$pdo = new PDO("mysql:host={$bdServidor};dbname={$bdBanco};charset=utf8;", $bdUsuario, $bdSenha);

function selectSugestoes($id)
{
	global $pdo;
	/*
	$stmt = $pdo->prepare("SELECT nome, descricao, capa, categorias FROM filmes WHERE id = ?");
	$stmt->bindValue(1, $id);
	$stmt->execute();
	$filme = $stmt->fetch();
	$filme["categorias"] = explode(",", $filme["categorias"]);
	$stmt = $pdo->prepare("SELECT nome, descricao, capa, categorias FROM filmes WHERE id <> ?");
	$stmt->bindValue(1, $id);
	$stmt->execute();
	$listaFilmes = $stmt->fetchAll();
	$pontuacoes = array();
	foreach ($listaFilmes as $i => $fil)
	{
		$fil["categorias"] = explode(",", $fil["categorias"]);
		$pontos = 0;
		foreach ($fil["categorias"] as $categoria)
		{
			if (in_array($categoria, $filme["categorias"])) ++$pontos;
		}
		$pontuacoes[$i] = $pontos;
	}
	
	/*/
	$stmt = $pdo->prepare("SELECT nome, capa, descricao FROM filmes
	                       WHERE id = 6 OR id = 7 OR id = 8");
	$stmt->execute();
	return $stmt->fetchAll();
	//*/
}

function selectFilmesPorCat($categoria)
{
	global $pdo;
	echo $categoria;
	$str = "%".$categoria."%";
	$stmt = $pdo->prepare("SELECT nome, descicao, capa FROM filmes WHERE categorias like ?");
	$stmt->bindValue(1, $str);
	$stmt->execute();
	$res = $stmt->fetchAll();
	return $res;
}

function selectCatsPorFilme($filme)
{
	global $pdo;
	$str = "%".$filme."%";
	$stmt = $pdo->prepare("SELECT categorias FROM filmes WHERE nome like ?");
	$stmt->bindValue(1, $str);
	$stmt->execute();
	$res = $stmt->fetchAll();
	$ret = array();
	foreach ($res as $filme)
	{
		$ret = explode(",", $filme["categorias"]);
	}
	return $ret;
}

function selectFilme($filme)
{
	global $pdo;
	$str = "%".$filme."%";
	$stmt = $pdo->prepare("SELECT nome, descricao, capa FROM filmes WHERE nome LIKE ? LIMIT 1");
	$stmt->bindValue(1, $str);
	$stmt->execute();
	$res = $stmt->fetch();
	
	return $res;
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