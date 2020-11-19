var id;
$( document ).ready(function() {
    
    const queryString = window.location.search;
    console.log(queryString);
    const urlParams = new URLSearchParams(queryString);
    id = urlParams.get('id');
    Getdonador(id);
});

function Getdonador(id){

	$.get("php/ControladorgetDonador.php",{id:id}).
    done(function( data ) {
    	
    console.log (data);
    let data1=data.split(",");
    $("#RazonSocial").val(data1[1]);
    $("#RFC").val(data1[2]);
    $("#Correo").val(data1[3]);
    $("#Telefono").val(data1[4]);
    $("#Fecha").val(data1[5]);
    $


    });

}

function modificarDoandor(){
    $.post("./controladorModificaEmpleado.php",{NombreEmpleado:$("#nombre").val(),
                                                Correo:$("#correo").val(),
                                                Especialidad:$("#especialidad").val(),
                                                Password:$("#contrasena").val(),
                                                rol:$("#rol option:selected").text(),
                                                id1:id}).
    done(function( data ) {
        console.log(data);
    });
}

$("#modificar").on("click",modificarEmpleado);