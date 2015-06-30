<?php 
include 'banco.php';

$statement = $pdo->prepare('INSERT INTO tb_usuario (id_usuario, nome_usuario, email_usuario, senha_usuario) VALUES (null, :name, :email, :password)');

if (isset($_POST['nome-user']))   
{   
    $name = filter_var($_POST['nome-user']);  
}
if (isset($_POST['email-user']))   
{   
    $email = filter_var($_POST['email-user']);  
}
if (isset($_POST['senha-user']))   
{   
    $password = filter_var($_POST['senha-user']);  
}

$statement->bindValue(':name', $name, PDO::PARAM_STR);
$statement->bindValue(':email', $email, PDO::PARAM_STR);
$statement->bindValue(':password', $password, PDO::PARAM_STR);

$statement->execute();
