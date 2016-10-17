$(document).ready(function(){
  cargaHist();
  $("#llamadaHist").click(cargaHist);
  $("#llamadaInstGuitarra").click(cargaGuitarra);
  $("#llamadaInstBaterias").click(cargaBateria);
  $("#llamadaInstBajos").click(cargaBajos);
  $("#llamadaInstTeclados").click(cargaTeclados);
  $("#llamadaLocal").click(cargaUbicacion);
  $("#llamadaAdmin").click(cargaAdmin);
});


function cargaAdmin(){
  event.preventDefault();
$.post("index.php?action=iniciar_ADM", function(data){
  $('#llamada').html(data);


});
var cargas=$("#llamadaAdmin").attr('href');
render(cargas);
}






function  cargaUbicacion(){
event.preventDefault();
var cargas=$("#llamadaLocal").attr('href');
render(cargas);


}

function cargaGuitarra (){
event.preventDefault();
var cargas=$("#llamadaInstGuitarra").attr('href');
render(cargas);


}
function cargaBateria (){
event.preventDefault();
var cargas=$("#llamadaInstBaterias").attr('href');
render(cargas);


}
function cargaBajos (){
event.preventDefault();
var cargas=$("#llamadaInstBajos").attr('href');
render(cargas);


}function cargaTeclados (){
event.preventDefault();
var cargas=$("#llamadaInstTeclados").attr('href');
render(cargas);


}
function  cargaHist(){
  event.preventDefault();
  var cargas= $("#llamadaHist").attr("href");
  render(cargas);
}

function render(dir, fnsc){
  $.ajax({
    url:dir+'?',
    method:"GET",
    dataType:"html",
    success: function(data){
      $('#llamada').html(data);
      if(fnsc){
        fnsc();
      }

  },
  error: function(){
    alert("Error de carga asincronica");
  }
});
}
