<?php
  session_start();
    if (!isset($_SESSION["admin"])) header("Location: login_admin.php");
      require "./../src/BBDD.php";
      require "./../src/Administrador.php";
      $a = new Administrador();
      $a->conexion();
      $resultado=$a->candidatos();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Listado candidatos</title>
    <link rel="stylesheet" href="./css/stilesadmin.css">
    <!-- carnetUsuario - Diego Moreno -->
  </head>
  <body>
    <?php include "./assets/navegadoradmin.php"; ?>
    <section id="listado_candidatos">
      <table whidt='2000px' border='1'>
        <tr>
          <th>Nº Candidato</th>
          <th>DNI</th>
          <th>Nombre</th>
          <th>Apellidos</th>
          <th>Descripcion</th>
        </tr>

      <?php
      foreach ($resultado as $candidato) {
        $id=$candidato["id_candidato"];
        $nombre=$candidato["Nombre"];
        $apellidos=$candidato["Apellidos"];
        $descripcion=$candidato["descripcion"];
        echo "<tr>";
        echo "<td><a href=perfil_candidato.php?id_candidato=".$candidato['id_candidato']."><strong>".$candidato['id_candidato']."</strong></a></td>";
        echo "<td><a href=perfil.php?DNI=".$candidato['DNI']."><strong>".$candidato['DNI']."</strong></a></td>";
        echo "<td>$nombre</td>";
        echo "<td>$apellidos</td>";
        echo "<td>$descripcion</td>";
        echo "</tr>";
      }
       ?>
     </tr>
     </table>
    </section>

  </body>
</html>
