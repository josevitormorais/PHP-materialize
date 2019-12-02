<?php

//conexao
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$endereco = mysqli_escape_string($connect, $_POST['endereco']);
	$numero = mysqli_escape_string($connect,$_POST['numero']);
	$bairro = mysqli_escape_string($connect,$_POST['bairro']);
	$telefone = mysqli_escape_string($connect,$_POST['telefone']);
	$data = mysqli_escape_string($connect,$_POST['data']);

	$id = mysqli_escape_string($connect,$_POST['id']);

	$sql = "UPDATE clientes SET nome = '$nome', endereco = '$endereco', numero = '$numero', bairro = '$bairro', telefone = '$telefone', data = '$data' WHERE id = '$id'";  
	
	if(mysqli_query($connect,$sql)):
			$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('location: ../lista.php');
	else:
		$_SESSION['mensagem'] = "Erro ao Atualizar!";
		header('location: ../lista.php');
		endif;


endif;