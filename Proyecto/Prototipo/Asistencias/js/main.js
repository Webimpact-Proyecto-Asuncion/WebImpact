$(buscar_datos());

function buscar_datos(consulta) {
    $.ajax({
            url: 'php/tabla.php',
            type: 'POST',
            dataType: 'html',
            data: { consulta: consulta },
        })
        .done(function(respuesta) {
            $("#tabla").html(respuesta);
        })
        .fail(function() {
            console.log("error");
        });
}
$(document).on('keyup', '#busqueda', function() {
    var valor = $(this).val();
    if (valor != "") {
        buscar_datos(valor);
    } else {
        buscar_datos();
    }
});



function preguntarSiNo(id) {



    alertify.confirm('Falta', '¿Confirma ausencia del paciente?',
        function() { falta(id) },
        function() { alertify.error('Se cancelo') });

}

function preguntarJustificacion(id) {



    alertify.confirm('Justificacion', '¿Confirma justificacion?',
        function() { justificacion(id) },
        function() { alertify.error('Se cancelo') });

}

function confirmaAsistencia(id) {



    alertify.confirm('Asistencia', '¿Confirma asistencia del paciente?',
        function() { asistencia(id) },
        function() { alertify.error('Se cancelo') });

}

function falta(datos) {

    d = datos.split('||');

    idpaciente = d[0];
    idempleado = d[1];



    $.post("php/Registrafalta.php", { idempleado: idempleado, idpaciente: idpaciente }).
    done(function(data) {
        console.log(data);
        alertify.success("Falta registrada");
        $('#tabla').load('php/tabla.php');
    });


}

function asistencia(datos) {

    d = datos.split('||');

    idpaciente = d[0];
    idempleado = d[1];



    $.post("php/RegistraAsistencia.php", { idempleado: idempleado, idpaciente: idpaciente }).
    done(function(data) {
        console.log(data);
        alertify.success("Asistencia registrada");
        $('#tabla').load('php/tabla.php');
    });


}

function justificacion(datos) {

    d = datos.split('||');

    idpaciente = d[0];
    idempleado = d[1];


    $.post("php/RegistraJustificacion.php", { idpaciente: idpaciente }).
    done(function(data) {
        console.log(data);
        alertify.success("Registro justificado");
        $('#tabla').load('php/tabla.php');
    });
}

function justifica(id) {

    alert(id);
}