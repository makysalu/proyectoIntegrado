<?php session_start();
  require "./../src/BBDD.php";
  require "./../src/Cuentas.php";
  $a = new Cuentas();
  $a->conexion();
  $listacuentas=$a->cuentas();
   ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <link rel="stylesheet" href="css/stiles.css">
    <meta charset="utf-8">
    <title>innovacion</title>
  </head>
  <body>

<?php include "./assets/navegador.php"; ?>
<div class="colorInnovacion"></div>
<div class="fondoInnovacion"><img id="sectionImagen" src="./images/fondoCuentas.jpg"/></div>
<div id="textoIndex">
  <h1 id="tituloPagina">Cuentas</h1>
</div>
    <!-- porfavor respetar la sintasis de html5 section, article y aside -->
    <section id="content_inovacion">
      <div id="pepe">
        <p>El 26 de junio de 2018 fueron presentadas las cuentas correspondientes al ejercicio 2017 ante el Tribunal de Cuentas. Previamente a su aprobación y remisión al Tribunal de Cuentas, las Cuentas del Partido Popular se someten al correspondiente informe de control interno de acuerdo al siguiente procedimiento.<br>
        <a class="a-inovacion" HREF="informeTribunal.html" TARGET="_BLANK">VER INFORME</a></p>
        <p>
          <span>El último informe de fiscalización del Tribunal de Cuentas corresponde a los ejercicios 2014 y 2015 y se publica en el año 2017.</span>
      <ul>
            <?php foreach ($listacuentas as $cuenta) {
              echo "<li><a class='a-inovacion' href=./media/".$cuenta['archivo'].">".$cuenta['titulo']."</a></li>";
            } ?>
          </ul>
        </div>
        </p>

    </section>
  </body>
      <?php include "./assets/piedepagina.php"; ?>
 </html>
