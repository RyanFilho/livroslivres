<?php 
include 'banco.php';

//Verifica se tem os valores
if (isset($_POST['nome-user']))   
{   
    $name = filter_var($_POST['nome-user']);  
    if (isset($_POST['email-user']))   
	{   
	    $email = filter_var($_POST['email-user']); 
	    if (isset($_POST['senha-user']))   
		{   
		  	$password = filter_var($_POST['senha-user']); 
		} 
	}
}
//cadastra os dados
cadastrarUsuario($nome,$email,$password);