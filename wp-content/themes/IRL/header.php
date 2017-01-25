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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>
	</header><!-- #masthead -->
	<div class="main-header-body">
		<div class="bar">&nbsp;</div>
		<div class="introduce">
			<h1>All your Dating Apps - in one unified experience </h1>
			<p class="caption">Less "dating" on your phone, more meeting people in the real world</p>

			<div class="desk">&nbsp;</div>
			<div class="right-computer">&nbsp;</div>
			<div class="right-side">&nbsp;</div>
			<div class="bar1">&nbsp;</div>
			<div class="email_container"> 
				<div class="kento_email_subscriber">
					<div class="subscribe_theme_six">						
						<div class="subscribe_main">
							<div class="subscribe_form_option">
								<div class="check-text"><i class="fa fa-check font-18" aria-hidden="true"></i>&nbsp;&nbsp;Centralized feed for all prospects</div>
								<div class="check-text"><i class="fa fa-check font-18" aria-hidden="true"></i>&nbsp;&nbsp;Filter and sort matches across networks</div>
								<div class="check-text"><i class="fa fa-check font-18" aria-hidden="true"></i>&nbsp;&nbsp;One message in box for all conversations</div>
								<div class="check-text"><i class="fa fa-check font-18" aria-hidden="true"></i>&nbsp;&nbsp;Change your profile once, update it everywhere</div>
								<div class="email">
								<input class="subscribe_email" placeholder="Get early access" name="email" type="email"><button class="subscribe_submit">SEND</button>
								</div>
								<h4 class="subscribe_text" style="display: none">Name</h4>
								<input class="subscribe_name"  style="display: none;" placeholder="Type Your Name" name="name" type="name">	
								<div id='subscribe_status' class="result">Enter your email to recieve access to beta release</div>
							</div>
						</div>
					</div>					
				</div>
			</div>			
		</div>
		<div class="footer-icon">
			&nbsp;
		</div>
	</div>

	<div class="site-content-contain">
		<div id="content" class="site-content">
