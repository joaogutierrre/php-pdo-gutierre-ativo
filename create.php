<?php 
include_once './conexao.php';

/*$sql = "INSERT INTO produtos (descricao, quantidade, valor) 
		VALUES (?, ?, ?)";*/
$sql = "INSERT INTO produtos (descricao, quantidade, valor) 
		VALUES (:desc, :qtd, :val)";

$stmt = $conexao->prepare($sql);

$descricao = 'Mouse Gamer';
$quantidade = 60;
$valor = 290.90;

$stmt->bindParam(':desc', $descricao);
$stmt->bindParam(':qtd', $quantidade);
$stmt->bindParam(':val', $valor);
/*$stmt->bindValue(1, 'Monitor');
$stmt->bindValue(2, 17);
$stmt->bindValue(3, 299);*/

$stmt->execute();
/*$a = 'Pdot';
$b = '3';
$c = '2';*/



 ?>