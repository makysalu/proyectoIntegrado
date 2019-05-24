<?php

/**
 *
 */
class cuentas extends BBDD
{
private $titulo;
private $archivo;
  function __construct()
  {
  }
  public function cuentas()
  {
    $resultado = $this->conexion->query("SELECT * FROM cuentas");
    return $resultado;

  }
  public function comprobarCampos($post){
    $error=null;
  if(!isset($post)||!isset($post["titulo"])||!isset($post["archivo"])){
    $error="";
  }elseif($post["titulo"]==""){
    $error="No has introducido el titulo";
  }elseif($post["archivo"]==""){
    $error="No has introducido el archivo";

  }else {
    $error=false;
    $this->titulo = $post['titulo'];
    $this->archivo = $post['archivo'];
  }
  return $error;
  }
  public function insertarCuenta()
  {
    $consulta="INSERT INTO cuentas (titulo, archivo) VALUES ('$this->titulo', '$this->archivo')";
    $this->resultado=$this->conexion->query($consulta);
  }
}

 ?>
