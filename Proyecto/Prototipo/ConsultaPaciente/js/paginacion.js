function cambiarPagina() {
    pagina = $("#pagina").val();
    $.get("./php/paginacion.php", {
        pagina: pagina
    }).
    done(function(data) {
        console.log(data);
    })
}
$("#Previous").on("click", cambiarPagina);