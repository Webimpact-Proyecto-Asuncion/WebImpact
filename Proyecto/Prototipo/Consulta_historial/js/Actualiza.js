var id;
$( document ).ready(function() {
    
    const queryString = window.location.search;
    console.log(queryString);
    const urlParams = new URLSearchParams(queryString);
    id = urlParams.get('id');
    Getreporte(id);
});

function Getreporte(id){

	$.get("php/ControladorGetReporte.php",{id:id}).
    done(function( data ) {
    	
    console.log (data);
    let data1=data.split(",");

    $("#NumReporte").val(data1[0]);
    $("#NumEmpleado").val(data1[1]);
    $("#Edad").val(data1[3]);
    $("#NumPaciente").val(data1[2]);
    $("#Valoracion").val(data1[4]);
    $("#Terapia").val(data1[5]);
    $("#Tratamiento").val(data1[6]);
    $("#Avances").val(data1[7]);
    $("#Fecha").val(data1[8]);
    


    });

}                       

function modificarReporte(){

    NumReporte=$("#NumReporte").val();
    NumEmpleado=$("#NumEmpleado").val();
    Edad=$("#Edad").val();
    NumPaciente=$("#NumPaciente").val();
    Valoracion=$("#Valoracion").val();
    Terapia=$("#Terapia").val();
    Tratamiento=$("#Tratamiento").val();
    Avances=$("#Avances").val();
    Fecha=$("#Fecha").val();

    
    
    $.post("php/ControladorModifica.php",{NumReporte:NumReporte, 
                                        NumEmpleado:NumEmpleado, 
                                        NumPaciente:NumPaciente, 
                                        Edad:Edad, 
                                        Valoracion:Valoracion, 
                                        Terapia:Terapia,
                                        Tratamiento:Tratamiento,
                                        Avances:Avances,
                                        Fecha:Fecha
                                        }).
    done(function(data ) {
        console.log(data);
        alertify.success("Modificado con exito");
    });

    
}

$("#modificar").on("click",modificarReporte);