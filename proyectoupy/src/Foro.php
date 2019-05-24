<?php

/**
 * Foro
 */
class Foro extends BBDD
{

  private $tema;
  private $comentario;
  private $NComentario;
  private $error = null;

  function __construct()
  {
  }
  public function comprobarCampos($post){
    $error=null;
    if(!isset($post)||!isset($post["tema"])||!isset($post["comentario"])){
      $error="";
    }elseif($post["tema"]==""){
      $error="No has introducido el título";
    }elseif($post["comentario"]==""){
      $error="No has introducido la imagen";
    }else{
      $error=false;
      $this->tema=$post["tema"];
      $this->comentario=$post["comentario"];
    }
      return $error;
  }
  public function insertarComent($tema,$post){
    if (isset($post["NComentario"])) {
      if ($post["NComentario"]!="") {
        $this->NComentario=$post["NComentario"];
        $consulta="INSERT INTO foro (Tema, Comentario) VALUES ('$tema', '$this->NComentario')";
        $this->conexion->query($consulta);
      }
    }
  }

  public function listarTemas(){
    $result=$this->conexion->query("SELECT * FROM foro GROUP BY Tema");
    return $result;
  }

  public function forear($tema){
    $result=$this->conexion->query("SELECT Tema FROM foro WHERE Tema = '$tema' GROUP BY tema");
    return $result;
  }

  public function forear2($tema){
    $result=$this->conexion->query("SELECT Tema, Comentario, Fecha_Publicacion FROM foro WHERE Tema = '$tema'");
    return $result;
  }
  public function insertarTema()
  {
    $insertar="INSERT INTO foro (Tema, Comentario)
    VALUES ('$this->tema', '$this->comentario')";
    $this->conexion->query($insertar);
  }
}

 ?>
