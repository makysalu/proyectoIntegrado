<?php
  session_start();
    if (!isset($_SESSION["admin"])) header("Location:login_admin.php");
    require "./../src/BBDD.php";
    require "./../src/Administrador.php";
    $a = new Administrador();
    $a->conexion();
    $resultado=$a->usuarios();
    ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Eliminar Usuario</title>
    <link rel="stylesheet" href="css/stilesadmin.css">
  </head>
  <body>
    	<?php include "./assets/navegadoradmin.php"; ?>
      <section class="formulario">
        <div><h2>Eliminar Usuario</h2></div>
        <h3>Seleccionar Usuario</h3>
        <form class="select_delet" action="eliminar_usuario.php" method="post" required>
          <label for="afiliado"><strong>Afiliado:</strong></label><select class="User" name="User" id="User" style="margin-left: 20px; margin-top: 10px;">
            <?php
              foreach ($resultado as $usuario) {
                $id=$usuario["ID_usuario"];
                $nombre=$usuario["Nombre"];
                $apellidos=$usuario["Apellidos"];
                echo "<option value='$id'>$nombre $apellidos</option>";
              }
             ?>
          </select>
          <br></br>
          <input id="update_perfil"  type="submit" value="Eliminar"></input>
        </form>
      </section>
  </body>
</html>
