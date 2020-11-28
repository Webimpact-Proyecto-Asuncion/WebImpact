$( document ).ready(function() {
    queryEspecialidades();
    queryRoles();
    $('.carousel').carousel({
        interval: false,
      });
});

function queryEspecialidades(){
    $.get("./controladorEspecialidades.php",{}).
    done(function( data ) {
        $("#especialidad").html(data);
        //console.log("query");
        });
}

function queryRoles(){
    $.get("./controladorroles.php",{}).
    done(function( data ) {
        $("#rol").html(data);
        //console.log(data);
        });
}

function registrarEmpleado(){
    
    $.post("./controladorRegistraEmpleado.php",{nombre:$("#nombre").val(),
                                                correo:$("#correo").val(),
                                                especialidad:$("#especialidad").val(),
                                                contrasena:$("#contrasena").val(),
                                                rol:$("#rol").val()}).
    done(function( data ) {
        //console.log("se registro")
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

$("#siguiente").on("click",function(){
    $('.carousel').carousel('next');
    $('.carousel').carousel({
        interval: false,
      });
}    
)
//queryEspecialidades();

function cancelar(){
    //alertify
    
    location.href="../dashboard/dashboard.php"
}

$('#cancelar').on("click",cancelar);
$('#cancelar1').on("click",cancelar);