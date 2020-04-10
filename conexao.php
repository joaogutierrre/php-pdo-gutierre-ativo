<?php 
$host = 'mysql:host=localhost;dbname=loja_senac';
$user = 'root';
$password = 'root';

try {
	$conexao = new PDO($host,$user, $password);

	return $conexao;
	
} catch (PDOException $e) {
	echo 'Erro na conexao. Código: ' . $e->getCode();
}

 ?>