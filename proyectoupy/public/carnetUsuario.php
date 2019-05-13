<?php
session_start();
  if (!isset($_SESSION["user"])) header("Location: http://localhost/web/programacion/evaluacion3/proyectoupy/public/login.php");
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="./css/stiles.css">
     <!-- carnetUsuario - Diego Moreno -->
   </head>
   <body>
     <?php include "./assets/navegador.php"; ?>
     <section id="fichausuario">
       <header>
         <h1>FICHA DE SOCIO ULyC</h1>
         <div id="cabecerausuario">
           <div class="cabecerausuario" >
             <img id="imagen" src="images/logo.jpg" width="120" height="120"/>
           </div>
           <div class="cabecerausuario" id="cabeceraNsocio">
               <span><strong>Fecha: </strong><?php echo $_SESSION["user"]['fecha_alta'] ?></span><br><br>
               <span><strong>Nº Socio: </strong><?php echo $_SESSION["user"]['Id_usuario'] ?></span>
           </div>
           <div class="cabecerausuario">
             <p>
                 <span>C/MAESTRO CEBRIAN Nº 4 1º</span><br>
                 <span>23008 CATARROJA</span><br>
                 <span>TLF: 969 528 436</span><br>
                 <span>FAX: 969 634 782</span><br>
                 <span>ulyc@hotmail.com</span>
             </p>
           </div>
         </div>
       </header>
       <br>
       <article>
       <article id="datosficha">
         <header>
           <span>@ULyC</span>
         </header>
         <div id="carnetderecha">
           <div id="fotocarnet">
             <img src="images/fotocard.jpg" width="240" height="300"/>
           </div>
         </div>
         <div id="carnetizquierda">
           <div id="logocarnet">
             <img  src="images/logo.jpg" width="70" height="70"/>
             <span>ULyC</span>
           </div>
           <div id="datoscarnet">
             <span><strong>Carnet de Afiliado</strong></span><br>
             <span><?php echo $_SESSION['user']['nombre']; echo "&nbsp"; echo $_SESSION['user']['apellidos'] ?></span><br>
             <span><?php echo $_SESSION["user"]['dni'] ?></span><br>
             <span><?php echo $_SESSION["user"]['ciudad'] ?></span>
           </div>
         </div>
       </article>
     </section>
     <?php include "./assets/piedepagina.php"; ?>
   </body>
 </html>
