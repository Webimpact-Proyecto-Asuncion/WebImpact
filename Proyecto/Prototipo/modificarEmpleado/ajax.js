$( document ).ready(function() {
    queryEspecialidades();
    queryRoles();
    const queryString = window.location.search;
    console.log(queryString);
    const urlParams = new URLSearchParams(queryString);
    const id = urlParams.get('id');
    //console.log(id);
    queryEmpleado(id)
    //setTimeout(,2000);
});


function queryEmpleado(idEmpleado){
    $.get("./controladorEmpleado.php",{id:idEmpleado}).
    done(function( data ) {
        console.log(data);
        let data1= data.split(",");
        $("#nombre").val(data1[0]);
        $("#correo").val(data1[1]);
        $("#especialidad").val(data1[2]);
        $("#contrasena").val(data1[3]);
        $("#rol").val(data1[4]);
        });
}

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