<?php /**
 *
 */
class candidato extends BBDD
{
  private $imagen;
  private $nombre;
  private $apellidos;
  private $cargo;
  function __construct()
  {

  }
  public function comprobarCampos($post){
    $error=null;
    if(!isset($post)||!isset($post["imagen"])||!isset($post["nombre"])||!isset($post["apellido"])||!isset($post["cargo"])){
      $error="";
    }elseif($post["id_candidato"]==""){
      $error="No has introducido el imagen";
    }elseif($post["id_usuario"]==""){
      $error="No has introducido la nombre";
    }elseif($post["descripcion"]==""){
      $error="No has introducido la apellido";
    }else{
      $error=false;
      $this->titulo=$post["id_candidato"];
      $this->descripcion=$post["id_usuario"];
      $this->url=$post["descripcion"];
    }
      return $error;
  }
  public function Candidatos()
  {
    $resultado = $this->conexion->query("SELECT * from candidato join usuario on candidato.id_usuario=usuario.ID_usuario");
    return $resultado;
  }
  public function insertarCandidatos()
  {
    $insertar="INSERT INTO Candidatos (id_candidato, id_usuario, descripcion)
    VALUES ('$this->id_candidato', '$this->id_usuario', '$this->descripcion')";
    $this->conexion->query($insertar);
  }

}
 ?>
