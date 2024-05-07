<?php

/**
 * This function open the main content.
 */
function theme_before_main_content() {
	?>
	<main id="main-content" class="main-content overflow-hidden mt-auto">
	<?php
}

add_action( 'before_main_content', 'theme_before_main_content' );

/**
 * This function closes the main content.
 */
function theme_after_main_content() {
	?>
	</main><!-- #main-content-->
	<?php
}

add_action( 'after_main_content', 'theme_after_main_content' );

/**
 * This function open the post content.
 */
function theme_before_post_content() {
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
}

add_action( 'before_post_content', 'theme_before_post_content' );

/**
 * This function closes the post content.
 */
function theme_after_post_content() {
	?>
	</article><!-- #article -->
	<?php
}

add_action( 'after_post_content', 'theme_after_post_content' );


/**
 * This theme logo.
 */
function theme_logo() {
	?>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 89 50" fill="none" class="ds-logo-icon"><path d="M0 15.8833L6.89697 18.9794V25.0909L78.6566 31.982V34.3455C78.4501 37.7449 75.6219 40.4468 72.1727 40.4468H16.3966V28.7336L0.00146606 27.2361L6.89843 30.13V49.949H72.1742C81.0074 49.949 88.1694 42.7853 88.1694 33.9469V24.6177L0.00293213 15.8833H0Z" fill="#14A5BB"></path><path d="M88.1665 21.8953L78.6669 20.9443V16.002C78.6669 12.4195 75.7523 9.50363 72.1712 9.50363H16.3951V14.6599L6.89551 13.7924V0H72.1712C80.9913 0 88.1665 7.17828 88.1665 16.002V21.8938V21.8953Z" fill="#14A5BB"></path></svg>
	<?php
}

add_action( 'theme_logo', 'theme_logo' );

/**
 * This theme logo for mobile.
 */
