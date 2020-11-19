$(document).ready(function() {
    getDonadores();

});

function getDonadores() {
    $.get("controladorGetDonador.php", {


    }).
    done(function(data) {
        $("#donador").append(data);
    })

}

function registrarDonacion() {
    if ($("#donador").val() == '' || $("#descripcionDonacion").val() == '' || $("#fechaDonacion").val() == '') {
        alert('Porfavor llena todos los campos!!');
    } else {
        alert('Bien hecho');
    }

    $.post("./addDonacion.php", {
        donador: $("#donador").val(),
        descripcionDonacion: $("#descripcionDonacion").val(),
        fechaDonacion: $("#fechaDonacion").val()
    }).
    done(function(data) {
        console.log(data);
    })
}


$("#submitDonacion").on("click", registrarDonacion);

function redBorder() {

    if ($("#donador").val() == '') {
        document.getElementById("donador").style.borderColor = "red";
    } else {
        document.getElementById("donador").style.borderColor = "green";
    }

    if ($("#descripcionDonacion").val() == '') {
        document.getElementById("descripcionDonacion").style.borderColor = "red";
    } else {
        document.getElementById("descripcionDonacion").style.borderColor = "green";
    }
}

$("#submitDonacion").on("click", redBorder);