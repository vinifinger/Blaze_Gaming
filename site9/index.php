<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="index.css"/>
		<title>Cadastro de Jogos</title>
	</head>
	
	<body>
						
			<div class="logo">
				<a href="index.php">
				  <img src="imagens/logo5.png" alt="Blaze Games" width="50%">
				</a>
				<form class="login" action="entrada.php" method="post">
					<table align="right" border="0">
					
						<tr>
							<td>Login: </td>
							<td><input type="text" name="login" cellspacing="Usuário"></td>
						</tr>
						<tr>
							<td>Senha: </td>
							<td><input type="password" name="senha" cellspacing="Senha"></td>
						</tr>
						<tr align="right">
							<td></td>
							<td><button type="submit" value="Iniciar">Iniciar</button></td>
						</tr>
					
					</table>
				</form>
				<p	class="ideia">
					<strong>
						&nbsp
					</strong>
				
			
				
				
				</p>
			</div>
				<section class="container">
      <ul class="nav">
        <li><a href="index.php" class="nav-icon" title="Home"><span class="icon-home">Home</span></a></li>
        <li><a href="index.php" title="jogos">Jogos</a></li>
        <li><a href="index.php" title="Support">Support</a></li>
        <li><a href="index.php" title="Training">Training</a></li>
        <li><a href="index.php" title="About">About</a></li>
		<li>	
			<form class="busca2" action="detalhesUsu.php" method="post">
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
			
			echo"
			<div class='links2'>
			<form class='ordem' action='index.php' method='post'>
			<label name='labelOrdena'>ORDENAR POR:
			<button type='submit' name='botaoOrdenaId'>Id</button>
			<button type='submit' name='botaoOrdenaNome'>Nome</button>
			<button type='submit' name='botaoOrdenaGenero'>Gênero</button>
			<button type='submit' name='botaoOrdenaPlataforma'>Plataforma</button>
			<input type='checkbox' name='boxDecrescente[]' value='ok'>ordem decrescente<br></label>
		</form>
		</div>";
			
			echo"<div class = 'links'>";
		
			
			$memoria = $conexao->query("select * from cadastro".$ordenacao);
			
			$memoria->setFetchMode(PDO::FETCH_ASSOC);
			
			
			
			while($linha = $memoria->fetch())
			{
				
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
				echo"	<div class='imagens'>
					
			<a class='imagens' href=''> 
				<img class=img alt='".$linha["CATA_nome"]."' name='$nome' title='".$linha["CATA_nome"]."' src=".$linha["CATA_imagem"]." width='225' height='120'/>
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