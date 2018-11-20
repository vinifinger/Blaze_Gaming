<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="index.css"/>
		<title>Detalhes do Jogo</title>
	</head>
	
	<body>
	
			<div class="logo">
				<a href="indexlogado.php">
				  <img src="imagens/logo5.png" alt="Blaze Games" width="50%">
				</a>
				<form class="logado" action="index.php" method="post">
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
			$senha="";
			
			$conexao = new PDO($stringConexao, $usuario, $senha);
			
		
			
			$memoria = $conexao->query("select * from cadastro where CATA_nome = '$codigoDesejado'");
			$memoria->setFetchMode(PDO::FETCH_ASSOC);
	
			
			
			$linha = $memoria->fetch();
			if($linha!=null)
			{
				echo"	
					<div class='entorno'>		
						<div class='detalhes'>
							<a href=#> 
								<img class=img alt='".$linha["CATA_nome"]."' title='".$linha["CATA_nome"]."' src=".$linha["CATA_imagem"]." width='400' height='281	'/>
							</a>
			
						<div class='nome'>
							<strong>
								".$linha["CATA_nome"]."
							</strong>
						</div>
			
						<div class='complemento'>
							<table>
								<tr>
									<td>Gênero:  ".$linha["CATA_genero"]."</td>
								</tr>
								
								<tr>
									<td> Plataforma:  ".$linha["CATA_plataforma"]."</td>
								</tr>
								
								<tr>
									<td> Deselvolvedor: ".$linha["CATA_desenvolvedor"]."</td>
								</tr>

								<tr>
									<td> Data de Lançamento: ".$linha["CATA_dataLancamento"]."</td>
								</tr>
								
								<tr> 
									<td> Código: ".$linha["CATA_ID"]." </td>
								</tr>
									
							</table>
						</div>

						<div class='trailer'>
			<iframe width='320' height='180' src='".$linha["CATA_trailer"]."' frameborder='0' allowfullscreen></iframe>
						</div>
			
			
			
						<div class='extensao'>
							".$linha["CATA_descricao"]."
						</div>
					</div>
			
			
			
			";
			}
					echo"</div>";
			
		?>
		
	</body>

</html> 