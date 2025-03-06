<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">
		<?php _e( 'Skip to content', 'twentyseventeen' ); ?>
	</a>

	<header id="masthead" class="site-header">

		<!-- Custom Background Image -->
		<div class="custom-header-background"></div>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

		<!-- Custom Search Bar -->
		<div class="custom-widget-search">
			<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<input type="search" name="s" placeholder="Search..." />
				<button type="submit">🔍</button>
			</form>
		</div>

	</header><!-- #masthead -->

	<div class="site-content-contain">
		<div id="content" class="site-content">

<style>
.custom-header-background {
    background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/67335E43-16CE-4F72-9246-4242C7023DB3.webp');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    width: 100%;
    height: 400px; /* Adjust height as needed */
}
</style>
