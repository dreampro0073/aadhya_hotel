jQuery(document).ready(function($){
  $('.banner-slider').owlCarousel({
    items: 1,
    loop: true,
    autoplay: true,
    nav: true,
    dots: true,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    autoplayTimeout: 5000,
    navText:['','']
  });

$(document).on("click",".toggle-menu",function(){
    $(this).toggleClass("open-menu");
    $("header ul.menu").slideToggle();

});

});