function theme_logo_mobile() {
	?>
	<svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" id="hotel-schoenegg-logo-mobile" x="0" y="0" version="1.1" viewBox="0 0 237.2 19.2" class="max-w-full object-cover w-full h-auto"><path fill="#484848" d="M0 18.8v-.6h2V4.4H0v-.6h7.3v.6h-2v6.4h6V4.4h-2v-.6h7.3v.6h-2v13.8h2v.6H9.3v-.6h2v-6.7h-6v6.7h2v.6H0zM19.8 11.3c0-2.3.7-4.1 2.2-5.6 1.4-1.4 3.3-2.2 5.7-2.2s4.3.7 5.7 2.2c1.4 1.4 2.2 3.3 2.2 5.6s-.7 4.2-2.2 5.6C32 18.3 30.1 19 27.7 19s-4.3-.7-5.7-2.2c-1.5-1.4-2.2-3.2-2.2-5.5zm3.7 0v1.5c0 .4.1.9.2 1.5s.2 1.1.4 1.6c.2.4.4.9.7 1.3.3.4.7.7 1.2.9.5.2 1 .3 1.7.3.6 0 1.2-.1 1.7-.3.5-.2.9-.5 1.2-.9.3-.4.5-.8.7-1.3.2-.4.3-1 .4-1.6.1-.6.1-1.1.2-1.5V9.9c0-.4-.1-.9-.2-1.5s-.2-1.1-.4-1.6c-.2-.4-.4-.9-.7-1.3-.3-.4-.7-.7-1.2-.9-.5-.2-1-.3-1.7-.3-.6 0-1.2.1-1.7.3-.5.2-.9.5-1.2.9-.3.4-.5.8-.7 1.3-.2.4-.3 1-.4 1.6-.1.6-.1 1.1-.2 1.5v1.4zM42.4 18.8v-.6h2V4.4h-.8c-1.4 0-2.5.4-3.2 1.3-.7.9-1.1 1.9-1.1 3.1h-.6v-5h14.7v5.1h-.6c0-1.2-.4-2.3-1.1-3.1s-1.8-1.3-3.2-1.3h-.8v13.8h2v.6h-7.3zM55.9 18.8v-.6h2V4.4h-2v-.6h13v4.7h-.6c-.3-1.5-.8-2.6-1.8-3.2-.9-.6-2.2-.9-3.8-.9h-1.5v6.4c2.3 0 3.5-1 3.5-3h.6v6.8h-.6c0-1.2-.3-2-.9-2.5s-1.4-.7-2.6-.7v6.7h2.2c.6 0 1.2-.1 1.8-.2.6-.1 1.1-.4 1.6-.7s1-.8 1.3-1.4c.3-.6.6-1.3.7-2.2h.6v5.1H55.9zM72.4 18.8v-.6h2V4.4h-2v-.6h7.3v.6h-2v13.8h2.5c.6 0 1.2-.1 1.8-.2.6-.1 1.1-.4 1.6-.7.5-.3 1-.8 1.3-1.4.3-.6.6-1.4.7-2.3h.6v5.2H72.4zM96.5 18l-.2-4.3h.7c.1 1.2.5 2.2 1.4 3.1.8.9 1.9 1.4 3.2 1.4.9 0 1.7-.2 2.3-.6.6-.4.9-1 .9-1.9 0-.7-.3-1.2-.9-1.7s-1.3-.8-2.1-1.1-1.6-.6-2.4-1c-.8-.3-1.5-.8-2.1-1.5S96.5 9 96.5 8s.3-1.9.8-2.6 1.1-1.2 1.8-1.5c.7-.3 1.5-.4 2.3-.4 1.2 0 2.6.3 4.2.9l.2 3.6h-.7c-.2-1.1-.7-2-1.4-2.7-.7-.7-1.6-1.1-2.6-1.1-.7 0-1.3.2-1.7.6-.4.4-.7 1-.7 1.6 0 .6.3 1.1.8 1.5.6.4 1.2.8 2 1 .8.3 1.6.6 2.4 1 .8.4 1.5.9 2 1.6.6.7.8 1.6.8 2.7 0 1.3-.5 2.4-1.6 3.3-1 .9-2.3 1.3-3.9 1.3-1.6.2-3.2-.1-4.7-.8zM123.8 4.7V9h-.6c-.1-1.3-.6-2.5-1.5-3.4-.9-1-2-1.4-3.2-1.4-3.1 0-4.6 2.4-4.6 7.1v1.2c0 .4.1.8.1 1.3.1.5.2 1 .3 1.4.1.4.3.8.5 1.2.2.4.5.8.8 1 .3.3.7.5 1.2.7.5.2 1 .3 1.6.3 1.2 0 2.3-.5 3.3-1.4 1-1 1.5-2.1 1.7-3.4h.6v4.2c-2 .8-3.9 1.2-5.7 1.2-2.4 0-4.3-.7-5.7-2.2-1.4-1.4-2.2-3.3-2.2-5.6s.7-4.1 2.2-5.6c1.4-1.4 3.3-2.2 5.7-2.2 1.5.1 3.3.5 5.5 1.3zM126.9 18.8v-.6h2V4.4h-2v-.6h7.3v.6h-2v6.4h6V4.4h-2v-.6h7.3v.6h-2v13.8h2v.6h-7.3v-.6h2v-6.7h-6v6.7h2v.6h-7.3zM146.7 11.3c0-2.3.7-4.1 2.2-5.6 1.4-1.4 3.3-2.2 5.7-2.2s4.3.7 5.7 2.2c1.4 1.4 2.2 3.3 2.2 5.6s-.7 4.2-2.2 5.6c-1.4 1.4-3.3 2.2-5.7 2.2s-4.3-.7-5.7-2.2c-1.5-1.5-2.2-3.3-2.2-5.6zm3.7 0v1.5c0 .4.1.9.2 1.5s.2 1.1.4 1.6c.2.4.4.9.7 1.3.3.4.7.7 1.2.9.5.2 1 .3 1.7.3.6 0 1.2-.1 1.7-.3.5-.2.9-.5 1.2-.9.3-.4.5-.8.7-1.3.2-.4.3-1 .4-1.6.1-.6.1-1.1.2-1.5V9.9c0-.4-.1-.9-.2-1.5s-.2-1.1-.4-1.6c-.2-.4-.4-.9-.7-1.3-.3-.4-.7-.7-1.2-.9-.5-.2-1-.3-1.7-.3-.6 0-1.2.1-1.7.3-.5.2-.9.5-1.2.9-.3.4-.5.8-.7 1.3-.2.4-.3 1-.4 1.6-.1.6-.1 1.1-.2 1.5v1.4zm1-8.9c-.3-.3-.4-.6-.4-1s.1-.7.4-1c.3-.3.6-.4 1-.4s.7.1 1 .4c.3.3.4.6.4 1s-.1.7-.4 1c-.3.3-.6.4-1 .4s-.8-.2-1-.4zm4.4 0c-.3-.3-.4-.6-.4-1s.1-.7.4-1c.3-.3.6-.4 1-.4s.7.1 1 .4c.3.3.4.6.4 1s-.1.7-.4 1c-.3.3-.6.4-1 .4s-.8-.2-1-.4zM165.5 18.8v-.6h2.1V4.4h-2.1v-.6h6l7.6 9.9V4.4h-2.3v-.6h5.1v.6h-2.1V19l-.5.1-11.1-14v13h2.3v.6h-5zM184.4 18.8v-.6h2V4.4h-2v-.6h13v4.7h-.6c-.2-1.5-.8-2.6-1.7-3.2-.9-.6-2.2-.9-3.8-.9h-1.5v6.4c2.3 0 3.5-1 3.5-3h.6v6.8h-.6c0-1.2-.3-2-.9-2.5s-1.4-.7-2.6-.7v6.7h2.2c.6 0 1.2-.1 1.8-.2.6-.1 1.1-.4 1.6-.7s1-.8 1.3-1.4c.3-.6.6-1.3.7-2.2h.6v5.1h-13.6zM211 12v-.6h7v.6h-1.8v5.3c-2.6 1.2-4.9 1.8-6.8 1.8-2.4 0-4.3-.7-5.7-2.1-1.4-1.4-2.2-3.3-2.2-5.7 0-2.3.8-4.2 2.4-5.6s3.6-2.1 6-2.1c1.6 0 3.5.3 5.5 1v3.8h-.6c-.2-1.3-.7-2.3-1.5-3.1-.8-.8-1.9-1.2-3.1-1.2-1 0-1.9.2-2.6.6-.7.4-1.2.9-1.6 1.6-.4.7-.6 1.4-.8 2.2-.2.8-.2 1.7-.2 2.7v1.2c0 .4.1.8.1 1.3.1.5.2 1 .3 1.4.1.4.3.8.5 1.2.2.4.5.8.8 1 .3.3.7.5 1.1.7.5.2 1 .3 1.6.3 1.1 0 1.9-.2 2.6-.6.6-.4 1-1.1 1-1.9V12h-2zM230.2 12v-.6h7v.6h-1.8v5.3c-2.6 1.2-4.9 1.8-6.8 1.8-2.4 0-4.3-.7-5.7-2.1-1.4-1.4-2.2-3.3-2.2-5.7 0-2.3.8-4.2 2.4-5.6s3.6-2.1 6-2.1c1.6 0 3.5.3 5.5 1v3.8h-.6c-.2-1.3-.7-2.3-1.5-3.1-.8-.8-1.9-1.2-3.1-1.2-1 0-1.9.2-2.6.6-.7.4-1.2.9-1.6 1.6-.4.7-.6 1.4-.8 2.2-.2.8-.2 1.7-.2 2.7v1.2c0 .4.1.8.1 1.3.1.5.2 1 .3 1.4.1.4.3.8.5 1.2.2.4.5.8.8 1 .3.3.7.5 1.1.7.5.2 1 .3 1.6.3 1.1 0 1.9-.2 2.6-.6.6-.4 1-1.1 1-1.9V12h-2z"/></svg>
	<?php
}

