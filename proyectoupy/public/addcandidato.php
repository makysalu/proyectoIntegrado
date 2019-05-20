<?php
  session_start();
    if (!isset($_SESSION["admin"])) header("Location: login_admin.php");
    require "./../src/BBDD.php";
    require "./../src/Administrador.php";
    $a = new Administrador();
    $error=$a->comprobarCamposCandidato($_POST);
    if (isset($error)) {
     if($error===false){
       $error=$a->conexion();
       if ($error==false){
              $error=$a->insertarcandidato($_POST);
              if ($error==false){
                  //header("Location: http://localhost/web/programacion/evaluacion3/proyectoupy/public/login.php");
              }
       }
     }
    }
    $a->conexion();
    $resultado=$a->usuarios();
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
      <script type="text/javascript" src="js/js.js"></script>
      <section class="eliminar_usuario">
        <?php
          if(isset($error)){
            if($error!=""){echo "<h4>ERROR: $error</h4>";}
          }
        ?>
        <h1>Añadir Candidato</h1>
        <h3>Seleccionar Candidato</h3>
        <form class="select_delet" action="addcandidato.php" method="post" onsubmit="return AñadirCandidato()">
          <label for="Candidato"><strong>Candidato:</strong></label><select class="Candidato" name="Candidato" id="Candidato" style="margin-left: 20px; margin-top: 10px;">
            <?php
              foreach ($resultado as $usuario) {
                $id=$usuario["ID_usuario"];
                $nombre=$usuario["Nombre"];
                $apellidos=$usuario["Apellidos"];
                echo "<option value='$id'>$nombre $apellidos</option>";
              }
             ?>
          </select>
          <h3>Añadir Descripcion</h3>
          <div><label for="Descripcion"><strong>Descripcion: </strong></label><input type="text" name="Descripcion" value="" value placeholder=" Descripcion" id="Descripcion" required></div>
          <br></br>
          <input id="addcandidato"  type="submit" value="Añadir"></input>
        </form>
      </section>
      <?php include "./assets/piedepagina.php"; ?>
  </body>
</html>
