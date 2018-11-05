<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="index.css"/>
		<title>Cadastro de Jogos</title>
	</head>
	
	<body>
						
			<div class="logo">
				<a href="indexlogado.php">
				  <img src="imagens/logo5.png" alt="Blaze Games" width="50%">
				</a>
				<form class='logado' action="index.php" method="post">
					<table align="right" border="0">
						<tr>
							<td><button type="submit" name="sair">Sair</button></td>
			
				</form>	
				
					</table>
				
				<p	class="ideia">
					<strong>
						&nbsp
					</strong>
				
			
				
				
				</p>
			</div>
				<section class="container">
      <ul class="nav">
        <li><a href="indexlogado.php" class="nav-icon" title="Home"><span class="icon-home">Home</span></a></li>
        <li><a href="indexlogado.php" title="jogos">Jogos</a></li>
        <li><a href="indexlogado.php" title="Support">Support</a></li>
        <li><a href="indexlogado.php" title="Training">Training</a></li>
        <li><a href="indexlogado.php" title="About">About</a></li>
		<li>	
			<form class="busca2" action="detalhes.php" method="post">
					<label name="labelInforme">Pesquisa: </label>
					<input type="text" name="jogoDesejado" size="">
					<button type="submit" name="botaoCarregar">Carregar</button>
			</form>
		</li>
      </ul>
  </section>
		
		
		
		<?php
			
			
			$stringConexao="mysql:host=127.0.0.1;dbname=dbcatalogo";
			$usuario="root";
			$senha="root";
			
			$conexao = new PDO($stringConexao, $usuario, $senha);
			
			
			
			$memoria = $conexao->query("select * from cadastro;");
			$memoria->setFetchMode(PDO::FETCH_ASSOC);
	
			echo "<table border=1 align='center'>";
			echo "<tr align='center' bgcolor='#000'><td>ID</td> <td>Nome</td> <td>Genero</td> <td>Plataforma</td> <td> Desenvolvedor </td> <td> Distriduidora </td> <td> Data Lançamento </td> <td>Imagem</td> <td> Trailer </td> <td> Descrição </td> </tr>";
			
			
			while($linha = $memoria->fetch()){
			if($linha!=null)
			{
				echo "<td>".$linha["CATA_ID"]."</td>";
				echo "<td>".$linha["CATA_nome"]."</td>";
				echo "<td>".$linha["CATA_genero"]."</td>";
				echo "<td>".$linha["CATA_plataforma"]."</td>";
				echo "<td>".$linha["CATA_desenvolvedor"]."</td>";
				echo "<td>".$linha["CATA_distribuidora"]."</td>";
				echo "<td>".$linha["CATA_dataLancamento"]."</td>";
				echo "<td rows='5' cols='21'>".$linha["CATA_imagem"]."</td>";
				echo "<td>".$linha["CATA_trailer"]."</td>";
				echo "<td>".$linha["CATA_descricao"]."</td>";
				echo "</tr>";
				
			}
			}
			
		?>
		</table>
		<table border='0'>
		<tr>
		
		<td>
		<form action="formulario.html" method="post">
			<button type="submit" name="novo">Novo</button>
		</form>
		</td>
		
		
		
		</tr>
		<table>
		


		
	</body>

</html> 