<?php
//conexao
include_once 'php_action/db_connect.php ';
//header
include_once 'includes/header.php';
//message
include_once 'includes/mensagem.php';
?>

<link rel="stylesheet" type="text/css" href="css.css">
	<body>	
		<h3 id="titulo" align="center" class="center-align Green">Gaz Uberlândia</h3>
	
			<div align="center" class="row">
				<img  height="250px" width="220px" src="imagens/bujao2.jpg" class="responsive-img">
			</div>
		
		
			
			<div class="center" >
				
				<a href="adicionar.php" class="btn"> Adicionar Cliente</a>

			
				<a  href="pesquisa.php" class="btn green">Pesquisar Cliente</a>
				
				<a  href="lista.php" class="btn brown">Lista de cliente</a>

				<a  href="fiado.php" class="btn red">Fiados</a>

				<a href="" class="btn black">CONTROLE </a>
	</div>

</body>
<?php
include_once 'includes/footer.php';
?>

