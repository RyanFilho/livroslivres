<?php

function conectar(){
    try{ 
        $pdo = new PDO("mysql:host=mysql.hostinger.com.br;dbname=u562043330_livro","u562043330_jetix","6Fr-1.Sf");
    }catch(PDOException $e){
    	echo $e->getMessage();
    }
    return $pdo;
}

$pdo = conectar();

function buscarLivros($pdo){
	$livros = $pdo->prepare("SELECT * FROM tb_livro");
	$livros->execute();
	return $livros->fetchAll(PDO::FETCH_ASSOC);
}

function buscarEspecifico($pdo,$esp){    
	$livros = $pdo->prepare("SELECT * FROM tb_livro WHERE nome_livro LIKE '%:esp%' ORDER BY nome_livro");
    $livros->bindValue(':esp', $esp, PDO::PARAM_STR);
	$livros->execute();
	return $livros->fetchAll(PDO::FETCH_ASSOC);
}