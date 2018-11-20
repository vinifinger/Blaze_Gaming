<?php
	$nome = $_POST["nomeJogo"];
	$genero = $_POST["generoJogo"];
    $plataforma = $_POST["plataformaJogo"];
	$desenvolvedora = $_POST["desenvolvedoraJogo"];
	$distribuidora = $_POST ["distribuidoraJogo"];
	$data = $_POST ["dataJogo"];
	$img = $_POST ["imagemJogo"];
	$trailer = $_POST ["trailerJogo"];
	$desc = $_POST["descricaoJogo"];
	
	
	$stringConexao="mysql:host=127.0.0.1;dbname=dbcatalogo";
	$usuario="root";
	$senha="";
	
	$conexao = new PDO($stringConexao, $usuario, $senha);
	
	$sqlPreparado = $conexao->prepare("insert into cadastro VALUES(?,?,?,?,?,?,null,?,?,?)");
	$sqlPreparado->bindParam(1,$nome);
	$sqlPreparado->bindParam(2,$data);
	$sqlPreparado->bindParam(3,$plataforma);
	$sqlPreparado->bindParam(4,$genero);
	$sqlPreparado->bindParam(5,$desenvolvedora);
	$sqlPreparado->bindParam(6,$distribuidora);
	$sqlPreparado->bindParam(7,$img);
	$sqlPreparado->bindParam(8,$trailer);
	$sqlPreparado->bindParam(9,$desc);
	
	$sqlPreparado->execute();
	
	header("Location:painel.php");



?>


