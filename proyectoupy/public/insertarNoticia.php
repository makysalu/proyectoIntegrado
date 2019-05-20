<?php
  session_start();
    if (!isset($_SESSION["admin"])) header("Location:login_admin.php");
    require "./../src/BBDD.php";
    require "./../src/Noticia.php";
      $u = new Noticia();
      $u->conexion();
      $error=$u->comprobarCampos($_POST);
        $u->conexion();
        $u->insertarNoticias();
        header("Location:noticiasAdmin.php");

 ?>
