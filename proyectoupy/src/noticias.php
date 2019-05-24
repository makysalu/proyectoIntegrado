<?php

/**
 *
 */
class Noticias extends BBDD
{

  function __construct()
  {

  }
  public function comprobarCampos($post){
    $error=null;
    if(!isset($post)||!isset($post["titulo"])||!isset($post["descripcion"])||!isset($post["Foto"])){
      $error="";
    }elseif($post["titulo"]==""){
      $error="No has introducido el título";
    }elseif($post["descripcion"]==""){
      $error="No has introducido la descripcion";
    }elseif($post["Foto"]==""){
      $error="No has introducido la imagen";
    }else{
      $error=false;
      $this->titulo=$post["titulo"];
      $this->descripcion=$post["descripcion"];
      $this->foto=$post["Foto"];
    }
      return $error;
  }
public function mostrarNoticia()
{
$consulta=$this->conexion->query("SELECT * FROM actualidad");
return $consulta;
}

public function mostrarUltimasNoticias()
{
$consulta2=$this->conexion->query("SELECT * FROM actualidad ORDER BY id asc limit 6 ");
return $consulta2;
}
public function insertarNoticias()
{
  $insertar="INSERT INTO actualidad (titulo, descripcion, Foto)
  VALUES ('$this->titulo', '$this->descripcion', '$this->foto')";
  $this->conexion->query($insertar);
}
}





 ?>
