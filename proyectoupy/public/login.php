<?php
session_start();
  require "./../src/BBDD.php";
  require "./../src/Usuario.php";
  $u = new Usuario();
  $error=$u->comprobarCamposlogin($_POST);
  if (isset($error)) {
   if($error===false){
     $error=$u->conexion();
     if ($error==false){
          $error=$u->loguear($_POST);
          if ($error==false){
                $_SESSION["user"]['Id_usuario']=$u->getId_Afiliado();
                $_SESSION["user"]['nombre']=$u->getNombre();
                $_SESSION["user"]['apellidos']=$u->getApellidos();
                $_SESSION["user"]['dni']=$u->getDNI();
                $_SESSION["user"]['fecha_nacimiento']=$u->getFecha_Nacimiento();
                $_SESSION["user"]['fecha_alta']=$u->getFecha_Alta();
                $_SESSION["user"]['foto']=$u->getFoto();
                $_SESSION["user"]['ciudad']=$u->getCiudad();
                $_SESSION["user"]['email']=$u->getEmail();
                $_SESSION["user"]['cuota']=$u->getCuota();
              header("Location: perfil_usuario.php");
          }
     }
   }
  }

if (isset($_GET["msg"])){
  echo "<script>alert('".$_GET["msg"]."');</script>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Diego Moreno - login -->
	<meta charset="utf-8">
	<title>Cabecera fija</title>
	<link rel="stylesheet" href="css/stiles.css">
</head>

<body>

	<?php include "./assets/navegador.php"; ?>

	<script type="text/javascript" src="js/js.js"></script>

	<section class="formulario">
		<div>
			<h2>Iniciar Afiliado</h2>
      <?php
        if(isset($error)){
          if($error!=""){echo "<h4>ERROR: $error</h4>";}
        }
      ?>
			<form class="formularioregistro" action="login.php" method="post" onsubmit="return comprobarLogin()">
				<label for="DNI"><strong>DNI: </strong></label><input type="DNI" name="DNI" value placeholder=" DNI" id="DNI" required><br></br>
				<label for="contrasena"><strong>Contraseña: </strong></label><input type="password" name="Contrasena" value placeholder=" Crear una contraseña" id="Contrasena" required><br></br>
				<span>Si no Tienes una cuenta <a href="registro.php">Afiliate</a></span>
				<input id="botonregistro" type="submit" value="Iniciar">
			</form>
		</div>
	</section>

	<?php include "./assets/piedepagina.php"; ?>

</body>
</html>
