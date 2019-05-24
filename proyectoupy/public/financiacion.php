<?php
  session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Fran - financiacion -->
    <link rel="stylesheet" href="css/stiles.css">
    <meta charset="utf-8">
    <title>Finaciación</title>

    </head>
  <body>
    <div id="textoImagen">CUENTAS Y PRESUPUESTOS</div>
                    <div><img id="sectionFlecha" src="./images/flecha.png"/></div>
  <?php include "./assets/navegador.php"; ?>
  <div class="colorCuentas"></div>
  <div class="fondoCuentas"><img id="sectionImagen" src="./images/fondoCuentas.jpg"/></div>
    <section>
      <p id="cuerpofinanciacion">
        Aquí encontrarás la información más relevante en el aspecto contable; balances, cuenta de pérdidas y ganancias, memoria y desglose de ingresos y gastos.
      </p>
    <center><a class="bottonfinanciacion" href="innovacion.php">Ver más</a></center>
  </section>
  <?php include "./assets/piedepagina.php"; ?>
</body>
</html>
