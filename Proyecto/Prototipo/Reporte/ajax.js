$( document ).ready(function() {
    queryPacientes();
});

function queryPacientes(){
    $.get( "controladorGetReporte.php", { } )
    .done(function( data ) {
    //console.log(data);
    $("#NombrePaciente").append(data);
  });
}

function registraReporte(){
    $.post( "controladorRegistraReporte.php", {NumeroPaciente:$("#NombrePaciente").val(),Valoracion:$("#valoracion").val(),Terapia:$("#terapia").val(),Tratamiento:$("#tratamiento").val(),Avances:$("#avances").val()})
    .done(function( data ) {
    console.log(data);
  });
}

$("#Registrar").on("click",registraReporte)