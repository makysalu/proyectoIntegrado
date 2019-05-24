<?php   session_start();
 ?>
 <!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <!-- Borja - contacto -->
    <meta charset="utf-8">
    <title>Contactar</title>
        <link rel="stylesheet" href="css/stiles.css">
  </head>
  <body>
    <div id="textoImagen">¿Necesitas que te ayudemos?</div>
                    <div><img id="sectionFlecha" src="./images/flecha.png"/></div>
  <?php include "./assets/navegador.php"; ?>
  <div class="colorContacto"></div>
  <div class="fondoContacto"><img id="sectionImagen" src="./images/fondoContacto.jpg"/></div>
  <div id="textoIndex">
    <h1 id="tituloPagina">Contactar</h1>
  </div>
    <section class="conctacto">
        <div id="cont">
          <article class="cajas">
          <div class="caja1">
            <p id="contactoTit">Contacto<p>
              <p class="textoContacto">Tlf: 91 141 96 07</p>
              <p class="textoContacto">Fax: 915 99 19 08 </p>
          </div>
          <div class="caja2">
            <p id="contactoTit">Sede<p>
              <p class="textoContacto">Av. Generalitat Valenciana</p>
              <p class="textoContacto">Horario de invierno: de septiembre a junio de lunes a jueves 10:00h a 14:00h y de 16:00 a 20:00h. y los viernes 9:00h a 14:00h y de 16:00 a 18:00h.</p>
                <p class="textoContacto">Horario de verano: Julio y agosto de 10:00h a 15:00h.</p>
          </div>
        </article>
        <br>

       </div>
       <div id="cont2">
         <article class="mapa">
              <p id="contactoTit">Ubicación<p>
         </article>
         <iframe id="mapaContacto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12331.787041712412!2d-0.4124991134753606!3d39.4027105219323!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604e8431a1a0d5%3A0x5a304b8e8b155611!2sAv.+Generalitat+Valenciana%2C+46470+Catarroja%2C+Val%C3%A8ncia!5e0!3m2!1ses!2ses!4v1558650147945!5m2!1ses!2ses" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
       </div>
      </section>
  </body>
</html>
