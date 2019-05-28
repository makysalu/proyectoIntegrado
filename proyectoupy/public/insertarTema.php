<?php
  session_start();
    if (!isset($_SESSION["admin"])) header("Location:login_admin.php");
    require "./../src/BBDD.php";
    require "./../src/Foro.php";
      $u = new Foro();
        $u->conexion();
        $listaTema=$u->listarTemas();



 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="./css/stilesadmin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- noticiasAdmin - Borja Hervás -->
  </head>
  <body>
    <?php include "./assets/navegadoradmin.php"; ?>
    <section id="listado_noticias">
      <form class="" action="#" method="post">
          <label for="titulo"><strong>Tema: </strong></label><br>
          <input type="text" name="tema" id="tema" required><br></br>
          <input type="submit" name="" value="Aceptar">
      </form>
      <table whidt='2000px' border='1'>
        <tr>
          <th>Tema</th>
          <th>Fecha Publicacion</th>
        </tr>
        <form class="" action="insertarTemaAdmin.php" method="post">
        <?php
        foreach ($listaTema as $Tema) {
            echo "<tr>";
            echo "<td>".$Tema['Tema']."</td>";
            echo "<td>".$Tema['Fecha_Publicacion']."</td>";
            echo "</div>";
        }
      echo "<input type='submit' value='Actualizar' hidden class='activar' id=desact onclick='disable()'>";?>
                </form>
     </table>

    </section>
<script type="text/javascript" src="./js/activarInput.js">

</script>
  </body>
</html>
