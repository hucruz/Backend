var fondo = $(".fondo-rojo").eq(0);

/*

  Hola, esto es un comentario
  multilinea :)

*/
$("#counter").hover(function(){
  $(this).css("background-color", "#AAA");
}, function(){
    $(this).css("background-color", rgba(255,255,255,1) );
});

var cuenta = 0;
var color_r = 0;

$("#counter").click(function(){
  cuenta++;
  color_r = cuenta * 10;
  if(color_r >= 255) {
    color_r = 0;
    cuenta = 0;
  }
  $(this).css("background-color", "rgba("+color_r+",255,255,0.8)" );
  $("#resultado").text(cuenta);
});

$("nav").click(function(){
  fondo.css("background-color" , "#6611FF");
  $('#saludo').html("<a>Hola</a>");

  // Esto también es un comentario :) de linea
});
