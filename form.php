<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $senha = $_GET['senha'];
    $valor = $_GET['valor'];

    echo "O seu nome é $nome , e seu email é $email";

    ?>
    <h1>Mensagem enviada para <?php echo $email ?></h1>

    <h1> O valor multiplicado é <?php

                                if ($valor % 2 == 0) {
                                    echo ($valor * 2);
                                } else {
                                    echo "Não é par";
                                }
                                ?></h1>
</body>

</html>