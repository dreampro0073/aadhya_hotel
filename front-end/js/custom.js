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

// function resetVideo(){
//     console.log('reset is the');
//     $(".vivo-hero-image").removeClass("active");
//     $(".vid-yt").html(""); // clear all
// }

// $(document).on("click", ".vivo-hero-image", function(e) {
//     e.preventDefault();
//     var video_url = $(this).attr("href");
//     resetVideo();
//     var html = '<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/'+video_url+'?loop=1&autoplay=1&mute=0" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>';
//     $(this).parent().find('.vid-yt').eq(0).html(html);
//     $(this).toggleClass("active");
// });


function resetVideo(){
    console.log('reset is the');
    $(".vivo-hero-image").removeClass("active");
    $(".vid-yt").html(""); // clear all
}
$(document).on("click", ".vivo-hero-image", function(e) {
    e.preventDefault();

    var videoId = $(this).data("video");

    $(this).hide();

    $(this).next(".vid-yt").html(`
        <iframe
            width="100%"
            height="450"
            src="https://www.youtube.com/embed/${videoId}?autoplay=1&playsinline=1"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen>
        </iframe>
    `);
});



