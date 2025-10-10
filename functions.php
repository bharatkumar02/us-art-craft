<?php

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 
        'custom-cart-style', 
        get_stylesheet_directory_uri() . '/style.css', 
        array(), 
        filemtime( get_stylesheet_directory() . '/style.css' ) 
    );
});
add_filter( 'woocommerce_add_to_cart_redirect', function( $url ) {
    return wc_get_cart_url(); // redirects to the cart page
});

// function us_art_craft_theme_assets() {
 
// }
// add_action('wp_enqueue_scripts', 'us_art_craft_theme_assets');

// register_nav_menus([
//   'primary' => __('Primary Menu', 'us_art_craft-theme')
// ]);
