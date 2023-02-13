<?php

if (!isset($_SESSION['usuario'])) {
  //Destrói
  session_destroy();

  //Limpa
  unset($_SESSION['usuario']);
  //  unset ($_SESSION['senha']);

  //Redireciona para a página de autenticação
  header('location:login.html');
}


//session_cache_expire(1);
//session_start();
//echo strtoupper($_SESSION['usuario']); 

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

  <title>Lista de Usuários</title>


  <script language="Javascript">
    function confirmacao(id) {
      var resposta = confirm("Deseja remover esse registro?");
      if (resposta == true) {
        window.location.href = "deleta.php?idUsuario=" + id;
      }
    }
  </script>

</head>

<body>


  <div class="container">
    <table id="myTable" class="table">
      <thead class="thead-dark">
        <?php

        include("./conexao/conexao.php");
        $pdo = conectar();

        $sql = "SELECT idUsuario, nomeUsuario, emailUsuario FROM tblUsuario where ativo=1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();



        if ($stmt->rowCount() > 0) {
          echo "
    <tr>
        <th >ID</th>
        <th>Nome</th>        
        <th>Email</th>
        <th></th>
        <th></th>
      </tr>        
      </thead>
    <tbody>";

          while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>
        <td>" . $row["idUsuario"] . "</td>
        <td>" . $row["nomeUsuario"] . "</td>
        <td>" . $row["emailUsuario"] . "</td> 
        <td><a href='editar.php?idUsuario=" . $row["idUsuario"] . "'>Editar</a></td>
        <td><a href='javascript:func()' onclick='confirmacao(" . $row["idUsuario"] . ")' >Excluir</a></td>
    </tr>";
          }
          echo "</table>";
        } else {
          echo "0 results";
        }



        ?>

        </tbody>
    </table>

  </div>
</body>

</html>