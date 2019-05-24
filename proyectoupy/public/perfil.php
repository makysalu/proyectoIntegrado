<?php
  session_start();
    if (!isset($_SESSION["admin"])) header("Location: login_admin.php");

    require "./../src/BBDD.php";
    require "./../src/Usuario.php";
    $u = new Usuario();
    $error=$u->conexion();
    if ($error==false){
      if (isset($_GET['DNI'])){
        $dni=$_GET['DNI'];
        $u->datosUsuario($dni);
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
      }
    $error=$u->comprobarPerfil($_POST);
    if (isset($error)) {
     if($error===false){
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
            }
          }
        }
    }
 ?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
   <!-- Diego Moreno - login -->
 	<meta charset="utf-8">
 	<title>Administrar perfil</title>
 	<link rel="stylesheet" href="css/stilesadmin.css">
 </head>

 <body>

 	<?php include "./assets/navegadoradmin.php"; ?>

 	<script type="text/javascript" src="js/js.js"></script>

 	<section class="Perfil">
 		<div>
 			<h2>Perfil Afiliado <?php echo $_SESSION["user"]['nombre'] ?></h2>
       <?php
         if(isset($error)){
           if($error!=""){echo "<h4>ERROR: $error</h4>";}
         }
       ?>
         <form class="formulario_perfil" action="perfil.php" method="post" onsubmit="return comprobar()" required>
           <div><label for="nombre"><strong>Nombre: </strong></label><input type="text" name="Nombre" value="<?php echo $_SESSION["user"]['nombre'] ?>" value placeholder=" Nombre" id="Nombre"></div>
           <div><label for="apellidos"><strong>Apellidos: </strong></label><input type="text" name="Apellidos" value="<?php echo $_SESSION["user"]['apellidos'] ?>" value placeholder=" Apellidos" id="Apellidos" ></div>
           <div><label for="dni"><strong>DNI: </strong></label><input type="text" name="DNI" value="<?php echo $_SESSION["user"]['dni'] ?>" value placeholder=" DNI" id="DNI" required></div>
           <div><label for="Fecha"><strong>Fecha de Nacimiento: </strong></label><input type="date" name="Fecha" value="<?php echo $_SESSION["user"]['Fecha'] ?>" placeholder=" Fecha" id="Fecha" ></div>
           <div><label for="ciudad"><strong>Ciudad: </strong></label><input type="text" name="Ciudad" value="<?php echo $_SESSION["user"]['ciudad'] ?>" value placeholder=" Ciudad" id="Ciudad" ></div>
           <div><label for="email"><strong>Email: </strong></label><input type="email" name="Email" value="<?php echo $_SESSION["user"]['email'] ?>" value placeholder=" Correo electrónico" id="Email" ></div><br></br>
           <select class="Cuota" name="Cuota" id="Cuota" style="margin-left: 20px; margin-top: 10px;">
            <option value='9'>Cuota Ordinaria: 9€/mes</option>
            <option value='15'>Cuota Ordinaria Plus: 15€/mes</option>
            <option value='25'>Cuota Contributiva: 25€/mes</option>
            <option value='30'>Cuota Generosa: 30€/mes</option>
            <option value='5'>Cuota Reducida: 5€/mes</option>
            <option value='3'>Cuota Joven: 3€/mes</option>
            <option value='1'>Cuota Simbolica: 1€/mes</option>
           </select><br></br>
           <input id="update_perfil"  type="submit" value="Actualizar"></input>
         </form>
 		</div>
 	</section>

 </body>
 </html>
