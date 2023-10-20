<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test-technique
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?> 
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'test-technique' ); ?></a>

	<header id="masthead" class="site-header">
		
		<img src="\test-technique-r2\wordpress\wp-content\uploads\2023\10\logotestR2.png" alt="logo" id="logo">
		<nav>
			<ul>
				<li class="menu"><a href="#"> Ut bibendum</a><i class="arrow-menu"></i></li>
				<li class="menu"><a href="#" class="selected-menu"> Suspendisse at</a><i class="arrow-menu selected-arrow"></i></li>
				<li class="menu"><a href="#"> Quisque</a><i class="arrow-menu"></i></li>
				<li class="menu"><a href="#"> lacus eu sodales</a><i class="arrow-menu"></i></li>
			</ul>
		</nav>
		<button id="button-header"> Fusce</button>

	</header><!-- #masthead -->
