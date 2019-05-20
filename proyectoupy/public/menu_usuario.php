<?php
  session_start();
    if (!isset($_SESSION["user"])) header("Location: login.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/stiles.css">
    <!-- Diego Moreno - menu_usuario -->
  </head>
  <body>
    <?php include "./assets/navegador.php"; ?>
    <section id="menu_usuario">
      <header>
        <h1>AFILIADO ULyC</h1>
      </header>
      <article id="opcion_usuario">
        <a class="opcion_usuario" href="perfil_usuario.php">Perfil</a>
        <a class="opcion_usuario" href="carnetUsuario.php">Carnet de Afiliado</a>
        <a class="opcion_usuario" href="carnetUsuario.php">Carnet de Afiliado</a>
      </article>
    </section>
    <?php include "./assets/piedepagina.php"; ?>
  </body>
</html>
