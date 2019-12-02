<?php
//conexao
require_once 'db_connect.php';
include_once '../includes/header.php';
?>
	<div class="row">
		<div class=" col s12 m6 push-m3 ">
			<h3 class="light">Clientes</h3>
			<table class="striped">
				<thead>
					<tr>
						<th>Nome</th>
						<th>Endereço</th>
						<th>Numero</th>
						<th>Bairro</th>
						<th>Telefone</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$pesquisar = $_POST['pesquisar'];
					$sql = "SELECT * FROM clientes WHERE endereco LIKE '%$pesquisar%' LIMIT 5 ";
					$resultado = mysqli_query($connect,$sql);

					while ($rows_dados = mysqli_fetch_array($resultado)):
					?>
					<tr>
						<td><?php echo $rows_dados['nome']; ?></td>
						<td><?php echo $rows_dados['endereco']; ?></td>
						<td><?php echo $rows_dados['numero']; ?></td>
						<td><?php echo $rows_dados['bairro']; ?></td>
						<td><?php echo $rows_dados['telefone']; ?></td>
						<td><?php echo $rows_dados['data']; ?></td>

						<td><a href="../editar.php?id=<?php echo $rows_dados['id']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

						<td><a href="#modal<?php echo $rows_dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

						 <!-- Modal Structure -->
					  <div id="modal<?php echo $rows_dados['id']; ?>" class="modal">
    					<div class="modal-content">
     					 <h4>Opa!</h4>
     					 <p>TEM CERTEZA QUE DESEJA EXCLUIR ESSE CLIENTE?</p>
   					 </div>
    					<div class="modal-footer">
      

     					 <form action="delete.php" method="POST">
      					<input type="hidden" name="id" value="<?php echo $rows_dados['id']; ?>">
      					<button type="submit" name="btn-deletar" class="btn red">Yes, quero Deletar</button>

      					<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>

     				 </form>

    			  <button></button>


    </div>
  </div>
  					
					</tr>
					
					<?php 
				endwhile;?>


				</tbody>
			</table>
			<br>
			<a href="../pesquisa.php" name="retornar" class="btn">Retornar</a>

<?php
include_once '../includes/footer.php';
?>
