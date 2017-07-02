<?php
/**
 * The header.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BootstrapFast
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="<?php echo esc_attr( container_type() ); ?>">
		<div class="row">
			<header id="masthead" class="site-header col-xs-12 <?php echo esc_attr( main_header_style() ) ?>" role="banner">
				<div class="site-branding"><?php
				if ( get_the_logo_url() ) { ?>
				    <div id="site-header">
						<?php the_custom_logo(); ?>
						Digital Basurero
					</div> <?php
				} else {
					if ( is_front_page() && is_home() ) { ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1><?php
					} else { ?>
						<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p> <?php
					}

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) { ?>
						<p class="site-description"><?php echo esc_attr( $description ); ?></p> <?php
					}
				} ?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bootstrapfast' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation --> <?php
				if ( main_sidebar_placement() ) {
						get_sidebar();
				} ?>
			</header><!-- #masthead -->

			<div id="content" class="site-content col-xs-12 <?php echo esc_attr( main_body_style() ) ?>">
