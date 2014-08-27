function inicio_busqueda(){
	$("#buscar").keyup(function (e) {
	    //Si presionaste el enter
	    if (e.keyCode == 13) {
	        //Peticion ajax
	        var url='ajax';
	        var buscar='';

	        buscar=$("#buscar").val();

	        var data='buscar='+buscar;
	        console.log('data tiene el valor:'+data);
	        $.ajax({
	          type: "POST",
	          data: data,
	          url: url,
	          beforeSend: function(){
	            $("#contenido").html('Buscando algo...');
	          },
	          success: function(msg){
	            $("#contenido").html(msg);
	          }
	        });

	    }
	});

}

function inicio_alumnos(){
	$( "#btn_altas" ).click(function() {
		//alert( "Handler for .click() called." );
		$('#myModal').modal('show');
		var data='ajax=1&otrodato="algo"';
		var url='altas_ajax';
		$.ajax({
	          type: "POST",
	          data: data,
	          url: url,
	          beforeSend: function(){
	            $(".modal-body").html('Cargando ...');
	          },
	          success: function(formulario){
	          	$(".modal-body").html(formulario);

	          }
	        });


	});


$( "#btn_guardar" ).click(function() {
		data+='&inputNombre='+$("#inputNombre").val();
		data+='&inputClave='+$("#inputApellido").val();
		data+='&inputCarrera='+$("#inputCarrera").val();
		data+='&inputCorreo='+$("#inputCorreo").val();
		data+='&inputEdad='+$("#inputEdad").val();
		var url='altas';
		$.ajax({
	          type: "POST",
	          data: data,
	          url: url,
	          beforeSend: function(){
	            $(".modal-body").html('Cargando ...');
	          },
	          success: function(mensaje){
	          	alert(mensaje);
				$('#mymodal').modal('hide');
	          }
	        });
	});

}

function inicio_carreras(){
	$( "#btn_altas" ).click(function() {
		//alert( "Handler for .click() called." );
		$('#myModal').modal('show');
		var data='ajax=1&otrodato="algo"';
		var url='altas_ajax';
		$.ajax({
	          type: "POST",
	          data: data,
	          url: url,
	          beforeSend: function(){
	            $(".modal-body").html('Cargando ...');
	          },
	          success: function(formulario){
	          	$(".modal-body").html(formulario);

	          }
	        });


	});


$( "#btn_guardar" ).click(function() {
		data+='&inputUsuario='+$("#inputCarreras").val();
		var url='altas';
		$.ajax({
	          type: "POST",
	          data: data,
	          url: url,
	          beforeSend: function(){
	            $(".modal-body").html('Cargando ...');
	          },
	          success: function(mensaje){
	          	alert(mensaje);
				$('#mymodal').modal('hide');
	          }
	        });
	});

}

function inicio_ciudades(){
	$( "#btn_altas" ).click(function() {
		//alert( "Handler for .click() called." );
		$('#myModal').modal('show');
		var data='ajax=1&otrodato="algo"';
		var url='altas_ajax';
		$.ajax({
	          type: "POST",
	          data: data,
	          url: url,
	          beforeSend: function(){
	            $(".modal-body").html('Cargando ...');
	          },
	          success: function(formulario){
	          	$(".modal-body").html(formulario);

	          }
	        });


	});


$( "#btn_guardar" ).click(function() {
		data+='&inputUsuario='+$("#inputCiudad").val();
		data+='&inputClave='+$("#inputEstado").val();
		
		var url='altas';
		$.ajax({
	          type: "POST",
	          data: data,
	          url: url,
	          beforeSend: function(){
	            $(".modal-body").html('Cargando ...');
	          },
	          success: function(mensaje){
	          	alert(mensaje);
				$('#mymodal').modal('hide');
	          }
	        });
	});

}
function inicio_usuarios(){
	$( "#btn_altas" ).click(function() {
		//alert( "Handler for .click() called." );
		$('#myModal').modal('show');
		var data='ajax=1&otrodato="algo"';
		var url='altas_ajax';
		$.ajax({
	          type: "POST",
	          data: data,
	          url: url,
	          beforeSend: function(){
	            $(".modal-body").html('Cargando ...');
	          },
	          success: function(formulario){
	          	$(".modal-body").html(formulario);

	          }
	        });


	});


$( "#btn_guardar" ).click(function() {
		data+='&inputUsuario='+$("#inputUsuario").val();
		data+='&inputClave='+$("#inputClave").val();
		data+='&inputNombre='+$("#inputNombre").val();
		data+='&inputApellido='+$("#inputApellido").val();
		data+='&inputCorreo='+$("#inputCorreo").val();
		data+='&inputEdad='+$("#inputEdad").val();
		var url='altas';
		$.ajax({
	          type: "POST",
	          data: data,
	          url: url,
	          beforeSend: function(){
	            $(".modal-body").html('Cargando ...');
	          },
	          success: function(mensaje){
	          	alert(mensaje);
				$('#mymodal').modal('hide');
	          }
	        });
	});

}