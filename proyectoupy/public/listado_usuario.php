<?php
  session_start();
    if (!isset($_SESSION["admin"])) header("Location:login_admin.php");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Listado usarios</title>
    <link rel="stylesheet" href="./css/stilesadmin.css">
    <!-- carnetUsuario - Diego Moreno -->
  </head>
  <body>
    <?php include "./assets/navegadoradmin.php"; ?>
    <section id="listado_usuario">
      <table whidt='2000px' border='1'>
        <tr>
          <th>DNI</th>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Fecha de nacimiento</th>
          <th>Ciudad</th>
          <th>Email</th>
          <th>Cuota</th>
        </tr>
      <?php
        require "./../src/BBDD.php";
        require "./../src/Usuario.php";
        $u = new Usuario();
        $u->conexion();
        $u->datosusuarios();

       ?>
     </table>
    </section>

  </body>
</html>
