<?php
include_once 'includes/header.php';
session_start();
?>
	<div class="row">
		<div class=" col s12 m6 push-m3 ">
			<h3 class="light">Adicionar Fiado</h3>
			<form action="php_action/fiadoadd.php" method="POST">
				<div class="input-field col s12">
					<input type="text" name="nome" id="nome">
					<label for="nome">Nome</label>
				</div>
				<div class="input-field col s12">
					<input type="text" name="endereco" id="endereco">
					<label for="endereco">Endereço</label>
				</div>
				<div class="input-field col s12">
					<input type="text" name="numero" id="numero">
					<label for="numero">Numero</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="telefone" id="telefone">
					<label for="telefone">Telefone</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="data" id="data">
					<label for="data">Data</label>
				</div>


				<button type="submit" name="btn-fiado" class="btn"> CADASTRAR </button>
				<a href="lista_fiado.php" class="btn green">LISTA</a>

			</form>
		</div>
	</div>
	
<?php
include_once 'includes/footer.php';
?>
