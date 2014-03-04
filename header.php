<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?> > <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?> "> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?> > <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<!-- Mobile viewport optimized: j.mp/bplateviewport -->
	<meta name="viewport" content="width=device-width" />

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon-retina.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-icon.png" />

	<!-- // Enable Startup Image for iOS Home Screen Web App 
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/mobile-load.png" />

	<?php // Startup Image iPad Landscape (748x1024) ?> 
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-landscape.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)" />
	<?php // Startup Image iPad Portrait (768x1004) ?>
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load-ipad-portrait.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)" />
	<?php // Startup Image iPhone (320x460) ?>
	<link rel="apple-touch-startup-image" href="<?php echo get_template_directory_uri(); ?>/img/devices/reverie-load.png" media="screen and (max-device-width: 320px)" />

	-->

	<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300,700,300italic,700italic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>

</head>

<body <?php body_class('antialiased'); ?>>

<header class="site-header <?php if(!is_front_page()){ echo 'fixed contain-to-grid'; } ?>">
	<?php if(!is_front_page()){ 
		include('top-bar.php'); 
	} ?>



	<!-- Front Page Header -->
	<?php if(is_front_page()){ ?>

	<div class="front-page-header">
		<img class="header-image" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>"  />
		<div class="row">
			<a class="home-link row" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title large-12 small-12 columns" style="color: #<?php echo get_header_textcolor(); ?>"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description large-12 small-12 columns" style="color: #<?php echo get_header_textcolor(); ?>"><?php bloginfo( 'description' ); ?></h2>
			</a>
		</div>
	</div>


<?php } // End Front Page Header ?>

	
</header>


	<?php if(is_front_page()){ ?>
		<!-- Start the main container -->
		<div class="container" role="document">
			<div class="row">

	<?php	include('top-bar.php');  } ?>