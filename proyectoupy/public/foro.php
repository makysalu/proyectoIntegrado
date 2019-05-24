<?php
  session_start();
  require './../src/BBDD.php';
  require './../src/Foro.php';
  $f=new Foro();
  $f->conexion();
  $lista=$f->listarTemas();
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Foro</title>
    <link rel="stylesheet" href="css/stiles.css">
  </head>
  <body>
    <div id="textoImagen">Foro</div>
        <div><img id="sectionFlechaForo" src="./images/flecha.png"/></div>
<?php include "./assets/navegador.php"; ?>

<div class="colorForo"></div>

<div class="fondoForo"><img id="sectionImagen" src="./images/fondoForo.jpg"/></div>
<div id="textoIndex">
  <h1 id="tituloPagina">Indice de temas</h1>
</div>
            <section id="main-contentForo">
          <table id="tablaForo">
            <tr>
              <th>Tema</th>
            </tr>
    <div id="forum">
      <?php
      foreach ($lista as $tema) {
                echo "<tr>";
                echo "<td class='tema'><a href='./foro-inside.php?tema=".$tema['Tema']."'>".$tema['Tema']."</a></td>";}
        echo "</tr>";
?>
    </div>
  </table>

</section>
    <?php include "./assets/piedepagina.php"; ?>

  </body>
</html>
