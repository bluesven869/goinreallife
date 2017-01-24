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
 * @since 1.0
 * @version 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!--<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a> -->

	<header id="masthead" class="site-header" role="banner">
     
		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<?php if ( has_nav_menu( 'top' ) ) : ?>
			<div class="navigation-top">
				<div class="wrap">
					<?php //get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
				</div><!-- .wrap -->
			</div><!-- .navigation-top -->
		<?php endif; ?>

	</header><!-- #masthead -->
	<div class="p">
		<h1>All your Dating Apps - in one unified experience </h1>
		<p>Less "dating" on your phone, more meeting people in the real world</p>
	</div>
	<div class="kento_email_subscriber">
		<div class="subscribe_theme_six">						
			<div class="subscribe_main">
				<div class="subscribe_form_option">
					<div>Centralized feed for all prospects</div>
					<div>Filter and sort matches across networks</div>
					<div>One message in box for all conversations</div>
					<div>Change your profile once, update it everywhere</div>

					<h4 class="subscribe_text">Email</h4>
					<input class="subscribe_email" placeholder="Type Email Address" name="email" type="email">
					<h4 class="subscribe_text">Name</h4>
					<input class="subscribe_name" placeholder="Type Your Name" name="name" type="name">	
					<input class="subscribe_submit" value="JOIN" type="button">
				</div>
			</div>
		</div>					
	</div>
	<?php
	// If a regular post or page, and not the front page, show the featured image.
	if ( has_post_thumbnail() && ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) ) :
		echo '<div class="single-featured-image-header">';
		the_post_thumbnail( 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
