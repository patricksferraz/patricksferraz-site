$(document).ready(function() {
    M.AutoInit();
});

$(function(){ //
    var navbarTop = $('#nav-principal').offset().top; // retorna a posicao

    $(window).scroll(function(){ // evento scroll
        var windowTop = $(window).scrollTop();

        if (navbarTop < windowTop) {
            $('#nav-principal').removeClass("z-depth-0");
        } else {
            $('#nav-principal').addClass("z-depth-0");
        }
    });
});
