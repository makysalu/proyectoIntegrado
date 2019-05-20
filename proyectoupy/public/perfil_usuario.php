<?php
  session_start();
    if (!isset($_SESSION["user"])) header("Location: http://localhost/web/programacion/evaluacion3/proyectoupy/public/login.php");
  require "./../src/BBDD.php";
  require "./../src/Usuario.php";
  $u = new Usuario();
  $error=$u->comprobarPerfil($_POST);
  if (isset($error)) {
   if($error===false){
     $error=$u->conexion();
     if ($error==false){
          $error=$u->actualizarPerfil($_POST);
          if ($error==false){
                $_SESSION["user"]['Id_usuario']=$u->getId_Afiliado();
                $_SESSION["user"]['nombre']=$u->getNombre();
                $_SESSION["user"]['apellidos']=$u->getApellidos();
                $_SESSION["user"]['dni']=$u->getDNI();
                $_SESSION["user"]['fecha_nacimiento']=$u->getFecha_Nacimiento();
                $_SESSION["user"]['fecha_alta']=$u->getFecha_Alta();
              //  $_SESSION["user"]['foto']=$u->setFoto;
                $_SESSION["user"]['ciudad']=$u->getCiudad();
                $_SESSION["user"]['email']=$u->getEmail();
                $_SESSION["user"]['cuota']=$u->getCuota();

              header("Location: http://localhost/web/programacion/evaluacion3/proyectoupy/public/perfil_usuario.php");
          }
     }
   }
  }
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="./css/stiles.css">
   </head>
   <body>
     <?php include "./assets/navegador.php"; ?>
     <script type="text/javascript" src="js/js.js"></script>

     <section id="fichausuario">
       <?php
       if(isset($error)){
           if($error!="") echo "<h4>ERROR:$error</h4>";
       }
       ?>
       <header>
         <h1>FICHA DE <?php echo strtoupper($_SESSION["user"]['nombre']); ?></h1>
        <!-- <div id="cabecerausuario">
           <div class="cabecerausuario" >
             <img id="imagen" src="images/logo.jpg" width="120" height="120"/>
           </div>
           <div class="cabecerausuario" id="cabeceraNsocio">
               <span><strong>Fecha: </strong>30/06/1994</span><br><br>
               <span><strong>Nº Socio: </strong>2</span>
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
         </div>-->
       </header>
       <article class="perfil">
         <div>
           <form class="formularioregistro" action="perfil_usuario.php" method="post" onsubmit="return comprobarPerfil()">
             <div class="label_perfil"><label for="nombre"><strong>Nombre: </strong></label></div><input type="text" name="Nombre" value="<?php echo $_SESSION["user"]['nombre'] ?>" value placeholder=" Nombre" id="Nombre" required><br></br>
             <div class="label_perfil"><label for="apellidos"><strong>Apellidos: </strong></label></div><input type="text" name="Apellidos" value="<?php echo $_SESSION["user"]['apellidos'] ?>" value placeholder=" Apellidos" id="Apellidos" required><br></br>
             <div class="label_perfil"><label for="dni"><strong>DNI: </strong></label></div><input type="text" name="DNI" value="<?php echo $_SESSION["user"]['dni'] ?>" value placeholder=" DNI" id="DNI" required readonly><br></br>
             <div class="label_perfil"><label for="Cuota"><strong>Cuota: </strong></label></div><input type="number" name="Cuota" value="<?php echo $_SESSION["user"]['cuota'] ?>" value placeholder=" Cuota" id="Cuota" required readonly><br></br>
             <div class="label_perfil"><label for="Fecha"><strong>Fecha de Nacimiento: </strong></label></div><input type="date" name="Fecha" value="<?php echo $_SESSION["user"]['fecha_nacimiento'] ?>" value placeholder=" Fecha" id="Fecha" required><br></br>
             <div class="label_perfil"><label for="ciudad"><strong>Ciudad: </strong></label></div><input type="text" name="Ciudad" value="<?php echo $_SESSION["user"]['ciudad'] ?>" value placeholder=" Ciudad" id="Ciudad" required><br></br>
             <div class="label_perfil"><label for="email"><strong>Email: </strong></label></div><input type="email" name="Email" value="<?php echo $_SESSION["user"]['email'] ?>" value placeholder=" Correo electrónico" id="Email" required><br></br>
             <span id="update_perfil"><input  type="submit" value="Actualizar"></span>
           </form>
         </div>
       </article>
     </section>
     <?php include "./assets/piedepagina.php"; ?>
   </body>
 </html>
