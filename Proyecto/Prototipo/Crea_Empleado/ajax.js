$( document ).ready(function() {
    queryEspecialidades();
});

function queryEspecialidades(){
    $.get("./controladorEspecialidades.php",{}).
    done(function( data ) {
        $("#especialidad").append(data);
        });
}

function registrarEmpleado(){
    $.post("./controladorRegistraEmpleado.php",{nombre:$("#nombre").val(),
                                                correo:$("#correo").val(),
                                                especialidad:$("#especialidad").val(),
                                                contrasena:$("#contrasena").val()}).
    done(function( data ) {
        console.log("se registro")
        });
}



$("#registrar").on("click",registrarEmpleado);