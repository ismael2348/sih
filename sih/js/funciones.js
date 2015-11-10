
$(document).ready(function(){
	
        jQuery('input').keyup(function() {
          this.value = this.value.toLocaleUpperCase();
        });
        jQuery('textarea').keyup(function() {
            this.value = this.value.toLocaleUpperCase();
        });

       // $('.reloj').timepicker({ 'timeFormat': 'H:i','step': 1 });
 });




function mostrar(fired,idElemento){
	$("#"+idElemento).show();
	$(fired).hide();
}

function mostrarDeposito(){
  
  if($("#monto").is(':visible'))
    $("#monto").hide();  
  else 
    $("#monto").show();
  
}

function mostrarPagoRecAseg(){
  
  if($("#PagoRecAseg").is(':visible'))
    $("#PagoRecAseg").hide();  
  else 
    $("#PagoRecAseg").show();
  
}



function mostrarProvee(){
  
  if($("#proveePagoOk").is(':visible'))
    $("#proveePagoOk").hide();  
  else 
    $("#proveePagoOk").show();
  
}

function mostrarHono(){
  
  if($("#hono").is(':visible'))
    $("#hono").hide();  
  else 
    $("#hono").show();
  
}






















/*
function incidentesSeguim(id){

	$.post(incidentesSeguim/test, function( data ) {
		alert( data );
	});

}
*/

function toggleSeguim(elem){
	$("#crearSeguimiento").toggle();
	
}

/*
function incidentesSeguim(id) {
$.ajax({
      type: "POST",
      url:   'incidentesSeguim/test',
      data:  {val1:1,val2:2},
      success: function(msg){
           alert("Sucess"+msg)
          },
      error: function(xhr){
      alert("failure"+xhr.readyState+this.url)

      }
    });
}*/