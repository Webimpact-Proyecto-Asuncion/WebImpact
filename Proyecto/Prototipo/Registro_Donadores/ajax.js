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
    $.post( "controladorRegistraDonadores.php", 
    {RazonSocial:$("#RazonSocial").val(),RFC:$("#RFC").val(),Correo:$("#Correo").val(),Telefono:$("#Telefono").val(),Nacimiento:$("#Nacimiento").val()})
    .done(function( data ) {
    console.log(data);
  });
}

$("#Registrar").on("click",registraDonadores)