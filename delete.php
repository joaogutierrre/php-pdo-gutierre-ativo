<?php
include_once './conexao.php';

$id = 3;
$sql = "DELETE FROM produtos WHERE id = :id";
$stmt = $conexao->prepare($sql);
$stmt->bindParam(':id', $id);

if($stmt->execute()) {
	echo 'Excluido com sucesso';
}else {
	echo 'Erro ao excluir';
}

