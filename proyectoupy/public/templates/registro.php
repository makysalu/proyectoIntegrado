<?php
if (isset($_GET["msg"])){
  echo "<script>alert('".$_GET["msg"]."');</script>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Cabecera fija</title>
	<link rel="stylesheet" href="css/stiles.css">
</head>

<body>

	<?php include "./assets/navegador.php"; ?>

<!--  <script type="text/javascript" src="js/registro.js"></script>-->
    <section class="formulario">
      <div >
        <h2>Crea una cuenta nueva</h2>
        <form class="formularioregistro" action="listadoUsuarios.php" method="post" onsubmit="return comprobar()">
          <label for="nombre"><strong>Nombre: </strong></label><input type="text" name="Nombre" value placeholder=" Nombre" id="Nombre" ><br></br>
          <label for="nombre"><strong>Apellidos: </strong></label><input type="text" name="Apellidos" value placeholder=" Apellidos" id="Apellidos" ><br></br>
          <label for="fecha"><strong>Fecha de nacimiento: </strong></label><input type="date" name="Fecha" value placeholder="" id="Fecha" ><br></br>
          <label for="ciudad"><strong>Ciudad: </strong></label><input type="text" name="Ciudad" value placeholder=" Localidad" id="Ciudad" required><br></br>
          <label for="email"><strong>Email: </strong></label><input type="email" name="Email" value placeholder=" Correo electrónico" id="Email" required><br></br>
          <label for="contrasena"><strong>Contraseña: </strong></label><input type="password" name="Contrasena" value placeholder=" Crear una contraseña" id="Contrasena" required><br></br>
          <label for="contrasena2"><strong>Contraseña: </strong></label><input type="password" name="Contrasena2" value placeholder =" Repetir la contraseña" id="Contrasena2" required><br></br>
          <input id="botonregistro" type="submit" value="Registrarse">
        </form>
      </div>
    </section>

	<?php include "./assets/piedepagina.php"; ?>

</body>
</html>
