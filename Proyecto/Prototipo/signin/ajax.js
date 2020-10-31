function verifyUserPassword(){
    let usuariodata=$("#user").val();
    let passworddata=$("#password").val();
    $.post( "signinController.php", { usuario:usuariodata, password:passworddata} )
    .done(function( data ) {
        if(data!="false"){
            location.href = data;
        }else{
            $("#alert").removeClass("invisible");
            $("#alert").addClass("visible");
        }
        
      });
}