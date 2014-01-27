<?php

/* ==========================================================================
   IMAGE CONTROL
   ========================================================================== */
// Enable theme support for post thumbnails
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
       // set_post_thumbnail_size( 150, 150 ); // default Post Thumbnail dimensions   
}


// Remove Width and Height Attributes From Inserted Images
//		- http://css-tricks.com/snippets/wordpress/remove-width-and-height-attributes-from-inserted-images/
function remove_image_dimensions( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}
add_filter( 'post_thumbnail_html', 'remove_image_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_image_dimensions', 10 );
//add_filter( 'the_content', 'remove_image_dimensions', 10 );




/* ==========================================================================
   ACTIONS
   ========================================================================== */
// Clean up the <head>
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');




/* ==========================================================================
   FILTERS
   ========================================================================== */
// Enables additional visual-editor buttons (when enabled)
function additional_editor_buttons($buttons) {
  $buttons[] = 'hr';
  $buttons[] = 'sub';
  $buttons[] = 'sup';
  $buttons[] = 'fontselect';
  $buttons[] = 'fontsizeselect';
  $buttons[] = 'cleanup';
  $buttons[] = 'styleselect';
  return $buttons;
}
add_filter("mce_buttons_3", "additional_editor_buttons");

// Disable auto formatting paragraphs in editor
remove_filter('the_content','wpautop');

// If visual editor is enabled, HTML editor will still be default
add_filter('wp_default_editor', create_function('', 'return "html";'));





/* ==========================================================================
   Widgets
   ========================================================================== */
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name' => 'Sidebar Widgets',
		'id'   => 'sidebar-widgets',
		'description'   => 'These are widgets for the sidebar.',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));

	register_sidebar(array(
		'name' => 'Footer One',
		'id'   => 'footer-one',
		'description'   => 'These are widgets for the first footer section.',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Footer Two',
		'id'   => 'footer-two',
		'description'   => 'These are widgets for the middle footer section.',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));

	register_sidebar(array(
		'name' => 'Footer Three',
		'id'   => 'footer-three',
		'description'   => 'These are widgets for the last footer section.',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>'
	));
}




/* ==========================================================================
   SHORTCODES
   ========================================================================== */
// Adds Base URL dynamically in editor
function show_base_url() {
	return get_bloginfo('url');
}
add_shortcode('base_url', 'show_base_url');




/* ==========================================================================
   FEEDBURNER REDIRECTS
   ========================================================================== */
function custom_feed_link($output, $feed) {
		$feed_url = 'http://feeds.feedburner.com/CupOfVoodoo';
		$feed_array = array(
		'rss' => $feed_url,
		'rss2' => $feed_url,
		'atom' => $feed_url,
		'rdf' => $feed_url,
		'comments_rss2' => ''
	);
	$feed_array[$feed] = $feed_url;
	$output = $feed_array[$feed];
	return $output;
}
add_filter('feed_link','custom_feed_link', 1, 2);




/* ==========================================================================
   MISC FUNCTIONS
   ========================================================================== */
// Add RSS links to <head> section
add_theme_support( 'automatic-feed-links' );

?>