<?php
//conexao
include_once 'php_action/db_connect.php';
include_once 'includes/header.php';
//select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM clientes where id = '$id'";
	$resultado = mysqli_query($connect,$sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>
	<div class="row">
		<div class=" col s12 m6 push-m3 ">
			
			<h3 class="light">Editar Cliente</h3>
			<form action="php_action/update.php" method="POST">
				<input type="hidden" name="id"  value="<?php echo $dados['id'];?>">	

				<div class="input-field col s12">
					<input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
					<label for="nome">Nome</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="endereco" id="endereco" value="<?php echo $dados['endereco'];?>">
					<label for="endereco">Endereço</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="numero" id="numero" value="<?php echo $dados['numero'];?>">
					<label for="numero">Numero</label>
				</div>
				
				<div class="input-field col s12">
					<input type="text" name="bairro" id="bairro" value="<?php echo $dados['bairro'];?>">
					<label for="bairro">Bairro</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="telefone" id="telefone" value="<?php echo $dados['telefone'];?>">
					<label for="telefone">Telefone</label>
				</div>

				<div class="input-field col s12">
					<input type="text" name="data" id="data" value="<?php echo $dados['data'];?>">
					<label for="data">Data</label>
				</div>

				<button  type="submit" name="btn-editar" class="btn"> ATUALIZAR </button>
				<a href="lista.php" class="btn green">LISTA DE CLIENTE</a>

			</form>
		</div>
	</div>
<?php
include_once 'includes/footer.php';
?>

