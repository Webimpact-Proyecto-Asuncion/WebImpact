$(document).ready(function() {
    var request;
    request = $.ajax({
            url: "GetPaciente.php",
            type: "post"
        }

    );

    request.done(function(response, textStatus, jqXHR) {
        //console.log(response);

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
                        $("#img").attr("src", response);
                        $(".preview img").show(); // Display image element
                        console.log(response);
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