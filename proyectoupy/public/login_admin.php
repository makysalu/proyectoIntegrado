<?php
session_start();
  require "./../src/BBDD.php";
  require "./../src/Administrador.php";
  if (isset($_SESSION["admin"])) header("Location:listado_usuario.php");
  $a = new administrador();
  $error=$a->comprobarCamposlogin($_POST);
  if (isset($error)) {
   if($error===false){
     $error=$a->conexion();
     if ($error==false){
          $error=$a->loguear($_POST);
          if ($error==false){
                $_SESSION["admin"]['Id_administrador']=$a->getId_Administrador();
                $_SESSION["admin"]['nombre']=$a->getNombre();
                $_SESSION["admin"]['apellidos']=$a->getApellidos();
                $_SESSION["admin"]['dni']=$a->getDNI();
                $_SESSION["admin"]['email']=$a->getEmail();
                $_SESSION["admin"]['cuota']=$a->getContrasena();

              header("Location: listado_usuario.php");
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
	<title>Login admin</title>
	<link rel="stylesheet" href="css/stilesadmin.css">
</head>

<body>

	<?php include "./assets/navegadoradmin.php"; ?>

	<script type="text/javascript" src="js/registro.js"></script>

	<section class="formulario">
		<div>
			<h2>Iniciar Administrador</h2>
      <?php
        if(isset($error)){
          if($error!=""){echo "<h4>ERROR: $error</h4>";}
        }
      ?>
			<form class="formularioregistro" action="login_admin.php" method="post" onsubmit="return comprobarlogin()" required>
				<label for="DNI"><strong>DNI: </strong></label><input type="DNI" name="DNI" value placeholder=" DNI" id="DNI" required><br></br>
				<label for="contrasena"><strong>Contraseña: </strong></label><input type="password" name="Contrasena" value placeholder=" Crear una contraseña" id="Contrasena"><br></br>
				<input id="botonregistro" type="submit" value="Iniciar">
			</form>
		</div>
	</section>



</body>
</html>
