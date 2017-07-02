<?php
/**
 * The main template file.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BootstrapFast
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( get_header_image() ) { ?>
				<div class="headercontainer">
					<img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
				</div>
			<?php } ?>

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
		endif; ?>
				<div class="entry-content">
				<figure id="attachment_49" style="width: 219px" class="wp-caption aligncenter"><img class="wp-image-49 size-full" src="http://13.55.209.135/digibasurero/wp-content/uploads/2017/07/imgresizer.jpeg" alt="" width="219" height="288" pagespeed_url_hash="2647237099" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"><figcaption class="wp-caption-text">Hi Mr. Poging Trasher</figcaption></figure>
		<p>&nbsp;</p>
		<figure id="attachment_51" style="width: 300px" class="wp-caption aligncenter"><img class="wp-image-51 size-medium" src="http://13.55.209.135/digibasurero/wp-content/uploads/2017/07/l25-300x300.png" alt="" width="300" height="300" srcset="http://13.55.209.135/digibasurero/wp-content/uploads/2017/07/l25-300x300.png 300w, http://13.55.209.135/digibasurero/wp-content/uploads/2017/07/l25-150x150.png 150w, http://13.55.209.135/digibasurero/wp-content/uploads/2017/07/l25.png 420w" sizes="(max-width: 300px) 100vw, 300px" pagespeed_url_hash="1901316867" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
			<figcaption class="wp-caption-text">You are a level 25 Environmental saver!</figcaption>
			<figcaption class="wp-caption-text">Gain more level by sharing information about Waste Mangement in social media</figcaption>
		</figure>
			</div>
			<h1>Nagbabagang Balita!</h1>
			<?php

			/* Start the Loop */
			while ( have_posts() ) : the_post();
				// echo 'News';
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
