<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package GRIPAJAR
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="homepage">
			<p class="site-description"><?php printf( get_bloginfo ( 'description' ) ); ?></p>
			<video id="homevideo" controls width="100%" poster="<?php echo get_stylesheet_directory_uri(); ?>/img/poster.jpg">
				<source src="<?php echo get_stylesheet_directory_uri(); ?>/video/GL3A0872.ogv" type='video/ogg; codecs="theora, vorbis"'/>
				<source src="<?php echo get_stylesheet_directory_uri(); ?>/video/GL3A0872.webm" type='video/webm' >
				<source src="<?php echo get_stylesheet_directory_uri(); ?>/video/GL3A0872.mp4" type='video/mp4'>
				<p>Video is not visible, most likely your browser does not support HTML5 video. Please use a browser like <a href="https://www.google.com/chrome/browser/desktop/index.html">Chrome</a> or <a href="https://www.mozilla.org/en-US/firefox/new/">Firefox</a></p>
			</video>
		<hr id="separator">
		<p id="aboutlink"></p>
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>	
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
