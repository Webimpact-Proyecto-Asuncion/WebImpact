$( document ).ready(function() {
   
});


function registraDonadores(){
    
    if ($("#RazonSocial").val() == '' || $("#RFC").val() == '' || $("#Correo").val() == '' || $("#Telefono").val() == '' || $("#Nacimiento").val() == '' ) {
        
        alertify.success('Porfavor llena todos los campos!!');
    } else {
        
        alertify.success('Donador registrado exitosamente!');
    }
    
    $.post( "controladorRegistraDonadores.php", 
    {RazonSocial:$("#RazonSocial").val(),RFC:$("#RFC").val(),Correo:$("#Correo").val(),Telefono:$("#Telefono").val(),Nacimiento:$("#Nacimiento").val()})
    .done(function( data ) {
        console.log("HOLA");
    console.log(data);
  });
}

$("#Registrar").on("click",registraDonadores)



