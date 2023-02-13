<!DOCTYPE html>
<html lang="pt-br">


<?php
                        session_cache_expire(1);
                        session_start();
            
            if ( !isset($_SESSION['usuario'])  ) {
                //Destrói
                session_destroy();
             
                //Limpa
                unset ($_SESSION['usuario']);
              //  unset ($_SESSION['senha']);
                 
                //Redireciona para a página de autenticação
                header('location:login.html');
            }
            
            
         //session_cache_expire(1);
         //session_start();
          
            
            
            
            
            ?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Painel ADM</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="?pg=black.php">Home <span class="sr-only">(Página atual)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Usuários</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="?pg=inserir.php">Cadastrar</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="?pg=listar.php">Listar</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled " href="#">  <?php echo "Olá " .strtoupper($_SESSION['usuario']);?> </a>
                </li>
            </ul>
        </div>
    </nav>

    <div id="cont" class="container">
        <?php
        $pg = (isset($_GET['pg'])) ? $_GET['pg'] : null;  /*Verifica se a variável $pg tem algum valor, se não... Atribui um valor defalt pra variável */

        if ($pg == '') {
            include('home.php');
        } elseif (file_exists($pg)) {
            include $pg;
        } else {
            include "404.php";    /*Aqui ele vai chamar a página de erro.. Coloque a sua...*/
        }
        ?>
    </div>
    <div id="footer"></div>

    <p> <?php
        
            
            
            
            
            ?> </p>
</body>

</html>