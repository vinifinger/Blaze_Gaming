<?php
	session_start();
	$codigoDesejado = $_SESSION["jogoDesejado"];
	


	
	$stringConexao="mysql:host=127.0.0.1;dbname=dbcatalogo";
	$usuario="root";
	$senha="root";

	$conexao = new PDO($stringConexao, $usuario, $senha);
	
	$sqlPreparado = $conexao->prepare("DELETE FROM cadastro where CATA_ID=$codigoDesejado");
	
		$sqlPreparado->execute();
		
		header("Location:detalhes.php");



	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	?>