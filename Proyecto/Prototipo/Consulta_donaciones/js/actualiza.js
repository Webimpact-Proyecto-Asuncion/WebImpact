var id;
$( document ).ready(function() {
    
    const queryString = window.location.search;
    console.log(queryString);
    const urlParams = new URLSearchParams(queryString);
    id = urlParams.get('id');

    Getdonaciones(id);
    
    
});

function Getdonaciones(id){

	$.get("php/ControladorgetDonaciones.php",{id:id}).
    
    done(function(data) {
    	
    let data1=data.split(",");
  
    $("#Descripcion").val(data1[0]);
    $("#id_donador").val(data1[1]);
    
    });

}                       

function modificarDonaciones(){

    Descripcion=$('#Descripcion').val();
    id_donador=$('#id_donador').val();
        
    $.post("php/Controladormodifica_donaciones.php",{Descripcion:Descripcion,
                                    
                                                     id_donador:id_donador, 
                                        
                                        }).
    done(function(data ) {
        console.log(data);
        //alertify.success("Modificado con exito");
    });

    
}

$("#modificar").on("click",modificarDonaciones);