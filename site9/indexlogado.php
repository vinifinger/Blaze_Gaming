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
				<form action="painel.php" method="post">
						
							<td><button type="submit" name="editar">Editar</button></td>
						</tr>
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
			<form class="busca2" action="detalhesLogado.php" method="post">
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
			$senha="";
			$conexao = new PDO($stringConexao, $usuario, $senha);
			
			$ordenacao = "";
			if(isset($_POST["botaoOrdenaId"]))
			{
				$ordenacao = " order by CATA_ID";
				if(isset($_POST["boxDecrescente"]))
					$ordenacao = $ordenacao . " desc";
			} 
			elseif (isset($_POST["botaoOrdenaNome"]))
			{
				$ordenacao = " order by CATA_nome";
				if(isset($_POST["boxDecrescente"]))
					$ordenacao = $ordenacao . " desc";
			}
			elseif (isset($_POST["botaoOrdenaGenero"]))
			{
				$ordenacao = " order by CATA_genero";
				if(isset($_POST["boxDecrescente"]))
					$ordenacao = $ordenacao . " desc";
			}
			elseif (isset($_POST["botaoOrdenaPlataforma"]))
			{
				$ordenacao = " order by CATA_plataforma";
				if(isset($_POST["boxDecrescente"]))
					$ordenacao = $ordenacao . " desc";
			}
			
			$memoria = $conexao->query("select * from cadastro".$ordenacao);
			
			
			$memoria->setFetchMode(PDO::FETCH_ASSOC);
			
			echo"
			<div class='links2'>
			<form class='ordem' action='indexlogado.php' method='post'>
			<label name='labelOrdena'>ORDENAR POR:
			<button type='submit' name='botaoOrdenaId'>Id</button>
			<button type='submit' name='botaoOrdenaNome'>Nome</button>
			<button type='submit' name='botaoOrdenaGenero'>Gênero</button>
			<button type='submit' name='botaoOrdenaPlataforma'>Plataforma</button>
			<input type='checkbox' name='boxDecrescente[]' value='ok'>ordem decrescente<br></label>
		</form>
		</div>";
			
			echo "<div class = 'links'>";
			while($linha = $memoria->fetch())
			{
			echo"	
							
					<div class='imagens'>
			<a class='imagens' href=#> 
				<img class=img alt=".$linha["CATA_nome"]." title=".$linha["CATA_nome"]." src=".$linha["CATA_imagem"]." width='225' height='120'/>
			</a>
			
			<div class='titulo'>
				<strong>
					".$linha["CATA_nome"]."
				</strong>
			</div>
			
			<div class='texto2'>
				Gênero:  ".$linha["CATA_genero"]." Plataforma:  ".$linha["CATA_plataforma"]." Deselvolvedor: ".$linha["CATA_desenvolvedor"]." Código: ".$linha["CATA_ID"]."
			</div>
			
			
			
			<div class='texto1'>
				".$linha["CATA_descricao"]."
			</div>
			
			
			
		</div>";
			
			}
			
			
		?>
		


		
	</body>

</html> 