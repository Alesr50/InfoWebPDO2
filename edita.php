<?php


echo $id        = $_POST["id"];
echo $nome      = $_POST["nome"];
echo $email     = $_POST["email"];
echo $login     = $_POST['login'];
echo $senha     = $_POST["senha"];

// Criando conexão
include("./conexao/conexao.php");
$pdo = conectar();
$sql = 'UPDATE tblUsuario SET  nomeUsuario=?, loginUsuario=?, emailUsuario=? ,senhaUsuario=? WHERE idUsuario = ?';
$dados = [$nome, $email,$login,$senha,$id];
$stmt = $pdo->prepare($sql);


if ($stmt->execute($dados)) {
  echo "Registro Editado";
  header("Location: adm.php");
} else {
  echo "Error: " . $sql . "<br>" ;
}

?>