add_action( 'theme_logo_mobile', 'theme_logo_mobile' );

/**
 * Get our socials from the theme customizer and display them.
 */
function bz_theme_socials() {
	$facebook_url  = get_field( 'socials_facebook', 'options' );
	$instagram_url = get_field( 'socials_instagram', 'options' );
	$tripadv_url   = get_field( 'socials_tripadvisor', 'options' );


	$social_output = '<div class="socials-wrapper">';

	if ( $facebook_url ) :
		$social_output .= '<a href="' . esc_url( $facebook_url ) . '" target="_blank" class="social-link social-link__facebook"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg></a>';
	endif;
	if ( $instagram_url ) :
		$social_output .= '<a href="' . esc_url( $instagram_url ) . '" target="_blank" class="social-link social-link__instagram"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></a>';
	endif;
	if ( $tripadv_url ) :
		$social_output .= '<a href="' . esc_url( $tripadv_url ) . '" class="social-link social-link__tripadvisor"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 797.4 512"><path d="M668 296.4c0 39-31.6 70.7-70.7 70.7s-70.7-31.6-70.7-70.7c0-39 31.6-70.7 70.7-70.7s70.7 31.7 70.7 70.7zm-469.2-70.7c-39 0-70.7 31.6-70.7 70.7 0 39 31.6 70.7 70.7 70.7s70.7-31.6 70.7-70.7c0-39-31.6-70.7-70.7-70.7zm598.4 70.7c0 110-89.3 199.2-199.3 199.2-50.2.1-98.6-18.9-135.4-53.1L398.7 512l-63.9-69.5c-36.8 34.2-85.2 53.2-135.4 53.1C89.4 495.6.2 406.4.2 296.4c-.1-56 23.5-109.5 65-147.2L0 78.2h144.9c153.3-104.3 354.7-104.3 508 0h144.5l-65.2 70.9c41.5 37.8 65.1 91.2 65 147.3zm-462.9 0c0-74.5-60.4-134.8-134.8-134.8-74.5 0-134.8 60.4-134.8 134.8 0 74.5 60.4 134.8 134.8 134.8s134.8-60.3 134.8-134.8zm214-201.3c-47.4-19.8-98.3-30-149.7-29.9-51.4-.1-102.2 10.1-149.6 29.9 85.1 32.6 149.6 108.7 149.6 197.4.1-88.7 64.6-164.8 149.7-197.4zm184.4 201.3c0-74.5-60.4-134.8-134.8-134.8S463.1 222 463.1 296.4c0 74.5 60.4 134.8 134.8 134.8s134.8-60.3 134.8-134.8z"/></svg></a>';
	endif;

	$social_output .= '</div>';

	echo $social_output;
}

