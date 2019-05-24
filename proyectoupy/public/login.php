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
              //  $_SESSION["user"]['foto']=$u->setFoto;
                $_SESSION["user"]['ciudad']=$u->getCiudad();
                $_SESSION["user"]['email']=$u->getEmail();
                $_SESSION["user"]['cuota']=$u->getCuota();
              header("Location: index.php");
          }

     }
   }
  }

if (isset($_GET["msg"])){
  echo "<script>alert('".$_GET["msg"]."');</script>";
}
/*$adServer = "ldap://10.2.72.142";
$ldap = ldap_connect($adServer);
$username = 'Administrador';
$password = '123cic3,T';

$ldaprdn = 'winsistemas' . "\\" . $username;
ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);
$bind = @ldap_bind($ldap, $ldaprdn, $password);
if ($bind) {
  $msg = "Estás logueado como correctamente al Active Directory";
} else {
  $msg = "Usuario o contraseña incorrectos";
}echo "<p id='mensajeActiveDirectory'>".$msg."</p>";*/
 ?>

<!DOCTYPE html>
<html lang="es">
<head>
  <!-- Diego Moreno - login -->
	<meta charset="utf-8">
	<title>Iniciar sesión</title>
	<link rel="stylesheet" href="css/stiles.css">
</head>

<body>

  <div id="textoImagen">Accede</div>
  <?php include "./assets/navegador.php"; ?>
  <div class="colorAcceder"></div>
  <div class="fondoAcceder"><img id="sectionImagen" src="./images/fondoAcceder.jpg"/></div>
	<script type="text/javascript" src="js/registro.js"></script>

	<div class="formulario">
		<div>
			<h2>Iniciar Afiliado</h2>
      <?php
        if(isset($error)){
          if($error!=""){echo "<h4>ERROR: $error</h4>";}
        }
      ?>
			<form class="formularioregistro" action="login.php" method="post" onsubmit="return comprobarlogin()" required>
				<label for="DNI"><strong>DNI: </strong></label><input type="DNI" name="DNI" value placeholder=" DNI" id="DNI" required><br></br>
				<label for="contrasena"><strong>Contraseña: </strong></label><input type="password" name="Contrasena" value placeholder=" Crear una contraseña" id="Contrasena"><br></br>
				<div id="registroAfiliad"><span>Si no Tienes una cuenta <a href="registro.php">Afiliate</a></span></div>
				<input type="submit" value="Iniciar" id="botonregistro">
			</form>
		</div>
	</div>
</body>
</html>
