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

  public function candidatos(){
       $consulta="select u.*, c.*
                  from usuario u join candidato c
                  on u.ID_usuario = c.id_usuario";
       $resultado=$this->conexion->query($consulta);
       return $resultado;
     }
  public function datoscandidato($post){
      $consulta="select c.*, u.*
                 from candidato c join usuario u
                 on c.id_usuario=u.ID_usuario
                 where c.id_candidato='$post'";
      $resultado = $this->conexion->query($consulta);
      return $resultado;
      }

     public function deletcandidato($id_candidato){
       $consulta="delete from `candidato`
                  where  candidato.id_candidato='$id_candidato'";
       $this->conexion->query($consulta);
     }

     // Diego Moreno -> Candidato
     public function comprobarCamposCandidato($post){
       $error=null;
       if (!isset($post)||!isset($post["Candidato"])||!isset($post["Descripcion"])){
         $error = "";
       }elseif ($post["Candidato"] == "") {
         $error = "No has introducido el Candidato.";
       }elseif ($post["Descripcion"] == "") {
         $error = "No has introducido ninguna Descripcion.";
       }else{
           $error = false;
       }
       return $error;
     }

     private function comprobarcandidato($id_usuario){
       $error=false;
       $resultado2 = $this->conexion->query("select c.*
                                              from candidato c
                                              where c.id_usuario=$id_usuario");
       if (mysqli_num_rows($resultado2)!=0){
         $error=true;
       }
       return $error;
     }

     public function insertarcandidato($pos){
       $error=null;
       if($this->comprobarcandidato($pos['Candidato'])!=false){
         $error="Ese Afiliado ya es candidato";
       }
       else{
         $consulta="insert into candidato (id_usuario, descripcion)
                     values ('".$pos['Candidato']."', '".$pos['Descripcion']."')";
         $this->conexion->query($consulta);
         $error=false;
       }
       return $error;
     }

     public function comprobarPerfilCandidato($post){
       $error=null;
       if (!isset($post)||!isset($post["Nombre"])||!isset($post["Apellidos"])||!isset($post["id_candidato"])||!isset($post["descripcion"])){
         $error = "";
       }elseif ($post["Nombre"] == "") {
         $error = "No has introducido el nombre del Candidato.";
       }elseif ($post["Apellidos"] == "") {
         $error = "No has introducido los apellidos del Candidato.";
       }elseif ($post["id_candidato"] == "") {
         $error = "No has introducido el numero del Candidato.";
       }elseif ($post["descripcion"] == "") {
         $error = "No has introducido ninguna Descripcion.";
       }else{
           $error = false;
       }
       return $error;
     }

     public function actualizarPerfilcandidato($post){
       $this->conexion->query("update candidato
                                set descripcion='".$post['descripcion']."'
                                where id_candidato='".$post['id_candidato']."'");

       }
<<<<<<< HEAD
}
=======
     }
>>>>>>> 4c4e11198fedeb6d0aab894f17d4d9a54608d894
 ?>
