<?php

//conexao
require_once 'db_connect.php';

if(isset($_POST['btn-deletar'])):
	
	$id = mysqli_escape_string($connect,$_POST['id']);

	$sql = "DELETE FROM clientes WHERE id = '$id'"; 

	if(mysqli_query($connect,$sql)):
			$_SESSION['mensagem'] = "Deletado com sucesso!";
		header('location: ../lista.php');
	else:
		$_SESSION['mensagem'] = "Erro ao Deletar!";
		header('location: ../lista.php');
		endif;


endif;