$( document ).ready(function() {
    queryEspecialidades();
    $('.carousel').carousel({
        interval: false,
      });
});

function queryEspecialidades(){
    $.get("./controladorEspecialidades.php",{}).
    done(function( data ) {
        $("#especialidad").append(data);
        });
}

function queryEspecialidades(){
    $.get("./controladorroles.php",{}).
    done(function( data ) {
        $("#rol").append(data);
        });
}

function registrarEmpleado(){
    $('.carousel').carousel('next');
    $.post("./controladorRegistraEmpleado.php",{nombre:$("#nombre").val(),
                                                correo:$("#correo").val(),
                                                especialidad:$("#especialidad").val(),
                                                contrasena:$("#contrasena").val()}).
    done(function( data ) {
        console.log("se registro")
        });
}



$("#registrar").on("click",registrarEmpleado);

$("#contrasena").change(function(){
    console.log("entro");
    var regex=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
    if($("#contrasena").val().match(regex)){

    }else{
        alert("no es fuerte");
    }
})