$(document).ready(function() {
    var request;
    request = $.ajax({
            url: "GetPaciente.php",
            type: "post"
        }

    );
    request.done(function(response, textStatus, jqXHR) {
        console.log(response);
        $('#table').html(response);
    });

    $("#form").submit(function(event) {

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
            url: "InsertPaciente.php",
            type: "post",
            data: sData
        });

        request.done(function(response, textStatus, jqXHR) {
            console.log(response);
            $('#form').each(function() {
                this.reset();
            });
            //$('#table').html(response);
        });

        //In case of errors:
        request.fail(function(jqXHR, textStatus, errorThrown) {
            //Give me error on console:
            console.error(
                "ERROR: " + textStatus, errorThrown
            );
        });

        request.always(function() {
            $input.prop("disabled", false);
        });
    });

});