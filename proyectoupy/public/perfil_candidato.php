<?php
  session_start();
    if (!isset($_SESSION["admin"])) header("Location: login_admin.php");

    require "./../src/BBDD.php";
    require "./../src/Administrador.php";
    $a = new Administrador();
    $error=$a->conexion();
    if ($error==false){
      if (isset($_GET['id_candidato'])){
        $id_candidato=$_GET['id_candidato'];
        $resultado=$a->datoscandidato($id_candidato);
        foreach ($resultado as $candidato) {
          $id=$candidato["id_candidato"];
          $nombre=$candidato["Nombre"];
          $apellidos=$candidato["Apellidos"];
          $descripcion=$candidato["descripcion"];
        }
        $_SESSION["candidato"]['id_candidato']=$id;
        $_SESSION["candidato"]['nombre']=$nombre;
        $_SESSION["candidato"]['apellidos']=$apellidos;
        $_SESSION["candidato"]['descripcion']=$descripcion;
      }
    $error=$a->comprobarPerfilCandidato($_POST);
    if (isset($error)) {
    //  var_dump($_POST);
     if($error===false){
            $error=$a->actualizarPerfilcandidato($_POST);
            if ($error==false){
              $id=$_POST["id_candidato"];
              $nombre=$_POST["Nombre"];
              $apellidos=$_POST["Apellidos"];
              $descripcion=$_POST["descripcion"];
            }
            $_SESSION["candidato"]['id_candidato']=$id;
            $_SESSION["candidato"]['nombre']=$nombre;
            $_SESSION["candidato"]['apellidos']=$apellidos;
            $_SESSION["candidato"]['descripcion']=$descripcion;
          }
        }
    }
 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="utf-8">
 	<title>Perfil candidato</title>
 	<link rel="stylesheet" href="css/stilesadmin.css">
 </head>

 <body>

 	<?php include "./assets/navegadoradmin.php"; ?>

 	 <script type="text/javascript" src="js/js.js"></script>

 	<section class="perfil_candidatox">
 		<div>
 			<h2>Perfil Candidato</h2>
       <?php
         if(isset($error)){
           if($error!=""){echo "<h4>ERROR: $error</h4>";}
         }
       ?>
         <form class="formulario_perfil" action="perfil_candidato.php" method="post" onsubmit="return comprobarPerfil_candidato()">
           <div><label for="nombre"><strong>Nombre: </strong></label><input type="text" name="Nombre" value="<?php echo $_SESSION["candidato"]['nombre'] ?>" value placeholder=" Nombre" id="Nombre" required readonly></div>
           <div><label for="apellidos"><strong>Apellidos: </strong></label><input type="text" name="Apellidos" value="<?php echo $_SESSION["candidato"]['apellidos'] ?>" value placeholder=" Apellidos" id="Apellidos" required readonly></div>
           <div><label for="id_candidato"><strong>ID Candidato: </strong></label><input type="number" name="id_candidato" value="<?php echo $_SESSION["candidato"]['id_candidato'] ?>" value placeholder=" id_candidato" id="id_candidato" required readonly></div>
           <div><label for="descripcion"><strong>Descripcion: </strong></label><input type="text" name="descripcion" value="<?php echo $_SESSION["candidato"]['descripcion'] ?>" value placeholder=" descripcion" id="descripcion" required></div>
           <br></br>
           <input id="update_perfil"  type="submit" value="Actualizar"></input>
         </form>
 		</div>
 	</section>

 	<?php include "./assets/piedepagina.php"; ?>

 </body>
 </html>
