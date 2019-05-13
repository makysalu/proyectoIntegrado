<?php
comprobarCuota($_POST);
function comprobarCuota($req){
  $error=false;
  if (!isset($req['type'])){
    $cuota=0;
    $error="No as introducido la cuota";
  }
  else {
    if($req['type']==9){
       $cuota=9;
     }
     elseif($req['type']==15){
       $cuota=15;
     }
     elseif($req['type']==25){
       $cuota=25;
     }
     elseif($req['type']==30){
       $cuota=30;
     }
     elseif($req['type']==5){
       $cuota=5;
     }
     elseif($req['type']==3){
       $cuota=3;
     }
     elseif($req['type']==1){
       $cuota=1;
     }
  }
  return $error;
}

 ?>
