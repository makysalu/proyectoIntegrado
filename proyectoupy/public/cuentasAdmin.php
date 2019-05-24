<?php
  session_start();
    if (!isset($_SESSION["admin"])) header("Location:login_admin.php");
      require "./../src/BBDD.php";
      require "./../src/Cuentas.php";
      $a = new Cuentas();
      $a->conexion();
      $listacuentas=$a->cuentas();

     ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/stilesadmin.css">
    <!-- carnetUsuario -Francisco José Ferrandis Cortés -->
  </head>
  <body>
    <?php include "./assets/navegadoradmin.php"; ?>
    <section id="listado_cuentas">
      <form class="" action="insertarCuenta.php" method="post">
        <label for="titulo">Título</label>
        <br>
        <input type="text" name="titulo" id="titulo" value="" required>
        <div id="hidden1" style="display:none;">No puede dejarse en blanco</div>
        <br><br>
        <label for="Archivo">Archivo</label>
          <br>
        <input type="file" name="archivo" id="archivo" value="" required>
        <br><br>
        <input type="submit" value="enviar"  onclick="return comprobar()">
        </form>
      <table whidt='2000px' border='1'>
        <tr>
          <th>titulo</th>
          <th>archivo</th>
        </tr>
        <?php foreach ($listacuentas as $cuenta) {
          echo "<tr>";
          echo "<td>".$cuenta['titulo']."</td> ";
          echo "<td>".$cuenta['archivo']."</td>";
          echo "</tr>";
        } ?>
     </table>
    </section>

  </body>
</html>
