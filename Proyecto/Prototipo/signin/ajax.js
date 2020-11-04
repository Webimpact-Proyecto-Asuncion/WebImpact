function verifyUserPassword(){
    let usuariodata=$("#user").val();
    let passworddata=$("#password").val();
    $.post( "signinController.php", { usuario:usuariodata, password:passworddata} )
    .done(function( data ) {
        if(data!="false"){
            console.log(data);
            location.href = data;
        }else{
            $("#alert").removeClass("invisible");
            $("#alert").addClass("visible");
        }
        
      });
}

$("#entrar").on("click",verifyUserPassword);