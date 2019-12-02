<?php

if(isset($_POST['btn-cadastrar'])){
	if(empty($nome)){
		echo "erro";
	}

	if(empty($endereco)){
		echo "erro";
	}
	if(empty($data)){
		echo "erro";
	}
	if(empty($numero)){
		echo "erro";
	}
	if(empty($bairro)){
		echo "erro";
	}
	if(empty($telefone)){
		echo "erro";
	}
}


?>