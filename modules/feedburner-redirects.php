<?php

function custom_feed_link($output, $feed) {
		$feed_url = 'http://feeds.feedburner.com/[YOUR FEEDBURNER ACCOUNT NAME]';
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

?>