add_action( 'socials', 'bz_theme_socials' );

/**
 * Implement and customize Yoast Breadcrumbs.
 */
function bz_theme_breadcrumbs() {
	if ( function_exists( 'yoast_breadcrumb' ) ) :
		add_filter( 'wpseo_breadcrumb_separator', function( $separator ) {
			return '<span class="breadcrumbs-separator"><svg id="breadcrumbs-icon-separator" xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10" fill="none"><path d="M1 9L4.67453 5.70707C5.10849 5.31818 5.10849 4.68182 4.67453 4.29293L1 1" stroke="white" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/> </svg></span>';
		} );
		yoast_breadcrumb( '<p id="breadcrumbs"><svg viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="none" id="breadcrumbs-icon-home"><g stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g fill="#000000"> <path d="M7.846 2.574a.25.25 0 01.308 0l5.25 4.12a.25.25 0 01.096.196v7.36a.75.75 0 001.5 0V6.89a1.75 1.75 0 00-.67-1.377L9.08 1.394a1.75 1.75 0 00-2.16 0l-5.25 4.12A1.75 1.75 0 001 6.89v7.36a.75.75 0 001.5 0V6.89a.25.25 0 01.096-.196l5.25-4.12z"></path> <path d="M6.5 14.25V10.5h3v3.75a.75.75 0 001.5 0v-4C11 9.56 10.44 9 9.75 9h-3.5C5.56 9 5 9.56 5 10.25v4a.75.75 0 001.5 0z"></path> </g> </g></svg>', '</p>' );
	endif;
}

add_action( 'breadcrumbs', 'bz_theme_breadcrumbs' );

/**
 * Implement custom made WPML Language Switcher.
 */
/*function az_theme_custom_ls() {
	global $sitepress;
	$az_ls = $sitepress->get_ls_languages();

	if ( ! empty( $az_ls ) ) :
		echo '<ul class="az-custom-language-switcher-menu">';
		$first_lng = array_shift( $az_ls );
		echo '<li class="dropdown"><a href="' . $first_lng['url'] . '" aria-haspopup="true">' . strtoupper( $first_lng['code'] ) . '</a>';
		if ( ! empty( $az_ls ) ) :
			echo '<ul class="dropdown-content" aria-label="submenu">';
			foreach ( $az_ls as $lng ) :
				echo '<li><a href="' . $lng['url'] . '">' . strtoupper( $lng['code'] ) . '</a></li>';
			endforeach;
			echo '</ul>';
		endif;
		echo '</li></ul>';
	endif;

}

add_action( 'az_ls', 'az_theme_custom_ls' );*/
