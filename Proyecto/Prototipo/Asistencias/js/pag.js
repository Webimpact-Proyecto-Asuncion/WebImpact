var pag;
$( document ).ready(function() {
    const queryString = window.location.search;
    console.log(queryString);
    const urlParams = new URLSearchParams(queryString);
    pag = urlParams.get('page');
    if(pag==null){
        pag=1;
    }
    //console.log(id);
    //queryEmpleado(id)
    //setTimeout(,2000);
    pagin(pag);
});

function pagin(pag){
    $.get("./php/tabla.php",{page:pag}).
    done(function( data ) {
        console.log(data);
        $('#tabla').html(data);
        });
}