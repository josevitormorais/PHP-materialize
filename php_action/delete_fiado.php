<?php

//conexao
require_once 'db_connect.php';

if(isset($_POST['btn-deletarfiado'])):
	
	$id = mysqli_escape_string($connect,$_POST['id']);

	$sql = "DELETE FROM fiado WHERE id = '$id'"; 

	if(mysqli_query($connect,$sql)):
			$_SESSION['mensagem'] = "Deletado com sucesso!";
		header('location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao Deletar!";
		header('location: ../index.php');
		endif;


endif;