$(document).ready(function() {
    var navbar = $('.navbar'),
        navbarOffset = navbar.outerHeight()+navbar.offset().top;
    console.log(navbarOffset);
    $(window).scroll(function(){
        if($(window).scrollTop() > navbarOffset){
            navbar.addClass('navbar-fixed-top');
            $('body').css('margin-top',navbar.outerHeight());
        }else{
            navbar.removeClass('navbar-fixed-top');
            $('body').css('margin-top',0);
        }
    });
    
    $(".carousel-inner").swiperight(function() {
       $(this).parent().carousel('prev');
    });
    $(".carousel-inner").swipeleft(function() {
       $(this).parent().carousel('next');
    });
});