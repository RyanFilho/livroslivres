<?php
// -- Função Para conectar ao banco de dados --
function conectar(){
	try{ 
		$pdo = new PDO("mysql:host=??????;dbname=?????","Usuario","Senha");
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	return $pdo;
}

// -- Função para buscar todos os livros no bd --
function buscarLivros(){
	$pdo = conectar();
	$livros = $pdo->prepare("SELECT * FROM tb_livro");
	$livros->execute();
	return $livros->fetchAll(PDO::FETCH_ASSOC);
}
// -- Função para fazer uma busca especifica no bd --
function buscarEspecifico($keyword){ 
	$pdo = conectar();
	$chato = '%'. $keyword . '%';
	$livros = $pdo->prepare("SELECT * FROM tb_livro WHERE nome_livro LIKE :chato OR autor_livro LIKE :chato	
							OR descricao_livro LIKE :chato OR autor_upload LIKE :chato");
	$livros->bindValue(':chato', $chato, PDO::PARAM_STR);			
	$livros->execute();
	return $livros->fetchAll(PDO::FETCH_ASSOC);
}
