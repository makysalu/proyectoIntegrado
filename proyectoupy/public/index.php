<?php
  session_start();
  require "./../src/BBDD.php";
  require "./../src/noticias.php";
  $u = new Noticias();
  $u->conexion();
  $listarUltimasNoticias=$u->mostrarUltimasNoticias();
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <!-- Diego Moreno - index -->
    <meta charset="utf-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/stiles.css">
        <link rel="stylesheet" href="css/scroll.css">
  </head>
  <body>
            <div id="textoImagen">Libertad y oportunidad para todos.</div>
                <div><img id="sectionFlecha" src="./images/flecha.png"/></div>
    <?php include "./assets/navegador.php"; ?>

    <div class="color"></div>

    <div class="color2"><img id="sectionImagen" src="./images/fondoIndex.jpg"/></div>
    <div id="textoIndex">
      <h1 id="tituloPagina">ÚLTIMAS NOTICIAS</h1>
    </div>
    <section id="main-content">

<?php foreach ($listarUltimasNoticias as $ultimasNoticias){
        echo "<div id='noticias'>";
echo "<article class='actualidad'>"."<img id='imagenNoticia' src=./images/Noticias/".$ultimasNoticias['Foto'].">"."</article>";
echo "<br>";
echo "<p id='tituloNoticia'><label>".$ultimasNoticias['titulo']."</label></p>";
echo "<p id='descrpcionNoticiaIndex'><label>".utf8_decode($ultimasNoticias['descripcion'])."</label></p>";
echo "</div>";

} ?>

    </section>

    <script type="text/javascript" src="./js/scroll.js"></script>
    <?php include "./assets/piedepagina.php"; ?>
  </body>
</html>
