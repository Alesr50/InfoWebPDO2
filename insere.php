<?php


$nome=$_GET['nome'];
$login=$_GET['login'];
$senha=$_GET['senha'];
$email=$_GET['email'];

// Criando conexão
include("./conexao/conexao.php");
    $pdo = conectar();

$sql = "INSERT INTO tblusuario(nomeusuario,loginusuario, senhausuario, emailusuario)
VALUES (?,?,?,?)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $login);
$stmt->bindParam(3, $senha);
$stmt->bindParam(4, $email);




if ($stmt->execute()) {
  echo "Registro Cadastrado";
  header("Location: listar.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


?>
