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

$("a.scroll-link").click(function (e) {
    // e.preventDefault();

    // var hash = $(this).attr("href");
    // var target = $(hash);

    // if (hash && target.length) {
    //     $('html, body').animate({
    //         scrollTop: target.offset().top - 30
    //     }, 800);
    // }

   if(mobile_site){
      $("header ul.menu").slideUp();
      $(".toggle-menu").toggleClass("open-menu");
    }
   
   
});



