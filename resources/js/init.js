$(document).ready(function() {
    M.AutoInit();
});

$(function(){ //
    var navbarTop = $('#navbar').offset().top; // retorna a posicao

    $(window).scroll(function(){ // evento scroll
        var windowTop = $(window).scrollTop();
        $('#navbar>nav').removeClass("z-depth-0");

        if (navbarTop < windowTop) {
            $('#navbar').addClass("navbar-fixed");
            $('#navbar>nav').removeClass("z-depth-0");
        } else {
            $('#navbar').removeClass("navbar-fixed");
            $('#navbar>nav').addClass("z-depth-0");
        }
    });
});
