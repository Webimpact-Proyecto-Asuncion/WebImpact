$("#creaPaciente").submit(function(event) {
    var request;
    event.preventDefault();

    if (request) {
        request.abort();
    }

    var $form = $(this);

    var $input = $form.find("input, select, button,textarea");

    var sData = $form.serialize();

    $input.prop("disabled", true);

    request = $.ajax({
        url: "uploadPic.php",
        type: "post",
        data: sData
    });

    request.done(function(response, textStatus, jqXHR) {
        console.log(response);
        $('#creaPaciente').each(function() {
            this.reset();
        });

    });

    request.fail(function(jqXHR, textStatus, errorThrown) {
        console.error(
            "ERROR: " + textStatus, errorThrown
        );

    });

    request.always(function() {
        $input.prop("disabled", false);
    })
});