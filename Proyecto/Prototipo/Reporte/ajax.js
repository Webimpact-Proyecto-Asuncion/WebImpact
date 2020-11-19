$( document ).ready(function() {
    queryPacientes();
});

function queryPacientes(){
    $.get( "controladorGetPacientes.php", { } )
    .done(function( data ) {
    //console.log(data);
    $("#NombrePaciente").append(data);
  });
}

function resgistraReporte(){
    $.post( "controladorRegistraPaciente.php", {NumeroPaciente:$("#NombrePaciente").val(),Valoracion:$("#valoracion").val(),Terapia:$("#terapia").val(),Tratamiento:$("#tratamiento").val(),Avances:$("#avances").val()})
    .done(function( data ) {
    console.log(data);
  });
}

$("#Registrar").on("click",resgistraReporte)