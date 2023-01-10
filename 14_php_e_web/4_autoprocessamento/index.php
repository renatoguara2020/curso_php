<?php

  $method = $_SERVER['REQUEST_METHOD'];

  if(isset($_POST['nome']) && ($_POST['nome'] != null)) {

    $nome = $_POST['nome'];

    if(isset($_POST['email']) && ($_POST['email'] != null)) {
      $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if($method == 'GET'):
  ?>
    <form action="index.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Digite seu nome">
        </div>
        <div>
            <input type="submit" value=Enviar>
        </div>
    </form>
    <?php
    else:
  ?>
    <h1>O seu nome é <?= $nome ?></h1>
    <?php
    endif;
  ?>
</body>

</html>