<?php
//conexao
include_once 'php_action/db_connect.php ';
//header
include_once 'includes/header.php';
//message
include_once 'includes/mensagem.php';
?>
	<div class="row">
		<div class=" col s12 m6 push-m3 ">
			<h3 class="light">Pesquisar Clientes</h3>
				<div class="row">
			<form action="php_action/buscar.php" method="POST">
				<div class="input-field col s12">
					<input type="text" name="pesquisar" placeholder="BUSCAR PELO ENDEREÇO" >
					<button type="submit" name="btn-pesquisar" class="btn"> Pesquisar </button>
				<a href="lista.php" class="btn green">LISTA DE CLIENTE</a>
				<a href="index.php" class="btn red">PAGINA INICIAL</a>
</div>
			</form>
		</div>
	</div>
