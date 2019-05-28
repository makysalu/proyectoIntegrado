<?php session_start();
  require "./../src/BBDD.php";
  require "./../src/candidato.php";
  $a = new Candidato();
  $a->conexion();
  $listaCandidatos=$a->Candidatos();
   ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title>Candidatos</title>
    <link rel="stylesheet" href="css/stiles.css">
  </head>
  <body>
    <div id="textoImagen">Conoce a nuestros candidatos</div>
        <div><img id="sectionFlecha" src="./images/flecha.png"/></div>
<?php include "./assets/navegador.php"; ?>

<div class="colorCandidatos"></div>

<div class="fondoCandidatos"><img id="sectionImagen" src="./images/fondoCandidatos.jpeg"/></div>
<div id="textoIndex">
<h1 id="tituloPagina">Candidatos</h1>
</div>
    <section id="candidatos">
      <div class="tema">
      <?php  foreach ($listaCandidatos as $candidato) {
          echo "<div id='candidato'>";
          echo "<img id='imagenCandidato' src='images/".$candidato['Foto']."'"."width='200' height='200'/>"."<br></a>";
echo "<div id='nombreCandidato'>".$candidato['Nombre']." ".$candidato['Apellidos']."</div><br>";
              echo "<p id='descripcionCandidato'>".$candidato['descripcion']."</p><br>";
          echo "</div>";

      }
?>
</div>
    </section>
  </body>
      <?php include "./assets/piedepagina.php"; ?>
</html>
