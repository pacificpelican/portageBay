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

    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/portagebay.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>

<body <?php body_class(); ?>>


<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'httpdjmcloud-danieljmckeown-com' ); ?></a>    

	<header id="masthead" class="site-header" role="banner">
		<nav class="light-blue lighten-1" role="navigation">
    	 <div class="container">
     		<div class="nav-wrapper"><a id="logo-container" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="waves-effect waves-light btn-large white-text"><i class="mdi-action-home center"></i></a>
      			<ul id="nav-mobile" class="left side-nav">
         			 <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
       			</ul><a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
    	  	</div>
   		 </div>
 		</nav>
 		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="waves-effect waves-light btn-large white-text"><h4><?php bloginfo( 'name' ); ?></h4></a>
	</header><!-- #masthead -->

	<div id="content" class="site-content container portage2">
	