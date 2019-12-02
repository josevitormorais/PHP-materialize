<?php

//conexao
require_once 'db_connect.php';
session_start();

if(isset($_POST['btn-cadastrar'])):

	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$endereco = mysqli_escape_string($connect, $_POST['endereco']);
	$numero = mysqli_escape_string($connect,$_POST['numero']);
	$bairro = mysqli_escape_string($connect,$_POST['bairro']);
	$telefone = mysqli_escape_string($connect,$_POST['telefone']);
	$data = mysqli_escape_string($connect,$_POST['data']);

	$sql = "INSERT INTO clientes (nome, endereco ,numero ,bairro ,telefone,data) VALUES ('$nome', '$endereco','$numero', '$bairro','$telefone','$data')";  
	
	if(mysqli_query($connect,$sql)):
			$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('location: ../adicionar.php');
	else:
		$_SESSION['mensagem'] = "Erro ao Cadastrar!";
		header('location: ../adicionar.php');
		endif;


endif;