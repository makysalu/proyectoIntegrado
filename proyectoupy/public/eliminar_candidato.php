<?php
  session_start();
    if (!isset($_SESSION["admin"])) header("Location: login_admin.php");
    require "./../src/BBDD.php";
    require "./../src/Administrador.php";
    $a = new Administrador();
    $a->conexion();
    $a->deletcandidato($_POST["Candidato"]);
    header("Location: deletcandidato.php")
    ?>
