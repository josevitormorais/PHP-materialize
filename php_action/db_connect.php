<?php
// conexao com banco de dados
$servername = "127.0.0.1";
$username = "root";
$password = "jesus";
$db = "cadastro";

$connect = mysqli_connect($servername, $username, $password, $db);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
	echo "Erro na conexao: " .mysqli_connect_error();
endif;



