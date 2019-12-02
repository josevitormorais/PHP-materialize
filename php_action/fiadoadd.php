<?php

//conexao
session_start();
require_once 'db_connect.php';

if (isset($_POST['btn-fiado'])):

	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$endereco = mysqli_escape_string($connect, $_POST['endereco']);
	$numero = mysqli_escape_string($connect,$_POST['numero']);
	$telefone = mysqli_escape_string($connect,$_POST['telefone']);
	$data = mysqli_escape_string($connect,$_POST['data']);

	$sql = "INSERT INTO fiado (nome, endereco ,numero,telefone,data) VALUES ('$nome', '$endereco','$numero','$telefone','data')";  
	
	if(mysqli_query($connect,$sql)):
			$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao Cadastrar!";
		header('location: ../index.php');
		endif;


endif;