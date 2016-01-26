<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}


/* ---- IMAGE SIZING ------------------------- */

add_image_size( 'landscape-featured',      1200, 300,  true );

add_image_size( 'landscape-featured-archive',      1200, 500,  true );

add_image_size( 'landscape-home-page',      1200, 600,  true );



?>