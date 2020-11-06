$(document).ready(function() {
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
            alert(response);

        });

        request.fail(function(jqXHR, textStatus, errorThrown) {
            console.error("ERROR: " + textStatus, errorThrown);
        });

        request.always(function() {
            $input.prop("disabled", false);
        });
    });
});