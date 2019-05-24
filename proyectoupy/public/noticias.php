<?php session_start();
  require "./../src/BBDD.php";
  require "./../src/noticias.php";
  $a = new Noticias();
  $a->conexion();
  $listaNoticias=$a->mostrarNoticia();
   ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Noticias</title>
    <link rel="stylesheet" href="css/stiles.css">
  </head>
  <body>
    <div id="textoImagen">Conoce las noticias de la actualidad</div>
                    <div><img id="sectionFlecha" src="./images/flecha.png"/></div>
  <?php include "./assets/navegador.php"; ?>
  <div class="colorContacto"></div>
  <div class="fondoContacto"><img id="sectionImagen" src="./images/fondoContacto.jpg"/></div>
  <div id="textoIndex">
    <h1 id="tituloPagina">Noticias</h1>
  </div>
    <section id="noticiasActualidad">
      <?php  foreach ($listaNoticias as $noticia) {

          echo "<div id='noticias'>";
          echo "<article class='actualidad'>"."<img id='imagenNoticia' src=./images/Noticias/".$noticia['Foto'].">"."</article>";
          echo "<br>";
          echo "<p id='tituloNoticia'><label>".$noticia['titulo']."</label></p>";
          echo "<p id='descrpcionNoticiaIndex'><label>".utf8_decode($noticia['descripcion'])."</label></p>";
          echo "</div>";
          echo "</div>";

      }
?>
    </section>
  </body>
      <?php include "./assets/piedepagina.php"; ?>
</html>
