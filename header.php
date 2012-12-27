<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="jp"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="jp"> <!--<![endif]-->

<head>
    <meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />



	<!-- Included CSS Files -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

	
	<script src="<?php echo get_template_directory_uri(); ?>/javascripts/foundation/modernizr.foundation.js" type="text/javascript"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>