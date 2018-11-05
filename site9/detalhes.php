<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="index.css"/>
		<title>Detalhes do Jogo</title>
	</head>
	
	<body>
		<?php
			$codigoDesejado = "";
			if(isset($_POST["botaoCarregar"]))
			{
				$codigoDesejado = $_POST["jogoDesejado"];
				session_start();
				$_SESSION["jogoDesejado"] = $codigoDesejado;
			}
			else
			{
				session_start();
				$codigoDesejado = $_SESSION["jogoDesejado"];
			}
			
			$stringConexao="mysql:host=127.0.0.1;dbname=dbcatalogo";
			$usuario="root";
			$senha="root";
			
			$conexao = new PDO($stringConexao, $usuario, $senha);
			
			
			
			$memoria = $conexao->query("select * from cadastro where CATA_ID = $codigoDesejado");
			$memoria->setFetchMode(PDO::FETCH_ASSOC);
	
			echo "<table border=1>";
			echo "<tr bgcolor='#FF0000'><td>ID</td> <td>Nome</td> <td>Genero</td> <td>Plataforma</td> <td> Desenvolvedor </td> <td> Distriduidora </td> <td> Data Lançamento </td> <td>Imagem</td> <td> Trailer </td> <td> Descrição </td> </tr>";

			
			$linha = $memoria->fetch();
			if($linha!=null)
			{
				echo "<td>".$linha["CATA_ID"]."</td>";
				echo "<td>".$linha["CATA_nome"]."</td>";
				echo "<td>".$linha["CATA_genero"]."</td>";
				echo "<td>".$linha["CATA_plataforma"]."</td>";
				echo "<td>".$linha["CATA_desenvolvedor"]."</td>";
				echo "<td>".$linha["CATA_distribuidora"]."</td>";
				echo "<td>".$linha["CATA_dataLancamento"]."</td>";
				echo "<td>".$linha["CATA_imagem"]."</td>";
				echo "<td>".$linha["CATA_trailer"]."</td>";
				echo "<td>".$linha["CATA_descricao"]."</td>";
				echo "</tr>";
			}
			
		
		?>
		
		<table border='0'>
		<tr>
		<td>
		<form action="formulario.html" method="post">
			<button type="submit" name="botaoNovo">Novo</button>
		</form>
		</td>
		<td>
		<form action="formularioPreenchido.php" method="post">
			<button type="submit" name="botaoFormulario">Alterar</button>
		</form>
		</td>
	
		<td>
		<form action="excluir.php" method="post">
			<button name="deletar" type="submit" value="excluir" 
			onClick="alert('Jogo deletado!');"/> Excluir </button>
		</form>
		</td>
		
		<td>
		<form action="painel.php" method="post">
			<button type="submit" name="botaoVoltar">Voltar</button>
		</form>
		</td>
		</tr>
		
		
	</body>

</html> 