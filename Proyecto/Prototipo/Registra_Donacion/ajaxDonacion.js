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
        alert('Donación registrada exitosamente!');
    }

    $.post("./addDonacion.php", {
        donador: $("#donador").val(),
        descripcionDonacion: $("#descripcionDonacion").val(),
        fechaDonacion: $("#fechaDonacion").val(),
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
    if ($("#fechaDonacion").val() == '') {
        document.getElementById("fechaDonacion").style.borderColor = "red"
    } else {
        if ($("#fechaDonacion") != '') {
            document.getElementById("fechaDonacion").style.borderColor = "green";
        }
    }
}



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
$("#submitDonacion").on("click", redBorder);