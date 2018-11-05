<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="index.css"/>
		<title>Formulário de Cadastro</title>
	</head>
	
	<body>
		<h1>Informações do jogo</h1>
		
		<?php
			session_start();
			$jogoDesejado = $_SESSION["jogoDesejado"];
		
			$stringConexao="mysql:host=127.0.0.1;dbname=dbcatalogo";
			$usuario="root";
			$senha="root";
			
			$conexao = new PDO($stringConexao, $usuario, $senha);
			
			
			
			$memoria = $conexao->query("select * from cadastro where CATA_ID = $jogoDesejado");
			$memoria->setFetchMode(PDO::FETCH_ASSOC);
	
			$linha = $memoria->fetch();
			
			$id = $linha["CATA_ID"];
			$nome = $linha["CATA_nome"];
			$descricao = $linha["CATA_descricao"];
			$desenvolvedor = $linha["CATA_desenvolvedor"];
			$distribuidor = $linha["CATA_distribuidora"];
			$genero = $linha["CATA_genero"];
			$imagem = $linha["CATA_imagem"];
			$trailer = $linha["CATA_trailer"];
			$plataforma = $linha["CATA_plataforma"];
			$data = $linha ["CATA_dataLancamento"];
		
			echo "<form action='altera.php' method='post'>
				<table border=0>
					<tr>
					<td>ID: </td>
					<td>$id</td>
					</tr>
				
					<tr>
					<td>NOME</td>
					<td><input type='text' name='nomeJogo' value='$nome'></td>
					</tr>				
					
					<tr>
					<td>GENERO</td>
					<td><input type='text' name='generoJogo' value='$genero'></td>
					</tr>
					
					<tr>
					<td>Plataforma</td>
					<td>
						<select name='plataformaJogo'>
							<option value=''> </option>
							
			";		
							
			if($plataforma=="PC"){
				echo "<option value='PC' selected>PC</option>";
			}else{
				echo "<option value='PC'>PC</option>";
			}				
			if($plataforma=="Console"){
				echo "<option value='Console' selected>Console</option>";
			}else{
				echo "<option value='Console'>Console</option>";
			}		
			if($plataforma=="Portatil"){
				echo "<option value='Portatil' selected>Portatil</option>";
			}else{
				echo "<option value='Portatil'>Portatil</option>";
			}
			echo	"</select>
					</td>
					</tr>
					
					<tr>
					<td>Desenvolvedora</td>
					<td><input type='text' name='desenvolvedoraJogo' value='$desenvolvedor'></td>
					</tr>
					
					<tr>
					<td>Distribuidor</td>
					<td><input type='text' name='distribuidoraJogo' value='$distribuidor'></td>
					</tr>
					
					<tr>
					<td>Data de Lançamento</td>
					<td><input type='date' name='dataJogo' value='$data'></td>
					</tr>
					
					<tr>
					<td>Imagem</td>
					<td><input type='text' name='imagemJogo' value='$imagem'></td>
					</tr>
					
					<tr>
						<td>Trailer</td>
						<td><input type'text' name='trailerJogo' value='$trailer'></td>
					</tr>
					
					<tr>
					<td>Descrição</td>
					<td><input type='text' name='descricaoJogo' value='$descricao'></td>
					</tr>							
					
							
			
			
			
					<tr>
					<td><button type='submit'> <img src='imagens/adicionar.png'>  </button></td>
					<td><button type='reset'> <img src='imagens/limpar.png'> </button></td>
					</form>
					<form action='indexlogado.php'>
						<td><button type='submit'> <img src='imagens/voltar.png' height='24px' width='24px'> </button></td>
					</form>
					</tr>
				<table>
			</form>";
		?>
	</body>

</html> 