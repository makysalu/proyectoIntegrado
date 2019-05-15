<?php
  session_start();
    if (!isset($_SESSION["admin"])) header("Location: http://localhost/web/programacion/evaluacion3/proyectoupy/public/login_admin.php");
    require "./../src/BBDD.php";
    require "./../src/Administrador.php";
    $a = new Administrador();
    $a->conexion();
    $a->deletuser($_POST["User"]);
    header("Location: http://localhost/web/programacion/evaluacion3/proyectoupy/public/deletuser.php")
    ?>
