<?php 
include_once './conexao.php';

//$id = 1;
$sql = "SELECT * FROM produtos";// where id = :id
$stmt = $conexao->prepare($sql);
//$stmt->bindParam(':id', $id);
$stmt->execute();
$produtos = $stmt->fetchAll();

foreach ($produtos as $produto) {
	echo 'Descricao: '.$produto['descricao'].' - Valor: R$ '.number_format($produto['valor'],2,',','.').' - Quantidade: '.$produto['valor'].'<br>';
}



 ?>