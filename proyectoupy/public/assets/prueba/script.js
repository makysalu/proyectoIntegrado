function comprobar(){
  var type=document.getElementsByName("type");
  if (type[0].checked){
    alert(1)
  }
  else if (type[1].checked){
    alert(2)
  }
  else if (type[2].checked){
    alert(3)
  }
  else if (type[3].checked){
    alert(4)
  }
  else{
    alert(5)
  }
}
