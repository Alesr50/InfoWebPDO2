<?php


   // session_cache_expire(1);
   // session_start();

if ( !isset($_SESSION['usuario'])  ) {
//Destrói
session_destroy();

//Limpa
unset ($_SESSION['usuario']);
//  unset ($_SESSION['senha']);

//Redireciona para a página de autenticação
header('location:login.html');
}





?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <title>Formulário</title>
</head>


<body>
    <div class="container">
        <form action="insere.php" method="get">
            <p>Formulário de Cadastro</p>
            <div class="mb-3">
                <label  class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" id="email"  class="form-control" placeholder="Digite seu e-mail" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Login</label>
                <input type="text" name="login" id="login" class="form-control"  placeholder="Digite o usuário"  min="1" required>
            </div>
            <div class="mb-3"">
                <label class="form-label">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control" placeholder="Digite a senha" required>
            </div>
            <button type="submit" id="button" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
</body>
</html>