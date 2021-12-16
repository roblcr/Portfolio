<?php

function portfolio_load_assets()
{
    $cssList = [ 
        "assets/css/animate.css", 
        "assets/css/icomoon.css",
        "assets/css/bootstrap.css",
        "assets/css/flexslider.css",
        "assets/fonts/flaticon/font/flaticon.css",
        "assets/css/owl.carousel.min.css",
        "assets/css/owl.theme.default.min.css",
        "assets/css/style.css"
    ];

    foreach($cssList as $css){
        wp_enqueue_style(
            $css,
            get_theme_file_uri($css) 
        );
    };

    $jsList = [
        "assets/js/modernizr-2.6.2.min.js",
        "assets/js/jquery.min.js",
        "assets/js/jquery.easing.1.3.js",
        "assets/js/bootstrap.min.js",
        "assets/js/jquery.waypoints.min.js",
        "assets/js/jquery.flexslider-min.js",
        "assets/js/owl.carousel.min.js",
        "assets/js/jquery.countTo.js",
        "assets/js/main.js"
    ];

    foreach($jsList as $js){
        wp_enqueue_script(
       $js,  
        get_theme_file_uri($js),
        [],
        null,
        true    
        );
    };
}

add_action('wp_enqueue_scripts', 'portfolio_load_assets');