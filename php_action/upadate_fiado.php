<?php

//conexao
require_once 'db_connect.php';

if(isset($_POST['btn-fiado'])):
	$nome = mysqli_escape_string($connect, $_POST['nome']);
	$endereco = mysqli_escape_string($connect, $_POST['endereco']);
	$numero = mysqli_escape_string($connect,$_POST['numero']);
	$telefone = mysqli_escape_string($connect,$_POST['telefone']);
	$data = mysqli_escape_string($connect,$_POST['data']);

	$id = mysqli_escape_string($connect,$_POST['id']);

	$sql = "UPDATE fiado SET nome = '$nome', endereco = '$endereco', numero = '$numero', telefone = '$telefone', data = '$data' WHERE id = '$id'";  
	
	if(mysqli_query($connect,$sql)):
			$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao Atualizar!";
		header('location: ../index.php');
		endif;


endif;