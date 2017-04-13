var nombre = "Santi";
var edad = 21;
var es_hombre = false;
if(edad >= 18){
  console.log("Eres Mayor de Edad");
  var nav = document.getElementsByTagName("nav");
  nav[0].innerHTML = "<a href=\"#\">Hola " + nombre + " </a>";
}else{
  console.log("Bye");
  var body = document.getElementsByTagName("body");
  body[0].style.display = 'none';
}
