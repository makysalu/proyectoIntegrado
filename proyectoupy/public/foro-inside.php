<?php
  session_start();
  require './../src/BBDD.php';
  require './../src/Foro.php';
  $tema=$_GET['tema'];
  $f=new Foro();
  $f->conexion();
  $f->insertarComent($tema,$_POST);
  $lista=$f->forear($tema);
  $lista2=$f->forear2($tema);
 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/stiles.css">
  </head>
  <body>
<?php include "./assets/navegador.php"; ?>

<div class="colorForo-inside"></div>

<div class="fondoForo-inside"><img id="sectionImagen" src="./images/fondoForo.jpg"/></div>

    <!-- <div id="forum"> -->

        <?php foreach ($lista as $result) {
          echo  "<div id='textoIndex'>";
            echo  "<h1 id='tituloPagina'>".$result['Tema']."</h1>";
            echo "</div>";?>
            <section id="noticiasActualidad">
                    <form id="forum" class="" action="foro-inside.php?tema=<?php echo $tema; ?>" method="post">
            <?php
          foreach ($lista2 as $result2) {

            echo "<div id='comentarios'>";
            echo "<img id='imagenUser' src='./images/user.png'><p id='nombreUserForo'>Anonimo</p></img>";
            echo "<div id='comentarios-inside'>"."<p id='fechaPublicCoement'>"."Fecha publicación: ".$result2['Fecha_Publicacion']."<p id='temaComentarios'>"."RE: ".$result2['Tema']."</p>"."<p id='textoComentario'>".$result2['Comentario']."</p>"."</div><br>";
            echo "</div>";
          }
          echo "<div id='Ncomentarios'>";
          echo "<textarea id='Ncomentarios-inside' maxlength='500' name='NComentario' value=''>"."</textarea><br>";
          echo "<input type='submit' name='insertNComentario' value='Agregar comentario'>";
          echo "</div>";
        } ?>
      </form>
    </section>
    <!-- </div> -->
    <?php include "./assets/piedepagina.php"; ?>
  </body>
</html>
