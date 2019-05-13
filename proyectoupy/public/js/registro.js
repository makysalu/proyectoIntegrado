var cuota=0;
function comprobar(){
  let nombre=document.getElementById('Nombre').value;
  let apellidos=document.getElementById('Apellidos').value;
  let dni=document.getElementById('DNI').value;
  let fecha_nacimiento=document.getElementById('Fecha_nacimiento').value;
  let ciudad=document.getElementById('Ciudad').value;
  let email=document.getElementById('Email').value;
  let contrasena=document.getElementById('Contrasena').value;
  let contrasena2=document.getElementById('Contrasena2').value;
  if (nombre.length==0){
    alert("El campo Nombre esta vacio");
    return false;
  }
  else if (apellidos.length==0){
    alert("El campo Apellidos esta vacio");
    return false;
  }
  else if (dni.length==0){
    alert("El campo DNI esta vacio");
    return false;
  }
  else if (fecha_nacimiento.length==0){
    alert("El campo Fecha de nacimiento esta vacio");
    return false;
  }
  else if (ciudad.length==0){
    alert("El campo Ciudad esta vacio");
    return false;
  }
  else if (email.length==0){
    alert("El campo Email esta vacio");
    return false;
  }
  else if (contrasena.length==0){
    alert("El campo Contraseña esta vacio");
    return false;
  }
  else if (contrasena2.length==0){
    alert("El campo confirmar Contraseña esta vacio");
    return false;
  }
  else if (contrasena2!=contrasena){
    alert("Las contraseñas no coinciden");
    return false;
  }
  cuota=comprobar2();
    if (cuota<=0){
      alert("No as introducido la cuota");
      return false;
    }
    else {
      return true;
    }
}

function comprobar2(){
  var type=document.getElementsByName("type");
  if (type[0].checked){
    return 9;
  }
  else if (type[1].checked){
    return 15;
  }
  else if (type[2].checked){
    return 25;
  }
  else if (type[3].checked){
    return 30;
  }
  else if (type[4].checked){
    return 5;
  }
  else if (type[5].checked){
    return 3;
  }
  else if (type[6].checked){
    return 1;
  }
  else{
    return 0;
  }
}

function comprobarlogin(){
  console.log("Hola mundo");
  let dni=document.getElementById('DNI').value;
  let contrasena=document.getElementById('Contrasena').value;
  console.log(contrasena.length);
  if (dni.length==0){
    alert("El campo DNI esta vacio");
    return false;
  }
  else if (contrasena.length==0){
    alert("El campo Contrasena esta vacio");
    return false;
  }
  return true;
}
