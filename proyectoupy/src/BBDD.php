<?php
  class BBDD {
    public $conexion=null;

    function __construct(){
    }

    public function conexion(){
      $error=null;
      $this->conexion = new mysqli("localhost", "root", "", "proyecto");
        if ($this->conexion->connect_errno) {
            $error="Fallo al conectar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
          }
        return $error;
    }
}
 ?>
