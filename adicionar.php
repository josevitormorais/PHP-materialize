<?php
include_once 'includes/header.php';
include_once 'php_action/create.php';
//sessao
?>

<script type="text/javascript">
	function validacao(){
		var formulario = document.form["cadastro"]
		var nome = formulario.nome.value
		var endereco = formulario.endereco.value
		var numero = formulario.numero.value
		var bairro = formulario.bairro.value
		var telefone = formulario.telefone.value
		var data = formulario.data.value

		var erro = false // nao tem erro
		if (nome.indexOf(" ") == -1 ) {
			alert("Preencha o nome completo")
			erro = true // quando identifica o erro
		}
		if(telefone != 11){
			alert("Preencha o numero completo")
		}
	}


</script>
	<div class="row">
		<div class=" col s12 m6 push-m3 ">
			<h3 class="light">Novo Cliente</h3>
			<form name="cadastro" action="php_action/create.php" method="POST" onsubmit="return validacao()">
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
					<input type="text" name="bairro" id="bairro">
					<label for="bairro">Bairro</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="telefone" id="telefone">
					<label for="telefone">Telefone</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="data" id="data">
					<label for="data">Data</label>
				</div>


				<button type="submit" name="btn-cadastrar" class="btn"> CADASTRAR </button>
				<a href="lista.php" class="btn green">LISTA DE CLIENTE</a>

			</form>
		</div>
	</div>






<?php
include_once 'includes/footer.php';
?>

