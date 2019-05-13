<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <!-- Borja - contacto -->
    <meta charset="utf-8">
    <title></title>
        <link rel="stylesheet" href="css/stiles.css">
  </head>
  <body>
  <?php include "./assets/navegador.php"; ?>
    <section class="conctacto">
      <h1><span>Contaco ULyC</span></h1>
        <div id="cont">
          <article class="cajas">
          <div class="caja1">
            <p id="contactoTit">Contacto<p>
          </div>
          <div class="caja2">
            <p id="contactoTit">Sede<p>
          </div>
        </article>
        <br>
        <article class="form">
          <div class="cajaForm">
            <p id="contactoTit">Sede<p>
        				<form class="" action="index.html" method="post">
        				  <p><span id="titulo"><strong>Nombre:</strong></span>
        					<input type="text"></p>
                  <p><span id="titulo"><strong>Apellido:</strong></span>
        					<input type="text"></p>
        				  <p><span id="titulo"><strong>E-Mail:</strong></span>
        					<input type="email"></p>
        				<p> <span id="titulo"><strong>Mensaje:</strong></span>
                <textarea form="usrform" placeholder="Escribe aquí lo que quieras" required></textarea></p>
        	       <input type="submit" value="Enviar" onclick="alert('Esto sólo es una visualización previa!'); return false;"></p>
               </form>
             </div>
         </article>
       </div>
       <div id="cont2">
         <article class="mapa">
              <p id="contactoTit">Ubicación<p>
         </article>
       </div>
      </section>
       <?php include "./assets/piedepagina.php"; ?>
  </body>
</html>
