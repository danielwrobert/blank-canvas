<?php

// Adds Base URL dynamically in editor
function show_base_url() {
	return get_bloginfo('url');
}
add_shortcode('base_url', 'show_base_url');

?>