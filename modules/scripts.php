<?php

define("THEME_DIR", get_template_directory_uri());

// Load jQuery From Google CDN With Local Fallback -- http://bit.ly/rvYMl0
/**
* NOTE: It’s important to note that this should only be done on plugins or 
*       themes used on sites that you will be personally maintaining.
*       I am leaving it in here, commented out, in case you still want to override this.
**/
/*
$url = 'http://ajax.googleapis.com/ajax/vendor/jquery/1.10.2/jquery.min.js'; // the URL to check against
$test_url = @fopen($url,'r'); // test parameters
if($test_url !== false) { // test if the URL exists
    function load_external_jQuery() { // load external file
        wp_deregister_script( 'jquery' ); // deregisters the default WordPress jQuery
        wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/vendor/jquery/1.10.2/jquery.min.js', array(), '0.0', true); // register the external file
        wp_enqueue_script('jquery'); // enqueue the external file
    }
    add_action('wp_enqueue_scripts', 'load_external_jQuery'); // initiate the function
} else {
    function load_local_jQuery() {
        wp_deregister_script('jquery'); // initiate the function
        wp_register_script('jquery', THEME_DIR . '/js/vendor/jquery-1.10.2.min.js', array(), '0.0', true); // register the local file
        wp_enqueue_script('jquery'); // enqueue the local file
    }
    add_action('wp_enqueue_scripts', 'load_local_jQuery'); // initiate the function
}
*/


// Load scripts
function load_my_scripts() {
    wp_register_script( 'modernizer', THEME_DIR . '/js/vendor/modernizr-2.7.1.min.js', array(), '0.0', false );
    wp_register_script( 'plugins', THEME_DIR . '/js/plugins.js', array( 'jquery' ), '0.0', true );
    wp_register_script( 'script', THEME_DIR . '/js/main.js', array( 'jquery' ), '0.0', true );
    wp_enqueue_script( 'modernizer' );
    wp_enqueue_script( 'plugins' );
    wp_enqueue_script( 'script' );
}
add_action( 'wp_enqueue_scripts', 'load_my_scripts' );
?>