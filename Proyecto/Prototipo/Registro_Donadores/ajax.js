$( document ).ready(function() {
   
});

/*

function queryPacientes(){
    $.get( "controladorGetPacientes.php", { } )
    .done(function( data ) {
    //console.log(data);
    $("#NombrePaciente").append(data);
  });
}
*/
function registraDonadores(){
    
    if ($("#RazonSocial").val() == '' || $("#RFC").val() == '' || $("#Correo").val() == '' || $("#Telefono").val() == '' || $("#Nacimiento").val() == '' ) {
        alert('Porfavor llena todos los campos!!');
    } else {
        alert('Donador registrado exitosamente!');
    }
    
    $.post( "controladorRegistraDonadores.php", 
    {RazonSocial:$("#RazonSocial").val(),RFC:$("#RFC").val(),Correo:$("#Correo").val(),Telefono:$("#Telefono").val(),Nacimiento:$("#Nacimiento").val()})
    .done(function( data ) {
    console.log(data);
  });
}

$("#Registrar").on("click",registraDonadores)