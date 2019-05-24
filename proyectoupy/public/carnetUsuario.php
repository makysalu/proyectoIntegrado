<?php
session_start();
  if (!isset($_SESSION["user"])) header("Location: login.php");
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
     <div id="textoImagen">Aquí podras ver tu carnet de afiliado.</div>
         <div><img id="sectionFlecha" src="./images/flecha.png"/></div>
<?php include "./assets/navegador.php"; ?>
<div class="fondoColor"></div>
<div class="fondoPerfil"><img id="sectionImagen" src="./images/fondoCarnet.jpeg"/></div>
<div id="textoIndex">
  <h1 id="tituloPagina">FICHA DE SOCIO</h1>
</div>
     <section id="fichausuario">
       <header>
         <div id="cabecerausuario">
           <div class="cabecerausuario" >
             <img id="imagen" src="images/logo.jpeg" width="120" height="120"/>
           </div>
           <div class="cabecerausuario" id="cabeceraNsocio">
               <span><strong>Fecha: </strong><?php echo $_SESSION["user"]['fecha_alta'] ?></span><br><br>
               <span><strong>Nº Socio: </strong><?php echo $_SESSION["user"]['Id_usuario'] ?></span>
           </div>
           <div class="cabecerausuario">
             <p>
                 <span>Av. Generalitat Valenciana Nº 4 1º</span><br>
                 <span>23008 CATARROJA</span><br>
                 <span>Tlf: 91 141 96 07</span><br>
                 <span>Fax: 915 99 19 08</span><br>
                 <span>upep@hotmail.com</span>
             </p>
           </div>
         </div>
       </header>
       <br>
       <article>
       <article id="datosficha">
         <header>
           <span>@UpeP</span>
         </header>
         <div id="carnetderecha">
           <div id="fotocarnet">
             <img src="images/user.jpg" width="240" height="300"/>
           </div>
         </div>
         <div id="carnetizquierda">
           <div id="logocarnet">
             <img  src="images/logo.jpeg" width="70" height="70"/>
             <span>UpeP</span>
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
