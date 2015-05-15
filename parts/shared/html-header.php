<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<!--[if lte IE 8]>
                        <link rel="stylesheet"  href="<?php bloginfo('stylesheet_directory'); ?>/css/kickoff-old-ie.css" />
		<![endif]-->
						<!-- Remove the bloginfo php script if css folder is in the root directory -->
		<!--[if gt IE 8]><!-->
			<link rel="stylesheet"  href="<?php bloginfo('stylesheet_directory'); ?>/css/kickoff.css" />
						<!-- Remove the bloginfo php script if css folder is in the root directory -->
		<!--<![endif]-->
			
    <script>
    window.grunticon=function(a){if(a&&3===a.length){var b=window,c=!(!b.document.createElementNS||!b.document.createElementNS("http://www.w3.org/2000/svg","svg").createSVGRect||!document.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#Image","1.1")||window.opera&&-1===navigator.userAgent.indexOf("Chrome")),d=function(d){var e=b.document.createElement("link"),f=b.document.getElementsByTagName("script")[0];e.rel="stylesheet",e.href=a[d&&c?0:d?1:2],e.media="only x",f.parentNode.insertBefore(e,f),setTimeout(function(){e.media="all"})},e=new b.Image;e.onerror=function(){d(!1)},e.onload=function(){d(1===e.width&&1===e.height)},e.src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw=="}},grunticon(["/img/icons/icons.data.svg.css","/img/icons/icons.data.png.css","/img/icons/icons.fallback.css"]);
    </script>
    <noscript>
        <link href="/img/icons/icons.fallback.css" rel="stylesheet">
    </noscript>

		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>

		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/libs/modernizr.min.js"></script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
