//Avisar al salir de la pantalla nueva entrada
$('#btn-salir').click(function(){
	if(confirm("¿Seguro que quieres salir?")){
		window.location.href="/evidencia/";
	}
});

//Avisar de publicación exitosa
function exito(){
	if(confirm("¡Entrada publicada con exito! ¿Quieres publicar otra?")){
		window.location.href="/evidencia/admin/nuevo.php"; //Regresar a pantalla de edición
	}else{
		window.location.href="/evidencia/"; //Regresar a pantalla principal
	}
}

//Avisar que debe llenar todos los campos
function error(){
	if(confirm("Por favor llena todos los campos. ¿Quieres volver a intentarlo?")){
		window.location.href="/evidencia/admin/nuevo.php";//Volver a pantalla de edición
	}else{
		window.location.href="/evidencia/"; //Regresar a pantalla principal
	}
}

//Evitar enviar el formulario al presionar enter
$(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});
