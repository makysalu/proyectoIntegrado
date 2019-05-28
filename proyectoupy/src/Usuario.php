<?php
class Usuario extends BBDD {
  public $accion;
  private $id_afiliado;
  private $fecha_alta;
  private $dni;
  private $nombre;
  private $apellidos;
  private $Fecha;
  private $ciudad;
  private $email;
  private $contrasena;
  private $foto;
  private $cuota;

  function __construct()
  {
  }

  /* ID_Afiliado */
  function setId_Afiliado($id_afiliado){
    $this->id_afiliado=$id_afiliado;
  }
  function getId_Afiliado(){
    return $this->id_afiliado;
  }

  /* Foto */
  function setFoto($foto){
    $this->foto=$foto;
  }
  function getFoto(){
    return $this->foto;
  }
  /* Fecha_alta */
  function setFecha_Alta($fecha_alta){
    $this->fecha_alta=$fecha_alta;
  }
  function getFecha_Alta(){
    return $this->fecha_alta;
  }

  /* DNI */
  function setDNI($dni){
    $this->dni=$dni;
  }
  function getDNI(){
    return $this->dni;
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

  /* Fecha */
  function setFecha($fecha){
    $this->fecha=$fecha;
  }
  function getFecha(){
    return $this->Fecha;
  }

  /* Ciudad */
  function setCiudad($ciudad){
    $this->ciudad=$ciudad;
  }
  function getCiudad(){
    return $this->ciudad;
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

  /* Cuota */
  function setCuota($cuota){
    $this->cuota=$cuota;
  }
  function getCuota(){
    return $this->cuota;
  }

  // Diego Moreno -> Insertar Afiliado //
  public function comprobarCampos($pos){
    $error=null;
    if (!isset($pos["Nombre"])||!isset($pos["Apellidos"])||!isset($pos["Fecha"])||!isset($pos["Ciudad"])||!isset($pos["Email"])||!isset($pos["Contrasena"])||!isset($pos["Contrasena2"])) {
        $error = "";
      }elseif (!isset($pos["DNI"])){
        $error= "";
      }elseif ($pos["Nombre"] == "") {
        $error = "No has introducido ningún Nombre.";
      }elseif ($pos["Apellidos"] == "") {
        $error = "No has introducido ningún Apellidos.";
      }elseif ($pos["DNI"] == "") {
        $error = "No has introducido el DNI.";
      }elseif ($pos["Fecha"] == "") {
        $error = "No has introducido la Fecha de nacimiento.";
      }elseif ($pos["Ciudad"] == "") {
        $error = "No has introducido ningún Ciudad.";
      }elseif ($pos["Email"] == "") {
        $error = "No has introducido ningún Email.";
      }elseif ($pos["Contrasena"] == "") {
        $error = "No has introducido ninguna Contrasena.";
      }
      elseif ($pos["Contrasena2"] == "") {
        $error = "Vuelve a introducir la Contraseña";
      }

      elseif (!isset($pos['type'])){
        $this->cuota=0;
        $error="No as introducido la cuota";
      }
      else {
        if($pos['type']==9){
           $this->cuota=9;
           $error=false;
         }
         elseif($pos['type']==15){
           $this->cuota=15;
           $error=false;
         }
         elseif($pos['type']==25){
           $this->cuota=25;
           $error=false;
         }
         elseif($pos['type']==30){
           $this->cuota=30;
           $error=false;
         }
         elseif($pos['type']==5){
           $this->cuota=5;
           $error=false;
         }
         elseif($pos['type']==3){
           $this->cuota=3;
           $error=false;
         }
         elseif($pos['type']==1){
           $this->cuota=1;
           $error=false;
         }
      }
      return $error;
    }

    private function comprobardni($dni){
      $error=false;
      $resultado2 = $this->conexion->query("select u.*
                                      from usuario u
                                      where u.DNI='$dni'");
      if (mysqli_num_rows($resultado2)!=0){
        $error=true;
      }
      return $error;
    }

  public function insertarusuario($pos){
    $error=null;
    //$cuota=$this->cuota
    if($this->comprobardni($pos['DNI'])!=false){
      $error="Ya existe un Afiliado con ese DNI";
    }
    else{
      $consulta="insert into usuario (Nombre, Apellidos, DNI, Fecha_Alta, Fecha, Ciudad, Email, Contrasena, Foto, Cuota) values ('".$pos['Nombre']."', '".$pos['Apellidos']."','".$pos['DNI']."',now() ,'".$pos['Fecha']."', '".$pos['Ciudad']."', '".$pos['Email']."', '".$pos['Contrasena']."','".$_FILES['uploadedfile']['name']."','.$this->cuota.')";

      $this->conexion->query($consulta);
      $error=false;
    }
    return $error;
  }



  // Diego Moreno -> loguear Afiliado
  public function comprobarCamposlogin($pos){
    $error=null;
    if (!isset($pos["DNI"])||!isset($pos["Contrasena"])){
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

  private function comprobarUsuario($dni,$contrasena){
    $error=false;
    $resultado = $this->conexion->query("select u.*
                                        from usuario u
                                        where u.DNI='$dni' and u.Contrasena='$contrasena'");
    if (mysqli_num_rows($resultado)==0){
      $error=true;
    }
    return $error;
  }

  public function loguear($pos){
    $error=null;
    if($this->comprobarUsuario($pos['DNI'],$pos['Contrasena'])!=false){
      $error="DNI o Contraseña invalidos";
    }
    else{
      $resultado = $this->conexion->query("select u.*
                                      from usuario u
                                      where u.DNI='".$pos['DNI']."'");
      foreach ($resultado as $usuario) {
        $this->id_afiliado=$usuario['ID_usuario'];
        $this->nombre=$usuario['Nombre'];
        $this->apellidos=$usuario['Apellidos'];
        $this->dni=$usuario['DNI'];
        $this->Fecha=$usuario['Fecha'];
        $this->fecha_alta=$usuario['Fecha_Alta'];
        $this->foto=$usuario['Foto'];
        $this->ciudad=$usuario['Ciudad'];
        $this->email=$usuario['Email'];
        $this->cuota=$usuario['Cuota'];
      }
      $error=false;
      }
    return $error;
  }

// Diego Moreno -> Actualizar Afiliado //
public function comprobarPerfil($pos){
  $error=null;
  if (!isset($pos)||!isset($pos["Nombre"])||!isset($pos["Apellidos"])||!isset($pos["DNI"])||!isset($pos["Fecha"])||!isset($pos["Ciudad"])||!isset($pos["Email"])){
    $error = "";
  }elseif ($pos["Nombre"] == "") {
    $error = "No has introducido tu Nombre.";
  }elseif ($pos["Apellidos"] == "") {
    $error = "No has introducido los Apellidos.";
  }elseif ($pos["DNI"] == "") {
    $error = "No has introducido el DNI.";
  }elseif ($pos["Fecha"] == "") {
    $error = "No has introducido tu fecha de nacimiento.";
  }elseif ($pos["Ciudad"] == "") {
    $error = "No has introducido la ciudad.";
  }elseif ($pos["Email"] == "") {
    $error = "No has introducido el Email.";
  }else{
      $error = false;
  }
  return $error;
}
public function actualizarPerfil($pos){
  $this->conexion->query("update usuario
                            set Nombre='".$pos['Nombre']."',
                            Apellidos='".$pos['Apellidos']."',
                            Fecha='".$pos['Fecha']."',
                            Ciudad='".$pos['Ciudad']."',
                            Email='".$pos['Email']."',
                            Cuota='".$pos['Cuota']."'
                            where DNI='".$pos['DNI']."'");

  $resultado = $this->conexion->query("select u.*
                                      from usuario u
                                      where u.DNI='".$pos['DNI']."'");
  foreach ($resultado as $usuario) {
    $this->id_afiliado=$usuario['ID_usuario'];
    $this->nombre=$usuario['Nombre'];
    $this->apellidos=$usuario['Apellidos'];
    $this->dni=$usuario['DNI'];
    $this->Fecha=$usuario['Fecha'];
    $this->fecha_alta=$usuario['Fecha_Alta'];
    //$this->foto=$usuario['Foto'];
    $this->ciudad=$usuario['Ciudad'];
    $this->email=$usuario['Email'];
    $this->cuota=$usuario['Cuota'];
  }

  $error=false;
  return $error;
  }

  public function datosusuarios(){
    $resultado2 = $this->conexion->query("select u.*
                                    from usuario u");
    foreach ($resultado2 as $usuario) {
        echo "<tr>";
          echo "<td><a href=perfil.php?DNI=".$usuario['DNI']."><strong>".$usuario['DNI']."</strong></a></td>";
          echo "<td>".$usuario['Nombre']."</td>";
          echo "<td>".$usuario['Apellidos']."</td>";
          echo "<td>".$usuario['Fecha']."</td>";
          echo "<td>".$usuario['Ciudad']."</td>";
          echo "<td>".$usuario['Email']."</td>";
          echo "<td>".$usuario['Cuota']."</td>";
        echo "</tr>";
    }
  }

  public function datosUsuario($pos){
    $resultado = $this->conexion->query("select u.*
                                          from usuario u
                                          where u.DNI='$pos'");
    foreach ($resultado as $usuario) {
      $this->id_afiliado=$usuario['ID_usuario'];
      $this->nombre=$usuario['Nombre'];
      $this->apellidos=$usuario['Apellidos'];
      $this->dni=$usuario['DNI'];
      $this->Fecha=$usuario['Fecha'];
      $this->fecha_alta=$usuario['Fecha_Alta'];
      $this->foto=$usuario['Foto'];
      $this->ciudad=$usuario['Ciudad'];
      $this->email=$usuario['Email'];
      $this->cuota=$usuario['Cuota'];
    }
    return $resultado;
  }

  public function añadirFoto(){
    $target_path = "uploads/";
    $target_path = $target_path . basename( $_FILES['uploadedfile']['name']);
      if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
        echo "El archivo ".  basename( $_FILES['uploadedfile']['name']).
          " ha sido subido";
        } else{
          echo "Ha ocurrido un error, trate de nuevo!";
}
  }
/*  public function fichausuario(){
    $resultado2 = $this->conexion->query("select u.*
                                    from usuario u
                                    where u.ID_usuario ='$this->id_usuario'");
    foreach ($resultado2 as $usuario) {
      echo "<table whidt='2000px' border='1'>";
      echo "<tr>";
      echo "<td>".$this->nombre."</td>";
      echo "<td>".$this->apellidos."</td>";
      echo "<td>".$this->ciudad."</td>";
      if($this->cuota==30){
        echo "<td>Afiliado S</td>";
      }
      elseif($this->cuota==25){
        echo "<td>Afiliado A</td>";
      }
      elseif($this->cuota==15){
        echo "<td>Afiliado B</td>";
      }
      else{
        echo "<td>Afiliado C</td>";
      }
      echo "</tr>";
      echo "</table>";
    }
  }*/
}

 ?>
