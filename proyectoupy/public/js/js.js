var cuota=0;
function comprobarRegistro(){
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

function comprobarLogin(){
  let dni=document.getElementById('DNI').value;
  let contrasena=document.getElementById('Contrasena').value;
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

function comprobarPerfil(){
  let nombre=document.getElementById('Nombre').value;
  let apellidos=document.getElementById('Apellidos').value;
  let dni=document.getElementById('DNI').value;
  let cuota=document.getElementsByClassName('Cuota').value;
  let fecha_nacimiento=document.getElementById('Fecha').value;
  let ciudad=document.getElementById('Ciudad').value;
  let email=document.getElementById('Email').value;
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
  else if (cuota.length==0){
    alert("El campo cuota esta vacio");
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
    else {
      return false;
    }
}

function AñadirCandidato(){
  let descripcion=document.getElementById('Descripcion').value;
  if (descripcion.length==0){
    alert("No has introducido una Descripcion");
    return false;
  }
  return true;
}

function comprobarPerfil_candidato(){
  let nombre=document.getElementById('Nombre').value;
  let apellidos=document.getElementById('Apellidos').value;
  let id_candidato=document.getElementById('id_candidato').value;
  let descripcion=document.getElementById('descripcion').value;
  if (nombre.length==0){
    alert("El campo Nombre esta vacio");
    return false;
  }
  else if (apellidos.length==0){
    alert("El campo Apellidos esta vacio");
    return false;
  }
  else if (id_candidato.length==0){
    alert("El campo id_candidato esta vacio");
    return false;
  }
  else if (descripcion.length==0){
    alert("No has introducido una Descripcion");
    return false;
  }
  return false;
}

console.log("entro en js");
