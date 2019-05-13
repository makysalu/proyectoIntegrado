<?php
  session_start();
  unset($_SESSION["user"]);
  session_destroy();
  header("location: http://localhost/web/programacion/evaluacion3/proyectoupy/public/index.php");
 ?>
