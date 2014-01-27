<?php

// Load Site Styles - (http://wp.tutsplus.com/articles/how-to-include-javascript-and-css-in-your-wordpress-themes-and-plugins/)
function register_styles()  
{  
    // Register the style like this for a theme:  
    wp_register_style( 'normalize', THEME_DIR . '/css/normalize.min.css', array(), '00', 'all' );
    wp_register_style( 'site-styles', THEME_DIR . '/style.css', array('normalize'), '00', 'all' );

    // OR
    // Register the style like this for a plugin:  
    //wp_register_style( 'site-styles', plugins_url( '/css/style.css', __FILE__ ), array(), '20120208', 'all' ); 
  
    // For either a plugin or a theme, you can then enqueue the style:  
    wp_enqueue_style( 'normalize' );
    wp_enqueue_style( 'site-styles' );

}  
add_action( 'wp_enqueue_scripts', 'register_styles' );  

?>