
function regresar(){

    alertify.success("Regreso");
    setTimeout(()=>location.href="../dashboard/dashboard.php",2000);


}

$("#regresar").on("click",regresar);