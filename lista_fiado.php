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
			<h3 class="light">Clientes fiado</h3>
			<table class="striped">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Endereço</th>
						<th>Numero</th>
						<th>Telefone</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$sql = "SELECT * FROM fiado ";
					$resultado = mysqli_query($connect,$sql);

					if(mysqli_num_rows($resultado ) > 0):

					while ($dados = mysqli_fetch_array($resultado)):
					?>
					<tr>
						<td><?php echo $dados['nome']; ?></td>
						<td><?php echo $dados['endereco']; ?></td>
						<td><?php echo $dados['numero']; ?></td>
						<td><?php echo $dados['telefone']; ?></td>
						<td><?php echo $dados['data']; ?></td>
						
						<td><a href="editar_fiado.php?id=<?php echo $dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

						<td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

						 <!-- Modal Structure -->
  <div id="modal<?php echo $dados['id']; ?>" class="modal">
    <div class="modal-content">
      <h4>Opa!</h4>
      <p>TEM CERTEZA QUE DESEJA EXCLUIR ESSE CLIENTE?</p>
    </div>
    <div class="modal-footer">
      

      <form action="php_action/delete_fiado.php" method="POST">
      	<input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
      	<button type="submit" name="btn-deletarfiado" class="btn red">Yes, quero Deletar</button>

      	<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>

      </form>

      <button></button>
    </div>
  </div>

					</tr>
					<?php 
				endwhile;
			else: ?>

			<tr>
				<td>-</td>
				<td>-</td>
				<td>-</td>
				<td>-</td>
			</tr>	

			<?php
			endif;

				?>
				

				</tbody>
			</table>
			<br>
			<a href="index.php" class="btn">Retornar</a>
			
		</div>
	</div>

<?php
include_once 'includes/footer.php';
?>