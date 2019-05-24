<?php
  session_start();
    if (!isset($_SESSION["admin"])) header("Location:login_admin.php");
      require "./../src/BBDD.php";
      require "./../src/Cuentas.php";
      $a = new Cuentas();
      $a->conexion();
      $error=$a->comprobarCampos($_POST);
    $a->insertarCuenta();
    header("Location:cuentasAdmin.php");

     ?>
