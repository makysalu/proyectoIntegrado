<?php
class Administrador extends BBDD {
  public $accion;
  private $id_administrador;
  private $nombre;
  private $apellidos;
  private $dni;
  private $email;
  private $contrasena;

  function __construct()
  {


  }

  /* ID_Administrador */
  function setId_Administrador($id_administrador){
    $this->id_administrador=$id_administrador;
  }
  function getId_Administrador(){
    return $this->id_administrador;
  }

  /* Nombre */
  function setNombre($nombre){
    $this->nombre=$nombre;
  }
  function getNombre(){
    return $this->nombre;
  }

  /* Apellidos */
  function setApellidos($apellidos){
    $this->apellidos=$apellidos;
  }
  function getApellidos(){
    return $this->apellidos;
  }

  /* DNI */
  function setDNI($dni){
    $this->dni=$dni;
  }
  function getDNI(){
    return $this->dni;
  }

  /* Email */
  function setEmail($email){
    $this->email=$email;
  }
  function getEmail(){
    return $this->email;
  }

  /* Contrasena */
  function setContrasena($contrasena){
    $this->contrasena=$contrasena;
  }
  function getContrasena(){
    return $this->contrasena;
  }



  // Diego Moreno -> loguear Afiliado
  public function comprobarCamposlogin($pos){
    $error=null;
    if (!isset($pos)||!isset($pos["DNI"])||!isset($pos["Contrasena"])){
      $error = "";
    }elseif ($pos["DNI"] == "") {
      $error = "No has introducido tu DNI.";
    }elseif ($pos["Contrasena"] == "") {
      $error = "No has introducido ninguna Contrasena.";
    }else{
        $error = false;
    }
    return $error;
  }

  private function comprobarAdministrador($dni,$contrasena){
    $error=false;
    $resultado = $this->conexion->query("select a.*
                                        from administrador a
                                        where a.DNI='$dni' and a.Contrasena='$contrasena'");
    if (mysqli_num_rows($resultado)==0){
      $error=true;
    }
    return $error;
  }

  public function loguear($pos){
    $error=null;
    if($this->comprobarAdministrador($pos['DNI'],$pos['Contrasena'])!=false){
      $error="DNI o Contraseña invalidos";
    }
    else{
      $resultado = $this->conexion->query("select a.*
                                      from administrador a
                                      where a.DNI='".$pos['DNI']."'");
      foreach ($resultado as $administrador) {
        $this->id_administrador=$administrador['ID_Administrador'];
        $this->nombre=$administrador['Nombre'];
        $this->apellidos=$administrador['Apellidos'];
        $this->dni=$administrador['DNI'];
        $this->email=$administrador['Email'];
        $this->contrasena=$administrador['Contrasena'];
      }
      $error=false;
      }
    return $error;
  }

  public function usuarios(){
       $consulta="select u.* from usuario u";
       $resultado=$this->conexion->query($consulta);
       return $resultado;
     }

  public function deletuser($id_usuario){
      $consulta="delete from `usuario`
                 where usuario.ID_usuario='$id_usuario'";
      $this->conexion->query($consulta);
     }

}
 ?>
