<?php  session_start();
  if (!isset($_SESSION["admin"])) header("Location:login_admin.php");
  require "./../src/BBDD.php";
  require "./../src/Foro.php";
    $u = new Foro();
      $u->conexion();
    $u->insertarTema();
      header("Location:insertarTema.php");?>
