var lastPaciente;
var src;

$(document).ready(function() {

    queryLastPaciente();

    $('.carousel').carousel({
        interval: false,
    });

    $("#but_upload").click(function() {

        var fd = new FormData();
        var files = $('#file')[0].files;

        // Check file selected or not
        if (files.length > 0) {
            fd.append('file', files[0]);

            $.ajax({
                url: 'uploadImage.php',
                type: 'post',
                data: fd,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response != 0) {
                        /*$("#img").attr("src", response);
                        $(".preview img").show(); // Display image element
                        console.log(response);*/
                        src = response;
                        console.log("src: " + src);
                    } else {
                        alert('file not uploaded');
                    }
                },
            });
        } else {
            alert("Please select a file.");
        }
    });

});


$("#siguiente").on("click", function() {
    $('.carousel').carousel('next');
    $('.carousel').carousel({
        interval: false,
    });
});


$("#siguiente2").on("click", function() {
    $('.carousel').carousel('next');
    $('.carousel').carousel({
        interval: false,
    });
});

$("#anterior").on("click", function() {
    $('.carousel').carousel('prev');
    $('.carousel').carousel({
        interval: false,
    });
});

$("#anterior2").on("click", function() {
    $('.carousel').carousel('prev');
    $('.carousel').carousel({
        interval: false,
    });
});

$("#estado").change(function() {
    console.log("CAMBIO");
    console.log($('#estado').val());
    $.get("controladorMunicipio.php", {
        estado: $("#estado").val(),

    }).
    done(function(data) {
        console.log(data)

        $("#municipio").html(data);
    });



})

function registrarPacientes() {
    if ($("#nombre").val() == '' ||
        $("#apellidoP").val() == '' ||
        $("#apellidoM").val() == '' ||
        $("#domicilio").val() == '' ||
        $("#estado").val() == '' ||
        $("#tel").val() == '' ||
        $("#correo").val() == '' ||
        $("#nacimiento").val() == '' ||
        $("#genero").val() == '' ||
        $("#diagnostico").val() == '' ||
        $("#lesion").val() == '' ||
        $("#ingreso").val() == '' ||
        $("#dependencia").val() == '') {

        alert('Porfavor llena todos los campos!!');
    }
    console.log(src);
    $.post("./InsertPaciente.php", {
        nombre: $("#nombre").val(),
        apellidoP: $("#apellidoP").val(),
        apellidoM: $("#apellidoM").val(),
        domicilio: $("#domicilio").val(),
        estado: $("#estado").val(),
        tel: $("#tel").val(),
        correo: $("#correo").val(),
        nacimiento: $("#nacimiento").val(),
        genero: $("#genero").val(),
        diagnostico: $("#diagnostico").val(),
        lesion: $("#lesion").val(),
        ingreso: $("#ingreso").val(),
        dependencia: $("#dependencia").val(),
        estudioSE: src
    }).
    done(function(data) {
        //console.log(data)
        //$("#municipio").html(data);
    });
}


$("#registrarPaciente").on("click", registrarPacientes);

function queryLastPaciente() {
    $.get("controladorLastPaciente.php", {

    }).
    done(function(data) {
        //lastPaciente = parseInt(data) + 1;
        //console.log(lastPaciente);
    });

}