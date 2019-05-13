<?php
require "./../src/BBDD.php";
require "./../src/Usuario.php";
$u = new Usuario();
$error=$u->comprobarCampos($_POST);
if (isset($error)) {
 if($error===false){
   $error=$u->conexion();
   if ($error==false){
          $error=$u->insertarusuario($_POST);
          if ($error==false){
              header("Location: http://localhost/web/programacion/evaluacion3/proyectoupy/public/login.php");
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
  <!-- Diego Moreno - registro -->
	<meta charset="utf-8">
	<title>Cabecera fija</title>
	<link rel="stylesheet" href="css/stiles.css">
</head>

<body>

	<?php include "./assets/navegador.php"; ?>

  <script type="text/javascript" src="js/registro.js"></script>
    <section>
      <?php
      if(isset($error)){
          if($error!="") echo "<h4>ERROR:$error</h4>";
      }
      ?>
        <form class="formularioregistro" action="registro.php" method="post" onsubmit="return comprobar()">
      <div class="registro">
          <h2>1- Datos Personales</h2>
          <label for="nombre"><strong>Nombre: </strong></label><br><input type="text" name="Nombre" value placeholder=" Nombre" id="Nombre" require><br></br>
          <label for="nombre"><strong>Apellidos: </strong></label><br><input type="text" name="Apellidos" value placeholder=" Apellidos" id="Apellidos" required><br></br>
          <label for="nombre"><strong>DNI: </strong></label><br><input type="text" name="DNI" value placeholder=" DNI" id="DNI" ><br></br>
          <label for="fecha_nacimiento"><strong>Fecha de nacimiento: </strong><br></label><input type="date" name="Fecha_nacimiento" value placeholder="" id="Fecha_nacimiento" required><br></br>
          <label for="ciudad"><strong>Ciudad: </strong></label><br><input type="text" name="Ciudad" value placeholder=" Localidad" id="Ciudad" required><br></br>
          <label for="email"><strong>Email: </strong></label><br><input type="email" name="Email" value placeholder=" Correo electrónico" id="Email" required><br></br>
          <label for="contrasena"><strong>Contraseña: </strong><br></label><input type="password" name="Contrasena" value placeholder=" Crear una contraseña" id="Contrasena" required><br></br>
          <label for="contrasena2"><strong>Contraseña: </strong><br></label><input type="password" name="Contrasena2" value placeholder =" Repetir la contraseña" id="Contrasena2" required><br></br>
      </div>
      &nbsp&nbsp
      <div class="cuota" >
          <h2>2- Cuota Mensual</h2>
          <h3>Cuotas</h3>
          <input type="radio" name="type" value="9" id="cuota9" checked> Cuota Ordinaria: <strong>9€/mes</strong><br></label>
          <input type="radio" name="type" value="15" id="cuota15"> Cuota Ordinaria plus: <strong>15€/mes</strong><br></label>
          <input type="radio" name="type" value="25" id="cuota25"> Cuota Contributiva: <strong>25€/mes</strong><br>
          <input type="radio" name="type" value="30" id="cuota30"> Cuota Generosa: <strong>30€/mes</strong><br>
          <h3>Cuotas especiales</h3>
          <input type="radio" name="type" value="5" id="cuota5"> Cuota Reducida: 5€/mes si eres estudiante, en situacion de paro o jubilado.<br>
          <input type="radio" name="type" value="3" id="cuota3"> Cuota Joven: 3€/mes para menores de 23 años.<br>
          <input type="radio" name="type" value="1" id="cuota1"> Cuota Simbolica: 1€/mes para situaciones economicas especiales.<br>
      </div>
      <div class="Enviobotonregistro">
        <h2>3- Aceptar Terminos</h2>
        <div class="clear caja_form" style="width:100%; height:auto"><h3>Información de protección de datos</h4>
          <div class="clear">
            <div class="clear" style=" border: 1px solid #CCC;">
                <div class="clear" style="height:150px; overflow-y: scroll; overflow-x: hidden; padding:5px; color:#666; font-size:0.85em; text-align:left; background-color:#FFF">
                  <!--TEXTO LEGAL-->
                  <p>Responsable del tratamiento VOX ESPAÑA con domicilio en la  C/ Nicasio Gallego, 9. Madrid 28010. Correo electrónico del Delegado de Protección de Datos de VOX: <a href="mailto:DPD@voxespana.es">DPD@voxespana.es</a>
                  </p>
                  <p>
                  En nombre de VOX ESPAÑA tratamos la información que nos facilita para gestionar su AFILIACIÓN. Los datos proporcionados se conservarán durante los años necesarios para cumplir con las obligaciones legales. Los datos no se cederán a terceros salvo en los casos en que exista una obligación legal.
                  </p>
                  <p>
                  Usted tiene derecho a obtener confirmación sobre si en VOX España estamos tratando sus datos personales por tanto tiene derecho a acceder a sus datos personales, rectificar los datos inexactos o solicitar su supresión cuando los datos ya no sean necesarios, dirigiéndose por correo postal o de manera electrónica a las direcciones de cabecera acreditándose por medio de copia de su DNI.
                  </p>
                  <p>
                  Asimismo solicito su autorización para ofrecerle información del Partido VOX España e informarle como subscriptor y mantenerle en todo momento informado de nuestras noticias, agenda o propuestas por correo electrónico, cumpliendo todas las obligaciones en protección de datos que han sido enumeradas.
                  </p>
                  <!--TEXTO LEGAL-->
                </div>
              </div>
            </div>
            <br>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" valign="middle" align="left">
              <tbody>
                  <tr>
                      <td width="30"><img src="images/confirmar.png" width="25" height="25" alt="No acepto" onclick="javascript:confirmaYes()" style="float:none; margin-right:5px;"></td>
                      <td valign="middle" align="left"> He leído y acepto la información de Protección de Datos</td>
                  </tr>
              </tbody>
            </table>
          </div>

      </div>
      <input id="botonregistro" type="submit" value="Registrarse">
      </form>
    </section>

	<?php include "./assets/piedepagina.php"; ?>

</body>
</html>
