<?php




// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
    header("Location: login.html"); 
    exit;
}


$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

include("./conexao/conexao.php"); 
$pdo=conectar();

$sql = "SELECT idUsuario, nomeUsuario, emailUsuario FROM tblUsuario WHERE loginUsuario =? and senhausuario=? and ativo=1";
$stmt=$pdo->prepare($sql);
$stmt->bindParam(1, $usuario);
$stmt->bindParam(2, $senha);
$stmt->execute();


// Validação do usuário/senha digitados



if  ($stmt->execute()<1) {
    // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
    echo "Login inválido!"; 
    
} else {
    
    echo "entrou";
    header("Location:adm.php");
    session_start();
    session_cache_expire(1);
    $_SESSION['usuario'] = $usuario;
}






?>