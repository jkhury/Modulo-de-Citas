<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /php-login');
  }
  require 'PHP2/conexionBD.php';

  if (!empty($_POST['usuario']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT UsuarioID, usuario, password FROM usuario WHERE usuario = :usuario');
    $records->bindParam(':usuario', $_POST['usuario']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['UsuarioID'];
      header("Location: /php-login");
    } else {
      $message = 'Error De Contraseña';
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
body {
  background-image: url("Img/background.png");
}
</style>

  </head>
  <body>
    <?php require 'partials/headerlog.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <form action="login.php" method="POST">
    <h1>Iniciar sesìon</h1>
    <img src="Img/Logo_sf.png" alt="Foto" width="35%" height="35%">
      <input name="usuario" type="text" placeholder=" Usuario">
      <input name="password" type="password" placeholder="Contraseña">
      <input type="submit" value="Submit">
    </form>
  </body>
</html>