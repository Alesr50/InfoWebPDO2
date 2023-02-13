<?php

$id        = (INT)$_GET["idUsuario"];


include("./conexao/conexao.php");
$pdo = conectar();



$sql = 'UPDATE tblUsuario SET  ativo=0 WHERE idUsuario = :id';
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

if(!$stmt){
  echo 'erro na consulta: '. $conn->errno .' - '. $conn->error;
}


header("Location: listar.php");
?>