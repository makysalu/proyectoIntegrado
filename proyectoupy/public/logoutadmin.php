<?php
  session_start();
  unset($_SESSION["admin"]);
  session_destroy();
  header("location: http://localhost/web/programacion/evaluacion3/proyectoupy/public/login_admin.php");
 ?>
