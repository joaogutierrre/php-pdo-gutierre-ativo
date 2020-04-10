<?php 
include_once './conexao.php';

$sql = "UPDATE produtos SET 
		descricao = :desc, 
		quantidade = :qtd, 
		valor = :val 
		WHERE id = :id";

$stmt = $conexao->prepare($sql);

$descricao = 'Placa mãe';
$quantidade = 7;
$valor = 780;
$id = 2;

$stmt->bindParam(':desc', $descricao);
$stmt->bindParam(':qtd', $quantidade);
$stmt->bindParam(':val', $valor);
$stmt->bindParam(':id', $id);
/*$stmt->bindValue(1, 'Monitor');
$stmt->bindValue(2, 17);
$stmt->bindValue(3, 299);*/

$stmt->execute();
/*$a = 'Pdot';
$b = '3';
$c = '2';*/



 ?>