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
    <title>Eliminar Candidato</title>
    <link rel="stylesheet" href="css/stilesadmin.css">
  </head>
  <body>
    	<?php include "./assets/navegadoradmin.php"; ?>
      <section class="eliminar_usuario">
        <h1>Eliminar Candidato</h1>
        <h3>Seleccionar Candidato</h3>
        <form class="select_delet" action="eliminar_candidato.php" method="post" required>
          <label for="Descripcion"><strong>Candidato:</strong></label><select class="Candidato" name="Candidato" id="Candidato" style="margin-left: 20px; margin-top: 10px;">
            <?php
              foreach ($resultado as $usuario) {
                $id=$usuario["id_candidato"];
                $nombre=$usuario["Nombre"];
                $apellidos=$usuario["Apellidos"];
                echo "<option value='$id'>$nombre $apellidos</option>";
              }
             ?>
          </select>
          <br></br>
          <input id="deletcandidato"  type="submit" value="Eliminar"></input>
        </form>
      </section>
      <?php include "./assets/piedepagina.php"; ?>
  </body>
</html>
