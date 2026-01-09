<?php

function my_custom_scripts()
{
    $version = '1.3.2';

    
    $local_path = get_template_directory_uri();
    //  Google Fonts poppins
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null);
     
    //google font inter
     wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap', array(), null);
     wp_enqueue_style('fonts', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css', array(), null);



    
    // Enqueue stylesheets
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/front-end/plugins/bootstrap/css/bootstrap.min.css', array(), '1.0.0', false);
     //Carousel css
    wp_enqueue_style('owl-css', $local_path . '/front-end/plugins/owl-carousel/dist/assets/owl.carousel.min.css', array(), '1.0.0', false);
    wp_enqueue_style('owl-theme', $local_path . '/front-end/plugins/owl-carousel/dist/assets/owl.theme.default.css', array(), '1.0.0', false);
    wp_enqueue_style('header-css', $local_path . '/front-end/css/header.css', array(), $version, false);
    wp_enqueue_style('custom-css', $local_path . '/front-end/css/custom.css', array(), $version, false);
   
  
   wp_enqueue_script('my-jquery' , get_template_directory_uri() . '/front-end/js/jquery.min.js', array(), '1.1.1', true);
    wp_enqueue_script('bootstrap-bundle', get_template_directory_uri() . '/front-end/plugins/bootstrap/js/bootstrap.bundle.min.js', array('my-jquery'), '1.1.1', true);
    wp_enqueue_script('lightbox-js', get_template_directory_uri() . '/front-end/plugins/lightbox/js/lightbox.min.js', array(), '1.1.1', true);
    


     //Carousel js
    wp_enqueue_script('owl-js', $local_path . '/front-end/plugins/owl-carousel/dist/owl.carousel.min.js', array(), '1.0.0', true);

    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/front-end/plugins/bootstrap/js/bootstrap.js', array(), '1.1.1', true);
    
    wp_enqueue_script('angular-js', get_template_directory_uri() . '/front-end/js/angular.min.js', array(), '1.1.1', true);
    wp_enqueue_script('app-js', get_template_directory_uri() . '/front-end/js/app.js', array(), '1.1.1', true);



    wp_enqueue_script('custom-js', get_template_directory_uri() . '/front-end/js/custom.js', array(), $version, true); 
  
}
add_action('wp_enqueue_scripts', 'my_custom_scripts');
add_theme_support('post-thumbnails');


 include('theme_function.php');


?>