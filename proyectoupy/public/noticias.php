<?php session_start();
  require "./../src/BBDD.php";
  require "./../src/Noticia.php";
  $a = new Noticia();
  $a->conexion();
  $listaNoticias=$a->Noticias()
   ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Inicio</title>
    <link rel="stylesheet" href="css/stiles.css">
  </head>
  <body>
    <?php include "./assets/navegador.php"; ?>
    <section id="noticias">
      <div class="tema">
        <p>noticias</p>
      <hr>
      <?php  foreach ($listaNoticias as $noticia) {

          echo "<div id='noticia'>";
          echo "<a id='linkNoticia' href=".$noticia['url'].">".$noticia['titulo']."<br></a>";
              echo "<a  href=".$noticia['url']." >"."<img src='images/".$noticia['imagen']."'"."width='200' height='200'/>"."<br></a>";
              echo $noticia['descripcion']."<br>";
              echo "<p id='public'>"."Fecha publicacion:".$noticia['fecha_publicacion']."<br>";
          echo "</div>";

      }
?>
</div>
    </section>
  </body>
      <?php include "./assets/piedepagina.php"; ?>
</html>
