<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <?php if (is_search()) { ?>
        <meta name="robots" content="noindex, nofollow" /> 
    <?php } ?>

    <title>
        <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page() && !is_page('home'))) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home() || is_page('home')) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
    </title>
    <meta name="author" content="" />
    <meta name="copyright" content="Copyright © <?php echo date("Y"); ?>" />
    <meta name="description" content="" />

    <meta name="viewport" content="width=device-width,initial-scale=1">

    <link rel="shortcut icon" href="/favicon.ico" />
    <!-- <link rel="apple-touch-icon" href="/apple-touch-icon.png"> -->

    <!-- CSS concatenated and minified via ant build script -->
    <!-- <link rel="stylesheet" href="<?php //bloginfo('template_directory'); ?>/css/normalize.css"> -->
    <!-- <link rel="stylesheet" href="<?php //bloginfo('stylesheet_url'); ?>"> -->
    <!-- end CSS -->
    
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <script type="text/javascript" src="http://use.typekit.com/nyg0rtf.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <header>

    </header>
    <div id="main" class="clearfix" role="main">
        <div class="content">