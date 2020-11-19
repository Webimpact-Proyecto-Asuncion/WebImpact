$(document).ready(function() {
<<<<<<< HEAD
    var request;
    request = $.ajax({
        url: "Registra_Donacion.php",
        type: "post"
    });

    request.done(function(response, textStatus, jqXHR) {
        //console.log(response);

    });

    $("#formDonacion").submit(function(event) {
        var request;

        event.preventDefault();

        if (request) {
            request.abort();
        }

        var $form = $(this);

        var $input = $form.find("input, select, button, textarea");

        var sData = $form.serialize();

        $input.prop("disabled", true);

        request = $.ajax({
            url: "addDonacion.php",
            type: "post",
            data: sData
        });

        request.done(function(response, textStatus, jqXHR) {
            //console.log(response);
            $('#formDonacion').each(function() {
                this.reset();
            });
            //alert(response);

        });

        request.fail(function(jqXHR, textStatus, errorThrown) {
            console.error("ERROR: " + textStatus, errorThrown);
        });

        request.always(function() {
            $input.prop("disabled", false);
        });
    });
});

//*Donador:

let submit = document.getElementById("submitDonacion"); //validar
let donador = document.getElementById("donador");
let donadorC = document.getElementById("donadorCorrecto");
let donadorE = document.getElementById("donadorError");

let descripcion = document.getElementById("descripcionDonacion");
let spanDescripcionE = document.getElementById("descripcionError");
let spanDescripcionC = document.getElementById("descripcionCorrecta");

let fecha = document.getElementById("fechaDonacion");
let spanFechaC = document.getElementById("fechaC");
let spanFechaE = document.getElementById("fechaE");


donadorC.hidden = true;
donadorE.hidden = true;

spanDescripcionE.hidden = true;
spanDescripcionC.hidden = true;

spanFechaC.hidden = true;
spanFechaE.hidden = true;



function razonSocial(razonS) {
    if (!razonS) {
        throw "Selecciona una Razón Social.";
    }
    return true;
}

function descripcionDonador(d) {
    if (!d) {
        throw "Ingresa una descripción.";
    }
    return true;
}

function fechaDonacion(f) {
    if (!f) {
        throw "Selecciona una fecha de ingreso."
    }
    return true;
}

function checarCampos() {

    donante = donador.value;
    desc = descripcion.value;
    fechaD = fecha.value;



    try {
        razonSocial(donante);


        donadorE.hidden = true;
        donadorC.hidden = false;
        donadorC.innerText = "✔" + " Razón Social Válida";
        donadorE.innerText = "";



    } catch (e) {

        donadorC.hidden = true;
        donadorE.hidden = false;
        donadorC.innerText = "";
        donadorE.innerText = "❌" + " " + e;


    }

    try {
        descripcionDonador(desc);
        spanDescripcionC.hidden = false;
        spanDescripcionC.innerText = "✔" + " Descripción aceptada";
        spanDescripcionE.innerText = "";
        spanDescripcionE.hidden = true;


    } catch (e) {
        spanDescripcionE.hidden = false;
        spanDescripcionC.hidden = true;
        spanDescripcionC.innerText = "";
        spanDescripcionE.innerText = "❌" + " " + e;

    }

    try {
        fechaDonacion(fechaD);
        spanFechaC.hidden = false;
        spanFechaC.innerText = "✔" + " Fecha aceptada.";
        spanFechaE.hidden = true;
        spanFechaE.innerText = "";

    } catch (e) {
        spanFechaE.hidden = false;
        spanFechaC.hidden = true;
        spanFechaC.innerText = "";
        spanFechaE.innerText = "❌" + " " + e;
    }


}

submit.addEventListener("click", checarCampos);
=======
    getDonadores();

});


function registrarDonacion() {
    if ($("#donador").val() == '' || $("#descripcionDonacion").val() == '' || $("#fechaDonacion").val() == '') {
        alert('Porfavor llena todos los campos!!');
    } else {
        alert('Bien hecho');
    }

    $.post("./addDonacion.php", {
        donador: $("#donador").val(),
        descripcionDonacion: $("#descripcion").val(),
        fechaDonacion: $("#fechaDonacion").val()
    }).
    done(function(data) {
        console.log(data);
    })
}


$("#submitDonacion").on("click", registrarDonacion);


function getDonadores() {
    $.get("controladorGetDonador.php", {


    }).
    done(function(data) {
        $("#donador").append(data);
    })

}
>>>>>>> RegistrarPaciente
