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
			$senha="";
			$conexao = new PDO($stringConexao, $usuario, $senha);
			
			
			echo"<div class = 'links'>
			
			<div class='imagens2'>
			<h1> 
				Blaze Gaming - O seu lugar onde encontrar jogos!
			</h1>
		</div>
		
	
		<div class='home'>
			<img title='Assistir - online' alt='Assistir - online' src='http://4.bp.blogspot.com/-VNEN0xaW31o/TiHihMMcYYI/AAAAAAAARO0/wo_ZFnPgUcg/s1600/DB.jpg' width='180' height='281'>
			
			<div class='texto2'>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus imperdiet, justo a cursus semper, sem ligula facilisis turpis, nec faucibus ligula eros non urna. Pellentesque mollis ornare nisi, eu luctus est viverra eget.<br> Nulla posuere, eros tincidunt consequat sagittis, neque neque pretium nulla, a tempus est libero sed sem. Pellentesque posuere nisl et purus blandit blandit.<br> Vestibulum fringilla gravida dui eu interdum. Donec cursus facilisis enim in rutrum. Sed sapien ipsum, condimentum ut malesuada quis, vehicula nec mauris. Proin interdum enim velit, eu tempor magna rutrum vitae.<br> Praesent ullamcorper aliquam tortor ac ornare. Vivamus risus ipsum, viverra quis lacinia bibendum, rutrum a purus.<br> Maecenas et u 
			</div>
		</div>
			
			
			
		";
			
		
			
			
		?>
		
		
		
	</body>

</html> 