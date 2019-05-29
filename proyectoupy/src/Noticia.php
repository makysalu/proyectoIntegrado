<?php /**
 *
 */
class Noticia extends BBDD
{
  private $titulo;
  private $descripcion;
  private $url;
  private $imagen;
  function __construct()
  {

  }
  public function comprobarCampos($post){
    $error=null;
    if(!isset($post)||!isset($post["titulo"])||!isset($post["descripcion"])||!isset($post["url"])||!isset($post["imagen"])){
      $error="";
    }elseif($post["titulo"]==""){
      $error="No has introducido el título";
    }elseif($post["descripcion"]==""){
      $error="No has introducido la descripcion";
    }elseif($post["url"]==""){
      $error="No has introducido la url";
    }elseif($post["imagen"]==""){
      $error="No has introducido la imagen";
    }else{
      $error=false;
      $this->titulo=$post["titulo"];
      $this->descripcion=$post["descripcion"];
      $this->url=$post["url"];
      $this->imagen=$post["imagen"];
    }
      return $error;
  }
  public function Noticias()
  {
    $resultado = $this->conexion->query("SELECT * FROM noticias");
    return $resultado;
  }
  public function insertarNoticias()
  {
    $insertar="INSERT INTO noticias (titulo, descripcion, url, imagen)
    VALUES ('$this->titulo', '$this->descripcion', '$this->url', '$this->imagen')";
    $this->conexion->query($insertar);
  }
}
 ?>
