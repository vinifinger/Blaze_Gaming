<?php
	
	$login= $_POST["login"];
	$pass= $_POST["senha"];
	
	$stringConexao="mysql:host=127.0.0.1;dbname=dbcatalogo";
	$usuario="root";
	$senha="root";
	
	$conexao = new PDO($stringConexao, $usuario, $senha);

	$memoria = $conexao -> query ("select * from entrada where (CATA_user = '$login') and (CATA_pass = '$pass')");
		$memoria -> setFetchMode(PDO::FETCH_ASSOC);
		$linha = $memoria -> fetch();
			if ($linha!=null){
				header("Location: painel.php");
			} else {
				echo "TROUXA, LOGIN OU SENHA INVÁLIDOS :c";
			}
	








?>