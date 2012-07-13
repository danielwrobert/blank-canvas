<?php
	
// Add RSS links to <head> section
automatic_feed_links();


// Includes all files from modules directory
foreach ( glob( dirname(__FILE__) . '/modules/*.php') as $file ) {
	include $file;
}


// ACTIONS
// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');


//FILTERS
// Disable auto formatting paragraphs in editor
remove_filter('the_content','wpautop');
// If visual editor is enabled, HTML editor will still be default
//add_filter('wp_default_editor', create_function('', 'return "html";'));

?>