<?php
/**
 * Template Name: Contact Template
 */

get_header();
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		do_action( 'before_main_content' );
			get_template_part( 'template-parts/pages/contact/header' );
			get_template_part( 'template-parts/pages/contact/content' );
			get_template_part( 'template-parts/pages/contact/support' );
		do_action( 'after_main_content' );
	endwhile;
endif;
get_footer();
