
btn5.onclick = function() { 
  swal({
  title: "¿Estás seguro?",
  text: "¡No hay marcha atras!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "¡Si, borrar mi memoria ahora!",
  closeOnConfirm: false
},
function(){
  swal("¡Borrado!", "Tu memoria ha sido borrada.", "success");
});
};
btn6.onclick = function() { 
  swal({
  title: "¿Estás seguro?",
  text: "¡Si continuas no serás capaz de recordar nada!",
  type: "warning",
  showCancelButton: true,
  confirmButtonColor: "#DD6B55",
  confirmButtonText: "Si, borrame la memoria!",
  cancelButtonText: "No, ¡cancela por favor!",
  closeOnConfirm: false,
  closeOnCancel: false
},
function(isConfirm){
  if (isConfirm) {
    swal("¡Memoria borrada!", "Tu nuevo nombre ahora es Macario Isidoro", "success");
  } else {
        swal("Cancelado", "Estás a salvo :) ¡Por ahora!", "error");
  }
});
};
btn7.onclick = function() { 
  swal({
    title: "Break.coffee",
    text: "Fuck Yeah!",
    imageUrl: "http://break.coffee/wp-content/uploads/2015/03/coffee.jpg"
  });
};