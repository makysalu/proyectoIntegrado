<?php
  session_start();
    if (!isset($_SESSION["admin"])) header("Location: login_admin.php");
    require "./../src/BBDD.php";
    require "./../src/Administrador.php";
    $a = new Administrador();
    $a->conexion();
    echo $_POST["User"];
    $a->deletuser($_POST["User"]);
    header("Location: deletuser.php")
    ?>
