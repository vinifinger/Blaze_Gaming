<?php
	session_start();
	$codigoDesejado = $_SESSION["jogoDesejado"];
	
	$nome = $_POST["nomeJogo"];
	$genero = $_POST["generoJogo"];
	$plataforma = $_POST["plataformaJogo"];
	$desenvolvedora = $_POST["desenvolvedoraJogo"];
	$distribuidora = $_POST ["distribuidoraJogo"];
	$dataLanc = $_POST ["dataJogo"];
	$trailer = $_POST["trailerJogo"];
	$img = $_POST ["imagemJogo"];
	$desc = $_POST["descricaoJogo"];
	
	$stringConexao="mysql:host=127.0.0.1;dbname=dbcatalogo";
	$usuario="root";
	$senha="";
			
	$conexao = new PDO($stringConexao, $usuario, $senha);
	
	$sqlPreparado = $conexao->prepare("update cadastro set CATA_nome=?, CATA_dataLancamento=?, CATA_plataforma=?, CATA_genero=?, CATA_desenvolvedor=?, CATA_distribuidora=?, CATA_imagem=?, CATA_trailer=?, CATA_descricao=? where CATA_ID=$codigoDesejado");
	$sqlPreparado->bindParam(1, $nome);
	$sqlPreparado->bindParam(2, $dataLanc);
	$sqlPreparado->bindParam(3, $plataforma);
	$sqlPreparado->bindParam(4, $genero);
	$sqlPreparado->bindParam(5, $desenvolvedora);
	$sqlPreparado->bindParam(6, $distribuidora);
	$sqlPreparado->bindParam(7, $img);
	$sqlPreparado->bindParam(8,$trailer);
	$sqlPreparado->bindParam(9, $desc);

	$sqlPreparado->execute();
	
	header("Location:detalhes.php");
?>