$(buscar_datos());

function buscar_datos(consulta){
	$.ajax({
		url: 'historial.php' ,
		type: 'POST' ,
		dataType: 'html',
		data: {consulta: consulta},
	})
	.done(function(respuesta){
		$("#datos").html(respuesta);
	})
	.fail(function(){
		console.log("error");
	});
}

$(document).on('keyup','#nombre_pac', function(){
	var valor = $(this).val();
	if (valor != "") {
		buscar_datos(valor);
	}else{
		buscar_datos();
	}
});

function modifyById(id){
	let auxUrl="https://royerdac99.codes/WebImpact/Proyecto/Prototipo/modificarEmpleado/ModificaEmpleado.php";

	location.href = auxUrl+"?id="+id;
}


