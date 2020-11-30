$("#but_upload").click(function() {

    var fd = new FormData();
    var files = $('#file')[0].files;

    // Check file selected or not
    if (files.length > 0) {
        fd.append('file', files[0]);

        $.ajax({
            url: 'uploadcsv.php',
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
                    bulkInsert(path);
                } else {
                    alert('file not uploaded');
                }
            },
        });
    } else {
        alert("Please select a file.");
    }
});

function bulkInsert(path){
    $.post("./controladorbulk.php",{path:path}).
        done(function( data ) {
            alertify.success('CargaMasiva  con exito');
            setTimeout(()=>location.href="../dashboard/dashboard.php",2000);
        });
}