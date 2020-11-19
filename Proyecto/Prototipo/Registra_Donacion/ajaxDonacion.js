$(document).ready(function() {
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