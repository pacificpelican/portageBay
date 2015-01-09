<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Portage Bay
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>

    <link href="<?php bloginfo('template_directory'); ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="<?php bloginfo('template_directory'); ?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>

<body <?php body_class(); ?>>


<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'httpdjmcloud-danieljmckeown-com' ); ?></a>


	<header id="masthead" class="site-header" role="banner">

		<nav class="light-blue lighten-1" role="navigation">
    	 <div class="container">
     		<div class="nav-wrapper"><a id="logo-container" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="brand-logo"><?php bloginfo( 'name' ); ?></a>
      			<ul id="nav-mobile" class="right side-nav">
         			 <li><?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?></li>
       			</ul><a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    	  	</div>
   		 </div>
 		</nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content container">
	